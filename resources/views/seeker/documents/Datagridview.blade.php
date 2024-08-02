
<tr class="record{{$item->id}}">
<td>{{ 1 }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->tag }}</td>
<td>{{ $item->type }}</td>
<td>{{ $item->created_at }}</td>
<td>{{ $item->updated_at }}</td>
<td id="actionsBox">
    <div class="action_box">
        <a href="{{ route('seeker.document.edit',['id'=>$item->id]) }}">
            <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Edit.png')}}" alt="d"></button>
        </a>
        {{-- 
        <form action="{{ route('seeker.education.destroy',['id'=>$item->EduId]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
            <button  edu_id="{{$item->EduId}}" class="btn_delete btn btn-danger btn_action" type="submit"><img src="{{asset('assets/img/actions/Delete.png')}}" alt="delete"></button>
        </form> --}}

        <button  item_id="{{$item->id}}" class="btn_delete btn btn-danger btn_action" ><img src="{{asset('assets/img/actions/Delete.png')}}" alt="delete"></button>
    </div>
</td>
</tr>       