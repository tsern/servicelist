<div>
    <a href="{{url('addresses/create')}}">Create new Address</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Country</th>
            <th>City</th>
            <th>Street</th>
            <th>Number</th>
            <th>Type</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @if($addresses->count())
                @foreach($addresses as $address)
                    <tr>
                        {{--<td><input type="checkbox" class="checkthis" /></td>--}}
                        <td>{{$address->id}}</td>
                        <td>{{$address->country}}</td>
                        <td>{{$address->city}}</td>
                        <td>{{$address->street}}</td>
                        <td>{{$address->number}}</td>
                        <td>{{$address->type}}</td>
                        <td>{{$address->lat}}</td>
                        <td>{{$address->lon}}</td>
                        <td><a href="{{url('addresses/show/'.$address->id)}}">Edit</a></td>
                        <td><a href="{{url('addresses/delete/'.$address->id)}}">Delete</a></td>
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