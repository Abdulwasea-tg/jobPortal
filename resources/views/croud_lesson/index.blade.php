{{-- croud lesson --}}

{{-- create
show
edite
read
update
delete --}}

{{-- <form action="{{ route('job.destroy',['job'=>1]) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="delete">
</form>
 --}}
{{-- {!! to_route('receive') !!} --}}


{{-- ==============Model lesson========= --}}

<a href="{{route('job.create')}}">Create</a>
<table width=100% style="text-align: left">
    <thead>
        <tr>
            <th>name</th>
            <th>content</th>
            <th>created</th>
            <th>updated</th>
            <th>deleted_at</th>
            {{-- <th>my_soft_delete</th> --}}
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($test as $item)
            
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->content}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>{{$item->deleted_at}}</td>
            {{-- <td>{{$item->my_soft_delete}}</td> --}}
            {{-- <td>{{$item->id}}</td> --}}
            <td><a href="job/{{$item->id}}/edit">edit</a></td>
            <td><a href="job/{{$item->id}}">show</a></td>
            <td>
                <form action="{{route('job.destroy', ['job'=>$item->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>

        </tr>   

        @endforeach
    </tbody>
</table>
<H1> Trashe</H1>
<table width=100% style="text-align: center">
    <thead>
        <tr>
            <th>name</th>
            <th>content</th>
            <th>created</th>
            <th>updated</th>
            <th>deleted_at</th>
            {{-- <th>my_soft_delete</th> --}}
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trushed as $item)
            
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->content}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td>{{$item->deleted_at}}</td>
            {{-- <td>{{$item->my_soft_delete}}</td> --}}
            {{-- <td>{{$item->id}}</td> --}}
            <td><a href="job/restor/{{$item->id}}">restor</a></td>
            <td>
                <form action="{{route('job.forcDelete', ['job'=>$item->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="forcdelete">
                </form>
            </td>
        </tr>   

        @endforeach
    </tbody>
</table>



