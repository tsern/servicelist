<script src="{{ asset('js/app.js') }}" defer></script>

<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script src="{{ asset('js/require.min.js') }}" defer></script>

<script>
 requirejs.config({
  baseUrl: '.'
 });
</script>

<script src="{{ asset('js/dashboard.js') }}" defer></script>

<script src="{{ asset('plugins/charts-c3/plugin.js') }}" defer></script>

<script src="{{ asset('plugins/maps-google/plugin.js') }}" defer></script>

<script src="{{ asset('plugins/input-mask/plugin.js') }}" defer></script>

{{--<script src="{{ asset('js/common.js') }}" defer></script>--}}