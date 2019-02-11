@extends('layouts.one_column_template')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Update Company</h3>
        </div>
        <form method="POST" action="{{ url('company/update', ['id' => $company->id]) }}"  role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$company->name}}" id="name" placeholder="Company name">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <textarea rows="5" class="form-control" name="description" placeholder="Description">{{$company->description}}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                            <input type="file" class="form-control" name="logo">
                        </div>
                    </div>
                </div>

            <div class="form-footer">
                <div class="btn-list">
                    <input type="submit" class="btn btn-success btn-block" value="Update">
                    <a href="{{ url('company/index') }}" class="btn btn-danger btn-block">Back</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
