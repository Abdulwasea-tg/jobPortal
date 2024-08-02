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
                <h3>{{__('Edit')}}</h3>    
            </span>
        @endsection
        
        <!-- countent1 -->
        <div>
             <!-- countent2 -->
            <div class="container">
                @include('seeker/layout/includes/alerts/success')
                @include('seeker/layout/includes/alerts/errors')
            <form class="d-flx-cnw g16" action="{{ route('seeker.document.update', ['id'=>$document->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="d-flx-r g16">
                    <div>
                        <input type="file" name="document" id="file" style="height: 100%;text-aline:center;">
                        @error('document')
                        <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <div>
                            {{-- <label for="">{{ __('Feedback') }}</label> --}}
                            <input type="text" name="name" id="name" placeholder="{{__('messages.Document name')}}" value="{{ $document->name }}">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            {{-- <label for="">{{ __('Feedback') }}</label> --}}
                            <select name="type" id="type">
                                <option value="0" @selected($document->type=="Resume")>{{__('messages.Resume')}}</option>
                                <option value="1" @selected($document->type=="Cover Letter")>{{__('messages.Cover Letter')}}</option>
                            </select>
                            @error('type')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
        
                        <div class="mt16">
                            <a class="btn-outlin " href="{{redirect()->back()}}">{{ __('messages.Cancel') }}</a>
                            <input type="submit" name="update" value="{{ __('messages.Update') }}">
                        </div>

                    </div>
                    
                </div>


            </form>
            
            </div>

        </div>    
    </div><!-- End center -->

@endsection    