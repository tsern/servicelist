# Views folder
All views should be extended from one_column_template.php (../layouts/one_column_template.php)
### Custom scripts / styles
Put the folowin code to your view
```blade
@section('custom_styles')
    {{-- Your styles goes here --}}
    <script src="{{ asset('assets/css/example.css') }}" defer></script>
@endsection
```

```blade
@section('custom_scripts')
    {{-- Your scripts goes here --}}
    <script src="{{ asset('assets/js/example.js') }}" defer></script>
@endsection
```
## Theme parts
Feel free to put the folowing code to your view
### Custom styles
```blade
@section('custom_styles')
    {{-- Your styles goes here --}}
    <script src="{{ asset('assets/css/example.css') }}" defer></script>
@endsection
```
### Custom scripts
```blade
@section('custom_scripts')
    {{-- Your scripts goes here --}}
    <script src="{{ asset('assets/js/example.js') }}" defer></script>
@endsection
```
### Page title
```blade
@section('title','Your page title')
```
### Header
```blade
@section('header')
    {{-- Your header goes here --}}
    {{-- You can include default header--}}
    @include('layouts.components.header')
@endsection
```
### Content
```blade
@section('content')

    {{-- Your content goes here --}}
    
@endsection
```
### Footer
```blade
@section('footer')
    {{-- Your footer goes here --}}
    {{-- You can include default footer--}}
    @include('layouts.components.footer')
@endsection
```
## Example (Welcome page)
```blade
@extends('layouts.one_column_template')

@section('title', 'Welcome')

@section('header')
    @include('layouts.components.header')
@endsection

@section('content')

    <div class="col-12 d-flex flex-column justify-content-center align-content-center h-100">
        <h1 class="title m-b-md mx-auto display-1">Service list</h1>
        <div class="links mx-auto">
            <a href="#">Documentation</a>
            <a href="https://github.com/maxinoxoft/servicelist">GitHub</a>
        </div>
    </div>

@endsection

@section('footer')
    @include('layouts.components.footer')
@endsection
```