@extends('layouts.one_column_template')

@section('content')
    @if ($errors->any())
        <h3>{{ implode('', $errors->all(':message')) }}</h3>
    @endif
    <div>
        <div>
             <div>
                <table>
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
                </table>
            </div>
        </div>
    </div>
@endsection