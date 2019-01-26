<div>
    <a href="{{url('company/create')}}">Create new Company</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Company name</th>
            <th>Company logo</th>
            <th>Company address</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @if($companies->count())
                @foreach($companies as $company)
                    <tr>
                        {{--<td><input type="checkbox" class="checkthis" /></td>--}}
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td><img src={{url('storage/'.$company->logo)}} height="120px" width="150px"></td>
                        <td>{{$company->location}}</td>
                        <td><a href="{{url('company/show/'.$company->id)}}">Edit</a></td>
                        <td><a href="{{url('company/delete/'.$company->id)}}">Delete</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No Records found !!</td>
                </tr>
                @endif
        </tbody>
    </table>
</div>