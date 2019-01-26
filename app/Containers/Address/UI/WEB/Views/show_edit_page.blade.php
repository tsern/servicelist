<form method="POST" action="{{ url('addresses/update', ['id' => $address->id]) }}"  role="form" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div>
        <div>
            <div>
                <input type="text" name="country" value="{{$address->country}}" placeholder="Your country" required>
            </div>
        </div>
    </div>

    <div>
        <input type="text" name="city" value="{{$address->city}}" placeholder="Your city" required>
    </div>

    <div>
        <input type="text" name="street" value="{{$address->street}}" placeholder="Your street" required>
    </div>

    <div>
        <input type="text" name="number" value="{{$address->number}}" placeholder="Number" required>
    </div>
    <div>
        <input type="text" name="type" value="{{$address->type}}" placeholder="Type" required>
    </div>
    <div>
        <input type="text" name="lat" value="{{$address->lat}}" placeholder="latitude" required>
    </div>
    <div>
        <input type="text" name="lon" value="{{$address->lon}}" placeholder="longitude" required>
    </div>
    <div>
        <div>
            <input type="submit"  value="Update">
            <a href="{{ url('addresses') }}">Cancel</a>
        </div>
    </div>
</form>