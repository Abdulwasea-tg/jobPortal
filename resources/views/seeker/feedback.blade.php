@extends('seeker.layout.app')

@prependOnce('css')
    
@endPrependOnce

@section('content')

    <!-- center -->
    <div class="center" style="position:relative;">
        <!-- titel -->
        @section('title')
            <span class="titel">
                <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
                <h3>{{__('Give Your Feedback')}}</h3>    
            </span>
        @endsection
        
        <!-- countent1 -->
        <div>
             <!-- countent2 -->
            <div class="container">
                @include('seeker/layout/includes/alerts/success')
                @include('seeker/layout/includes/alerts/errors')
                <form class="d-flx-cnw g16" action="{{ route('seeker.feedback.store') }}" method="post">
                    @csrf
                    <div>
                        {{-- <label for="">{{ __('Feedback') }}</label> --}}
                        <textarea name="Feedback" id="Feedback" cols="60" rows="10" placeholder="{{__('Write feedback here...*')}}"></textarea>
                        @error('Feedback')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt16">
                        <input type="submit" name="sendFeedback" value="{{ __('Send') }}">
                    </div>
                </form>
            </div>

        </div>    
    </div><!-- End center -->

@endsection    