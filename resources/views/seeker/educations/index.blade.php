@extends('seeker.layout.app')

@prependOnce('css')
    
@endPrependOnce

<?php
/* $dataset= array(
    "attributes"=>array('Degree', 'University', 'Passin Year', 'Percentage(%)'),
    // "data" => $data,
); */
// print($dataset);

/* foreach ($dataset["attributes"] as $value) {
    echo $value;
} */
?>

{{-- @dump($dataset) --}}

{{-- @gridView(['path'=>'seeker.educations.Datagridview','data'=>$data,'item'=>'item', 'emptyPath'=>'seeker.educations.emptyData', 'attributes'=>['Degree', 'University', 'Passin Year', 'Percentage(%)']])
 --}}
@section('content')
    @section('title')
        <span class="titel">
            <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
            <h3>Education Management</h3>    
        </span>
        @include('employer.layout.includes.alerts.success')
        @include('employer.layout.includes.alerts.errors')
        <div class="alert alert-success" role="alert" id="alert_succ_msg" style="display:none;">
            Deleted successfuly.
        </div>
        <div class="alert alert-error" id="alert_err_msg" style="display:none; background-color:lightgreen">
            faild deleted.
        </div>
    @endsection


    @section('action')
        <a href="{{ route('seeker.education.create') }}"><input type="submit" value="+ Create"></a>
    @endsection

    {{-- @gridView(['path'=>'resources\views\seeker\educations\Datagridview.blade.php','data'=>$data,'item'=>'item', 'emptyPath'=>'seeker.educations.emptyData', 'attributes'=>['Degree', 'University', 'Passin Year', 'Percentage(%)']]) --}}


    <table class='tb2'>
        <thead>
            <tr>
                <th>#</th>
                <th>Degree</th>
                <th>University</th>
                <th>Passin Year</th>
                <th>Percentage(%)</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            @each('seeker.educations.Datagridview', $data, 'item', 'seeker.educations.emptyData')
        </tbody>
    </table>



@endsection 

@section('scripts')
    <script>
        $(document).on("click", ".btn_delete", function(e){
            e.preventDefault();
            var edu_id = $(this).attr('edu_id');//get the value of attribute

            $.ajax({
                type: 'post',
                url : "{{route('seeker.education.destroy')}}",
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

