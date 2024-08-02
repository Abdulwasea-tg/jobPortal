<tr>
<td>{{ $job->getIterator}}</td>
<td>{{ $job->JobTitle }}</td>
<td>{{ $job->seekers()->get()->count() }}</td>
<td>
    <div class="action_box">
        <a href="{{ route('employer.application.show',['employer'=>1,'job'=>$job->id]) }}">
            <button class="btn_action"  type='submit'><img src="{{asset('assets/img/actions/View.png')}}" alt=""></button>
            {{-- <input type="submit"  value="applications"> --}}
        </a>
    </div>


</td>
</tr>       