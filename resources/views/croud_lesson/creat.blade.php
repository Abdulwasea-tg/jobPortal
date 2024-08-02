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

<form action="{{ route('job.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{old('name')}}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <input type="email" name="email" placeholder="email">
    <br>
    <textarea name="content" placeholder="content">{{old('content')}}</textarea>
    @error('content')
        <p>{{ $message }}</p>
    @enderror
    <input type="submit" value="create/add">
</form>





