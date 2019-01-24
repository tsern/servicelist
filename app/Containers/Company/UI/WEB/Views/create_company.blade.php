<form method="POST" action="{{ url('company/store') }}"  role="form">
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="text" name="name" id="name" class="form-control input-sm" placeholder="Company name" required>
        </div>
    </div>
</div>

<div class="form-group">
    <textarea name="description" class="form-control input-sm" placeholder="Company description" required></textarea>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <input type="file" name="logo" required>
        </div>
    </div>
</div>

{{--<div class="row">--}}
    {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
        {{--<div class="form-group">--}}
            {{--<input type="text" name="location" class="form-control input-sm" placeholder="Your location" required>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <input type="submit"  value="Save" class="btn btn-success btn-block">
        <a href="{{ url('company/index') }}" class="btn btn-info btn-block">Cancel</a>
    </div>
</div>
</form>