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
            <form class="d-flx-cnw g16" action="{{ route('seeker.education.update', ['id'=>$education->EduId]) }}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="">{{ __('Degree') }}</label>
                    <input type="text" name="Degree" placeholder="Enter degree*" value="{{ $education->Degree }}">
                    @error('Degree')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="">{{ __('University/Board Name') }}</label>
                    <input type="text" name="University" placeholder="Enter Univercity name*" value="{{ $education->University }}">
                    @error('University')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="">{{ __('Passing Year') }}</label>
                    <select name="PassingYear" value="{{ $education->PassingYear }}">
                        @for ($year =(int) date("Y"); 1900<=$year; $year--)
                            <option value="{{$year}}" @selected($year==$education->PassingYear)>{{ $year }}</option>
                        @endfor
                    </select> 
                    @error('PassingYear')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="">{{ __('Percentage(%)') }}</label>
                    <input type="number" name="Percentage" placeholder="Enter Percentage*" value="{{ $education->Percentage }}">
                    @error('Percentage')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt16">
                    <a class="btn-outlin " href="{{redirect()->back()}}">{{ __('Cancel') }}</a>
                    <input type="submit" name="updateEdu" value="{{ __('Update') }}">
                </div>
                {{-- <table>
                    <thead>
                        <td>Creat Eductional Profile</td>
                    </thead>
                    <tr>
                        <td>Degree :</td>
                        <td>
                            <input type="text" name="Degree" placeholder="Enter degree*" value="{{ $education->Degree }}">
                            @error('Degree')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                        <td>University/Board Name:</td>
                        <td>
                            <input type="text" name="University" placeholder="Enter Univercity name*" value="{{ $education->University }}">
                            @error('University')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Passing Year:</td>
                        <td>
                            <select name="PassingYear" value="{{ $education->PassingYear }}">
                                @for ($year =(int) date("Y"); 1900<=$year; $year--)
                                    <option value="{{$year}}" @selected($year==$education->PassingYear)>{{ $year }}</option>
                                @endfor
                            </select> 
                            @error('PassingYear')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>

                        <td>Percentage(%):</td>
                        <td>
                            <input type="number" name="Percentage" placeholder="Enter Percentage*" value="{{ $education->Percentage }}">
                            @error('Percentage')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                    <td></td>
                    
                    <td>
                        <a class="btn_outline pb8 btn-outlin" href="{{redirect()->back()}}">Cancel</a>
                        <input type="submit" name="updateEdu" value="update">
                    </td>
                    </tr>
                </table> --}}
            </form>
            </div>

        </div>    
    </div><!-- End center -->

@endsection    