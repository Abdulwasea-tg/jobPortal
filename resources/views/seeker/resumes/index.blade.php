@extends('seeker.layout.app')

@prependOnce('css')
    
@endPrependOnce

@section('content')
    @section('title')
    <span class="titel">
        <i class="icon"><a href="{{redirect()->route('seeker.profile.index')}}">Back</a></i>
        <h3>Resumes Management</h3>    
    </span>
    @include('employer.layout.includes.alerts.success')
    @include('employer.layout.includes.alerts.errors')
    @endsection

    @section('action')
    <a href="{{ route('seeker.education.create') }}"><input type="submit" value="{{__('+ Upload new resume')}}"></a>
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
        <tbody>
            @each('seeker.resumes.Datagridview', $data, 'item', 'seeker.resumes.emptyData')
        </tbody>
    </table>

@endsection    