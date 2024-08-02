@if(Session::has('error'))
    <div class="row mr-2 ml-2" >
            <div class="alert alert-error" id="alert_err_msg" {{-- style="display:none; background-color:lightgreen" --}}>
                {{Session::get('error')}}
            </div>
    </div>
@endif
