@if ($errors->any())
    <h3>{{ implode('', $errors->all(':message')) }}</h3>
@endif

<form method="POST" action="{{ url('addresses/store') }}"  role="form" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div>
        <div>
            <div>
                <input type="text" name="country" placeholder="Your country" required>
            </div>
        </div>
    </div>

    <div>
        <input type="text" name="city" placeholder="Your city" required>
    </div>

    <div>
        <input type="text" name="street" placeholder="Your street" required>
    </div>

    <div>
        <input type="text" name="number" placeholder="Number" required>
    </div>
    <div>
        <input type="text" name="type" placeholder="Type" required>
    </div>
    <div>
        <input type="text" name="lat" placeholder="latitude" required>
    </div>
    <div>
        <input type="text" name="lon" placeholder="longitude" required>
    </div>
    <div>
        <div>
            <input type="submit"  value="Save">
            <a href="{{ url('addresses') }}">Cancel</a>
        </div>
    </div>
</form>