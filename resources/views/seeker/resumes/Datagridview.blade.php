
<tr>
<td>{{ 1 }}</td>
<td>{{ $item->Degree }}</td>
<td>{{ $item->University }}</td>
<td>{{ $item->PassingYear }}</td>
<td>{{ $item->Percentage }}</td>
<td>
    <div class="action_box">
        <a href="{{ route('seeker.education.edit',['id'=>$item->EduId]) }}">
            <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Edit.png')}}" alt="d"></button>
        </a>
        <form action="{{ route('seeker.education.destroy',['id'=>$item->EduId]) }}" method="post">
            @csrf
            @method('delete')
            {{-- <input type="submit" value="delete"> --}}
            <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Delete.png')}}" alt="d"></button>
        </form>
    </div>


</td>
</tr>       