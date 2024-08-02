
<tr class="record{{$item->EduId}}">
<td>{{ 1 }}</td>
<td>{{ $item->Degree }}</td>
<td>{{ $item->University }}</td>
<td>{{ $item->PassingYear }}</td>
<td>{{ $item->Percentage }}</td>
<td id="actionsBox">
    <div class="action_box">
        <a href="{{ route('seeker.education.edit',['id'=>$item->EduId]) }}">
            <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Edit.png')}}" alt="d"></button>
        </a>
        {{-- 
        <form action="{{ route('seeker.education.destroy',['id'=>$item->EduId]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="delete">
            <button  edu_id="{{$item->EduId}}" class="btn_delete btn btn-danger btn_action" type="submit"><img src="{{asset('assets/img/actions/Delete.png')}}" alt="delete"></button>
        </form> --}}

        <button  edu_id="{{$item->EduId}}" class="btn_delete btn btn-danger btn_action" ><img src="{{asset('assets/img/actions/Delete.png')}}" alt="delete"></button>
    </div>
</td>
</tr>       