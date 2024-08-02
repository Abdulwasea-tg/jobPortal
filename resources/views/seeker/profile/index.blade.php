@extends('seeker.layout.app')

@prependOnce('css')

    
@endPrependOnce
@section('content')

    @section('title')
    <span class="titel">
        <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
        <h3>Profile</h3>    
    </span>
    @endsection

    @include('seeker/layout/includes/alerts/success')
    @include('seeker/layout/includes/alerts/errors')
    
    <table>
            <tr>

            <tr>
                <td>Name:</td>
                <td>{{$seeker->JobSeekerName}}</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{$seeker->Address}}</td>
            </tr>
            <tr>
                <td>City:</td>
                <td>{{$seeker->City}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{$seeker->Email}}</td>
            </tr>
            <tr>
                <td>Mobile:</td>
                <td>{{$seeker->Mobile}}</td>
            </tr>
            <td>Highst Qualification:</td>
                <td>{{$seeker->Qualification}}</td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>{{$seeker->Gender}}</td>
            </tr>
            <tr>
                <td>Birth Date:</td>
                <td>{{$seeker->BirthDate}}</td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>{{$seeker->UserName}}</td>
            </tr>
            <tr>
                <td>Resume:</td>
                <td><a href="{{asset('images/seekers/resumes\/').$seeker->Resume}}" target="_blank">View</a></td>
            </tr>


            <tr>
                <td></td>
                <td><a href="{{route('seeker.profile.edit',['seeker'=>$seeker->JobSeekId])}}">Edit Profile</a></td>
            </tr>
    </table>

@endsection
