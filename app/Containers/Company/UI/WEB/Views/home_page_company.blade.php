@extends('layouts.one_column_template')

{{--@section('title','List of Company')--}}
{{--@section('header')--}}
    {{--@include('layouts.components.header')--}}
{{--@endsection--}}
@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">Company</h1>
            </div>
                @if ($errors->any())
                    <h3>{{ implode('', $errors->all(':message')) }}</h3>
                @endif
                @if($companies->count())
                    @foreach($companies as $company)

                    <div class="row row-cards row-deck">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src={{url('storage/uploads'.substr($company->logo, strlen('public/')))}} alt="logo">
                                <div class="card-body d-flex flex-column">
                                    <h4>
                                        <a href="#">{{$company->name}}</a>
                                    </h4>
                                    <div class="text-muted">
                                        {{$company->description}}
                                    </div>
                                    <div>
                                        {{$company->location}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <tr>
                    <td>No Records found !!</td>
                </tr>
            @endif

        </div>
    </div>
@endsection
{{--@section('footer')--}}
    {{--@include('layouts.components.footer')--}}
{{--@endsection--}}