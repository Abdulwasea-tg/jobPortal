{{-- croud lesson --}}

{{-- <form action="{{ route('job.update',['job'=>1]) }}" method="post">
    @csrf
    @method('put')
    <input type="submit" value="update">
</form> --}}

{{-- {!! to_route('receive') !!} --}}


{{-- ==============Model lesson (update data)========= --}}
{{-- Displaying the Validation Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('job.update',['job'=>$test->id]) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="name" value="{{$test->name}}">
    <br>
    <textarea name="content" placeholder="content">{{ $test->content }}</textarea>
    <input type="submit" value="update">
</form>

{{-- {!! to_route('receive') !!} --}}



