@extends('seeker.layout.app')

@prependOnce('css')

    
@endPrependOnce

@section('content')

<!-- center -->
    <div class="center">

        <!-- titel -->
        @section('title')
            <span class="titel">
                <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
                <h3>{{__('messages.create')}}</h3>    
            </span>
        @endsection
        
        <!-- countent1 -->
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @include('seeker.layout.includes.alerts.success')
            @include('seeker.layout.includes.alerts.errors')
             <!-- countent2 -->


             
             <form id="formData" action="{{route('seeker.document.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flx-r g16">
                    <div>
                        <input type="file" name="document" id="file" style="height: 100%;text-aline:center;">
                        @error('document')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div  class="d-flex-c gc16">
                        <div>
                            {{-- <label for="">{{ __('Feedback') }}</label> --}}
                            <input type="text" name="name" id="name" placeholder="{{__('messages.Document name')}}">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            {{-- <label for="">{{ __('Feedback') }}</label> --}}
                            <select name="type" id="type">
                                <option value="0">{{__('messages.Resume')}}</option>
                                <option value="1">{{__('messages.Cover Letter')}}</option>
                            </select>
                            @error('type')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="mt16">
                            <input type="submit" id="save" name="add" value="{{__('messages.Add')}}">
                            {{-- <button type="submit" id="save">{{__('messages.Add')}}</button> --}}
                        </div>

                    </div>
                    
                </div>

        </div>    
    </div><!-- End center -->
@endsection  

{{-- @section('scripts')

<script>
    $(document).on('click', '#save', function(e){
        e.preventDefault();
        var formData = new formData($('#formData')[0]);
        $.ajax({
            type:'post',
            url:"{{route('seeker.education.store')}}",
            data:formData,
            success:function(data){

            },
            error:function(reject){

            },

        })
    })

</script>
    
@endsection --}}