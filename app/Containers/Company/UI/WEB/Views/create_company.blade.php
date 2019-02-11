@extends('layouts.one_column_template')

@section('content')
@if ($errors->any())
    <h3>{{ implode('', $errors->all(':message')) }}</h3>
@endif
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create new company</h3>
        </div>
        @if (count($errors) > 0)
            <div>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-info">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="POST" action="{{ url('company/store') }}"  role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Company name<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Company description<span class="form-required">*</span></label>
                            <textarea rows="5" class="form-control" name="description" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Browse your logo<span class="form-required">*</span></label>
                            <input type="file" class="form-control" name="logo">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Your country<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="country">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label class="form-label">Your city<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="city">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                            <label class="form-label">Your street<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="street">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Number<span class="form-required">*</span></label>
                            <input type="number" class="form-control" name="number">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Type<span class="form-required">*</span></label>
                                <select class="form-control custom select" required name="type" >
                                    <option value=""hidden>Who you are?</option>
                                    <option value="1">Company</option>
                                    <option value="0">Member</option>
                                </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Latitude<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="lat" required>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Longitude<span class="form-required">*</span></label>
                            <input type="text" class="form-control" name="lon" required>
                        </div>
                    </div>
                </div>

                <div class="form-footer">
                    <div class="btn-list">
                        <input type="submit" class="btn btn-success btn-block" value="Save">
                        <a href="{{ url('company/index') }}" class="btn btn-danger btn-block">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection