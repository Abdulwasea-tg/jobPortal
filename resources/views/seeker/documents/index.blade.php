@extends('seeker.layout.app')

@prependOnce('css')
    
@endPrependOnce

@section('content')
    @section('title')
        <span class="titel">
            <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
            <h3>Documents Management</h3>    
        </span>
        @include('employer.layout.includes.alerts.success')
        @include('employer.layout.includes.alerts.errors')
        <div class="alert alert-success" id="alert_succ_msg" style="display:none;">
            Deleted successfuly.
        </div>
        <div class="alert alert-error" id="alert_err_msg" style="display:none; background-color:lightgreen">
            faild deleted.
        </div>
    @endsection

    @section('action')
        <a href="{{ route('seeker.document.create') }}"><input type="submit" value="+ Create"></a>
    @endsection

    <table class='tb2'>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Tag</th>
                <th>Document Type</th>
                <th>Created</th>
                <th>Last Modified</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            @each('seeker.documents.Datagridview', $data, 'item', 'seeker.documents.emptyData')
        </tbody>
    </table>

@endsection 

@section('scripts')
    <script>
        $(document).on("click", ".btn_delete", function(e){
            e.preventDefault();
            var edu_id = $(this).attr('item_id');//get the value of attribute

            $.ajax({
                type: 'post',
                url : "{{route('seeker.document.destroy')}}",
                data :{
                    "_token" : "{{csrf_token()}}",
                    "id" : edu_id,
                },
                success:function(data){
                    if (data.status == true) {
                        $('#alert_succ_msg').show();// dispaly success message
                        $(".record"+data.id).remove();// delete record

                    }
                    if (data.status == false) {
                        $('#alert_err_msg').show();
                    }
                }
            })
        })
    </script>
    
@endsection

