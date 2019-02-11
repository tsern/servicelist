@extends('layouts.one_column_template')

@section('title','List of Company')
@section('header')
    @include('layouts.components.header')
@endsection
@section('content')

<style>
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<div class="container">
    <div class="row row-cards">
        <div class="col-lg-8 col-md-6">
            <div class="card">
                <div class="map">
                    <div class="map-content" id="map"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card" id="allCompanies">
                <div class="card-header">
                    <h3 class="card-title">List of Companies</h3>
                </div>

                @if ($errors->any())
                    <h3>{{ implode('', $errors->all(':message')) }}</h3>
                @endif
                @if($companies->count())
                    @foreach($companies as $company)
                    <div class="card-body">
                        <div class="media mb-5">
                            <img class="card-aside-column" src={{url('storage/'.substr($company->logo, strlen('public/')))}} alt="logo">
                            <div class="media-body">
                                <h5>
                                    {{$company->name}}
                                </h5>
                                <div class="text-muted small">
                                    {{$company->address->country}}
                                </div>
                                <div class="text-muted small">
                                    {{$company->address->city}}
                                </div><div class="text-muted small">
                                    {{$company->address->street.' '.$company->address->number}}
                                </div>
                            </div>
                        </div>
                        <div class="h6">Description</div>
                        <p>{{$company->description}}</p>
                    </div>
                    @endforeach
                @else
                    <tr>
                        <td>No Records found !!</td>
                    </tr>
                @endif
            </div>
        </div>
    </div>
</div>
<script>

    geoPos = {
        lat: 49.841952,
        lng: 24.0315921
    };
    let geoAvailable = true;

    if (location.protocol == 'https:' // is https
        && navigator.geolocation) {      // user allowed location
        navigator.geolocation.getCurrentPosition(function (position) {
            geoPos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            geoAvailable = true;
        });
    }

    if (!geoAvailable) {
        //todo redirect to all company
    }

    function initMap() {
        let locations = [];
        @if($companies->count())
        @foreach($companies as $company)
            locations.push(['{{$company->name}}', {{$company->address->lat}}, {{$company->address->lon}}]);
        @endforeach
        @endif

        let map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(geoPos.lat, geoPos.lng),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        let infowindow = new google.maps.InfoWindow();

        let marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZvZvFsO2muk3Eu3ZC1gqYD4efvmaDAU8&callback=initMap">
</script>

@endsection
{{--@section('footer')--}}
    {{--@include('layouts.components.footer')--}}
{{--@endsection--}}