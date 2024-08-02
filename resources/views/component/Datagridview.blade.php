{{-- @php
 //it defiend globaly in the appSrviceprovider in boot function
//$i=0;
@endphp --}}
@php
$i++;
@endphp
<tr>
<td>{{ $i++ }}</td>
<td>{{ $item->JobTitle }}</td>
<td>{{ $item->Vacancy }}</td>
<td>{{ $item->MinQualification }}</td>
<td>{{ $item->Description }}</td>
<td>
    <div class="action_box">
        <a href="{{ route('employer.jobs.edit',['employer'=>1,'job'=>$item->id]) }}">
            <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Edit.png')}}" alt="d"></button>
        </a>
        <form action="{{ route('employer.jobs.destroy',['employer'=>1,'job'=>$item->id]) }}" method="post">
            @csrf
            @method('delete')
            {{-- <input type="submit" value="delete"> --}}
            <button class="btn_action" type='submit'><img src="{{asset('assets/img/actions/Delete.png')}}" alt="d"></button>
        </form>
    </div>


</td>
</tr>       