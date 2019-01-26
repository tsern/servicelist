
@if ($errors->any())
    <h3>{{ implode('', $errors->all(':message')) }}</h3>
@endif

<form method="POST" action="{{ url('company/store') }}"  role="form" enctype="multipart/form-data" >
{{ csrf_field() }}
<div>
    <div>
        <div>
            <input type="text" name="name" id="name" placeholder="Company name" required>
        </div>
    </div>
</div>

<div class="form-group">
    <textarea name="description" placeholder="Company description" required></textarea>
</div>

<div>
    <div>
        <div>
            <input type="file" name="logo">
        </div>
    </div>
</div>

<div>
    <div>
        <input type="submit"  value="Save">
        <a href="{{ url('company/index') }}">Cancel</a>
    </div>
</div>
</form>