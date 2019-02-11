@extends('layouts.one_column_template')

@section('content')
    @if ($errors->any())
        <h3>{{ implode('', $errors->all(':message')) }}</h3>
    @endif
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of companies</h3>
            <a href="{{url('company/create')}}" class="btn btn-primary ml-auto">Create new Company</a>
        </div>
        <div class="card-body">
            <div class="row">
                <table class="table mb-0">
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
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company name</th>
                            <th>Company logo</th>
                            <th>Company address</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($companies->count())
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{$company->id}}</td>
                                    <td>{{$company->name}}</td>
                                    <td><img src={{url('storage/'.substr($company->logo, strlen('public/')))}} height="120px" width="150px"></td>
                                    <td>{{$company->address_id}}</td>
                                    <td><a href="{{url('company/show/'.$company->id)}}"class="btn btn-icon btn-primary">Edit</a></td>
                                    <td><a href="{{url('company/delete/'.$company->id)}}"class="btn btn-icon btn-primary btn-danger">Delete</a></td>
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
        </div>
    </div>
</div>
@endsection