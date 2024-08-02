@extends('seeker.layout.app')
@section('content')

    @section('title')
    <span class="titel">
        <i class="icon">add icon</i>
        <h3>Job Status</h3>    
    </span>
    @endsection

    <table class='tb2'>
        <thead>
            <tr>
                <th>#</th>
                <th>Company Name</th>
                <th>Job Title</th>
                <th>Status</th>
                <th>Description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
           @foreach ($applications as $item)    
           <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item['CompanyName'] }}</td>
            <td>{{ $item['JobTitle'] }}</td>
            <td>{{ $item->pivot->Status }}</td>
            <td>{{ $item->pivot->Description }}</td>
            <td> 
                <a href="{{ route('seeker.jobs.detaile',['id'=>$item->id]) }}" target="_blank">
                    <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/View.png')}}" alt="d"></button>
                </a>
            </td>
            
            </tr>                 
            @endforeach

        </tbody>
    </table>

@endSection