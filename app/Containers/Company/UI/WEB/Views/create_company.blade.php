@extends('layouts.one_column_template')

@section('content')
@if ($errors->any())
    <h3>{{ implode('', $errors->all(':message')) }}</h3>
@endif
<div>
    <div>
        <div>
            <h3>Create new company</h3>
        </div>
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
                        <div>
                            <div>
                                <select required name="type" >
                                    <option value="" hidden>Who you are?</option>
                                    <option value="1">Company</option>
                                    <option value="0">Member</option>
                                </select>
                            </div>
                        </div>
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
                            <a href="{{ url('company/index') }}">Cancel</a>
                        </div>
                    </div>
                </form>
            </table>
        </div>
    </div>
</div>
@endsection