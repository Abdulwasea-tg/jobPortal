@if(Session::has('success'))
    <div class="row mr-2 ml-2">
            <div class="alert alert-success" role="alert" id="alert_succ_msg" {{-- style="position:absolute;top:0px; width:50%;" --}}>
                {{Session::get('success')}}
            </div>
    </div>
@endif
