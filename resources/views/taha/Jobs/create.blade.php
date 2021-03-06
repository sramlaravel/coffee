@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.Jobs')}}">الوظائف</a>
                                </li>
                                <li class="breadcrumb-item active">إضافة الوظيفه
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> إضافة الوظيفه  </h4>
                                    <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('taha.includes.alerts.success')
                                @include('taha.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.Jobs.store' )}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf



                                            <label> اختار الصوره </label>
                                            <label id="projectinput7" class="file center-block">
                                                <input type="file" id="file" name="image">
                                                <span class="file-custom"></span>
                                            </label>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror


                                            <div class="form-body">

                                                <h4 class="form-section">
                                                    <i class="ft-home"></i> بيانات الوظيفة </h4>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الوظيفة - بالعربي  </label>
                                                            <input type="text" value="" id="title_ar"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   name="title_ar">
                                                            @error("title_ar")
                                                            <span class="text-danger">  هذا الحقل مطلوب</span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الوظيفة  -بالانجليزي   </label>
                                                            <input type="text" value="" id="title_en"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   name="title_en">
                                                            @error("title_en")
                                                            <span class="text-danger">  هذا الحقل مطلوب</span>
                                                            @enderror
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <div class="form-group">
                                                            <label for="projectinput1"> متطلبات الوظيفة بالعربي </label>

                                                            <textarea  class="form-control"      id="placeTextarea" rows="3"  name="description_ar" type="text"   placeholder="ادخل الوصف."    >{{Request::old('requirements_ar')}}</textarea>
                                                            @error('requirements_ar')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>

                                                        @error("description_ar")
                                                        <span class="text-danger"> هذا الحقل مطلوب</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <div class="form-group">
                                                            <label for="projectinput1"> متطلبات الوظيفة بالانجليزي </label>

                                                            <textarea  class="form-control"      id="placeTextarea" rows="3"  name="description_en" type="text"   placeholder="ادخل الوصف."    >{{Request::old('requirements_en')}}</textarea>
                                                            @error('requirements_en')
                                                            <span class="text-danger">{{$message}} </span>
                                                            @enderror
                                                        </div>

                                                        @error("requirements_en")
                                                        <span class="text-danger"> هذا الحقل مطلوب</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <label for="projectinput1">الموقع بالعربي  </label>
                                                            <input type="text" id="mobile"
                                                                   class="form-control"
                                                                   placeholder="" name="location_ar"
                                                                   value="{{Request::old('location_ar')}}">

                                                            @error("location_ar")
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> الموقع  -بالانجليزي   </label>
                                                        <input type="text" value="" id="location_en"
                                                               class="form-control"
                                                               placeholder="  "
                                                               name="location_en">
                                                        @error("location_en")
                                                        <span class="text-danger">  هذا الحقل مطلوب</span>
                                                        @enderror
                                                    </div>

                                                </div>

                                                </div>





                                                <div class="row">
                                                    {{--<div class="col-md-6">--}}
                                                    {{--<div class="form-group mt-1">--}}
                                                    {{--<input type="checkbox" value="1"--}}
                                                    {{--name="active"--}}
                                                    {{--id="switcheryColor4"--}}
                                                    {{--class="switchery" data-color="success"--}}
                                                    {{--@if($vendor -> active == 1)checked @endif/>--}}
                                                    {{--<label for="switcheryColor4"--}}
                                                    {{--class="card-title ml-1">الحالة </label>--}}

                                                    {{--@error("active")--}}
                                                    {{--<span class="text-danger"> </span>--}}
                                                    {{--@enderror--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                </div>






                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </section>
            </div>

    </div>
    </div>
@endsection


@section('script')

            {{--<script src="  {{asset(' js/jquery-1.10.1.min.js')}}" type="text/javascript"></script>--}}
            {{--<script type="text/javascript">--}}
                {{--jQuery(document).ready(function ()--}}
                {{--{--}}
                    {{--jQuery('select[name="country_id"]').on('change',function(){--}}
                        {{--var countryID = jQuery(this).val();--}}
                        {{--if(countryID)--}}
                        {{--{--}}


                            {{--jQuery.ajax({--}}
                                {{--url: "{{ url ('/agent/getstates/')}}/"+countryID,--}}
                                {{--type : "GET",--}}
                                {{--dataType: "json",--}}
                                {{--success:function(data)--}}
                                {{--{--}}
                                    {{--console.log(data);--}}
                                    {{--jQuery('select[name="city_id"]').empty();--}}
                                    {{--jQuery  .each(data, function(key,value){--}}
                                        {{--jQuery('select[name="city_id"]').append('<option value="'+ key +'">'+ value +'</option>');--}}

                                    {{--});--}}
                                {{--}--}}
                            {{--});--}}


                        {{--}--}}
                        {{--else--}}
                        {{--{--}}
                            {{--jQuery('select[name="city_id"]').empty();--}}
                        {{--}--}}

                    {{--});--}}
                {{--});--}}
            {{--</script>--}}




        {{--$("#pac-input").focusin(function() {--}}
            {{--$(this).val('');--}}
        {{--});--}}

        {{--$('#latitude').val('');--}}
        {{--$('#longitude').val('');--}}


        {{--// This example adds a search box to a map, using the Google Place Autocomplete--}}
        {{--// feature. People can enter geographical searches. The search box will return a--}}
        {{--// pick list containing a mix of places and predicted search terms.--}}

        {{--// This example requires the Places library. Include the libraries=places--}}
        {{--// parameter when you first load the API. For example:--}}
        {{--// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">--}}

        {{--function initAutocomplete() {--}}
            {{--var map = new google.maps.Map(document.getElementById('map'), {--}}
                {{--center: {lat:15.299129, lng:44.237152 },--}}
                {{--zoom: 14,--}}
                {{--mapTypeId: 'roadmap'--}}
            {{--});--}}

            {{--// move pin and current location--}}
            {{--infoWindow = new google.maps.InfoWindow;--}}
            {{--geocoder = new google.maps.Geocoder();--}}
            {{--if (navigator.geolocation) {--}}
                {{--navigator.geolocation.getCurrentPosition(function(position) {--}}
                    {{--var pos = {--}}
                        {{--lat: position.coords.latitude,--}}
                        {{--lng: position.coords.longitude--}}
                    {{--};--}}
                    {{--map.setCenter(pos);--}}
                    {{--var marker = new google.maps.Marker({--}}
                        {{--position: new google.maps.LatLng(pos),--}}
                        {{--map: map,--}}
                        {{--title: 'موقعك الحالي'--}}
                    {{--});--}}
                    {{--markers.push(marker);--}}
                    {{--marker.addListener('click', function() {--}}
                        {{--geocodeLatLng(geocoder, map, infoWindow,marker);--}}
                    {{--});--}}
                    {{--// to get current position address on load--}}
                    {{--google.maps.event.trigger(marker, 'click');--}}
                {{--}, function() {--}}
                    {{--handleLocationError(true, infoWindow, map.getCenter());--}}
                {{--});--}}
            {{--} else {--}}
                {{--// Browser doesn't support Geolocation--}}
                {{--console.log('dsdsdsdsddsd');--}}
                {{--handleLocationError(false, infoWindow, map.getCenter());--}}
            {{--}--}}

            {{--var geocoder = new google.maps.Geocoder();--}}
            {{--google.maps.event.addListener(map, 'click', function(event) {--}}
                {{--SelectedLatLng = event.latLng;--}}
                {{--geocoder.geocode({--}}
                    {{--'latLng': event.latLng--}}
                {{--}, function(results, status) {--}}
                    {{--if (status == google.maps.GeocoderStatus.OK) {--}}
                        {{--if (results[0]) {--}}
                            {{--deleteMarkers();--}}
                            {{--addMarkerRunTime(event.latLng);--}}
                            {{--SelectedLocation = results[0].formatted_address;--}}
                            {{--console.log( results[0].formatted_address);--}}
                            {{--splitLatLng(String(event.latLng));--}}
                            {{--$("#pac-input").val(results[0].formatted_address);--}}
                        {{--}--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
            {{--function geocodeLatLng(geocoder, map, infowindow,markerCurrent) {--}}
                {{--var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};--}}
                {{--/* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/--}}
                {{--$('#latitude').val(markerCurrent.position.lat());--}}
                {{--$('#longitude').val(markerCurrent.position.lng());--}}

                {{--geocoder.geocode({'location': latlng}, function(results, status) {--}}
                    {{--if (status === 'OK') {--}}
                        {{--if (results[0]) {--}}
                            {{--map.setZoom(8);--}}
                            {{--var marker = new google.maps.Marker({--}}
                                {{--position: latlng,--}}
                                {{--map: map--}}
                            {{--});--}}
                            {{--markers.push(marker);--}}
                            {{--infowindow.setContent(results[0].formatted_address);--}}
                            {{--SelectedLocation = results[0].formatted_address;--}}
                            {{--$("#pac-input").val(results[0].formatted_address);--}}

                            {{--infowindow.open(map, marker);--}}
                        {{--} else {--}}
                            {{--window.alert('No results found');--}}
                        {{--}--}}
                    {{--} else {--}}
                        {{--window.alert('Geocoder failed due to: ' + status);--}}
                    {{--}--}}
                {{--});--}}
                {{--SelectedLatLng =(markerCurrent.position.lat(),markerCurrent.position.lng());--}}
            {{--}--}}
            {{--function addMarkerRunTime(location) {--}}
                {{--var marker = new google.maps.Marker({--}}
                    {{--position: location,--}}
                    {{--map: map--}}
                {{--});--}}
                {{--markers.push(marker);--}}
            {{--}--}}
            {{--function setMapOnAll(map) {--}}
                {{--for (var i = 0; i < markers.length; i++) {--}}
                    {{--markers[i].setMap(map);--}}
                {{--}--}}
            {{--}--}}
            {{--function clearMarkers() {--}}
                {{--setMapOnAll(null);--}}
            {{--}--}}
            {{--function deleteMarkers() {--}}
                {{--clearMarkers();--}}
                {{--markers = [];--}}
            {{--}--}}

            {{--// Create the search box and link it to the UI element.--}}
            {{--var input = document.getElementById('pac-input');--}}
            {{--$("#pac-input").val("أبحث هنا ");--}}
            {{--var searchBox = new google.maps.places.SearchBox(input);--}}
            {{--map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);--}}

            {{--// Bias the SearchBox results towards current map's viewport.--}}
            {{--map.addListener('bounds_changed', function() {--}}
                {{--searchBox.setBounds(map.getBounds());--}}
            {{--});--}}

            {{--var markers = [];--}}
            {{--// Listen for the event fired when the user selects a prediction and retrieve--}}
            {{--// more details for that place.--}}
            {{--searchBox.addListener('places_changed', function() {--}}
                {{--var places = searchBox.getPlaces();--}}

                {{--if (places.length == 0) {--}}
                    {{--return;--}}
                {{--}--}}

                {{--// Clear out the old markers.--}}
                {{--markers.forEach(function(marker) {--}}
                    {{--marker.setMap(null);--}}
                {{--});--}}
                {{--markers = [];--}}

                {{--// For each place, get the icon, name and location.--}}
                {{--var bounds = new google.maps.LatLngBounds();--}}
                {{--places.forEach(function(place) {--}}
                    {{--if (!place.geometry) {--}}
                        {{--console.log("Returned place contains no geometry");--}}
                        {{--return;--}}
                    {{--}--}}
                    {{--var icon = {--}}
                        {{--url: place.icon,--}}
                        {{--size: new google.maps.Size(100, 100),--}}
                        {{--origin: new google.maps.Point(0, 0),--}}
                        {{--anchor: new google.maps.Point(17, 34),--}}
                        {{--scaledSize: new google.maps.Size(25, 25)--}}
                    {{--};--}}

                    {{--// Create a marker for each place.--}}
                    {{--markers.push(new google.maps.Marker({--}}
                        {{--map: map,--}}
                        {{--icon: icon,--}}
                        {{--title: place.name,--}}
                        {{--position: place.geometry.location--}}
                    {{--}));--}}


                    {{--$('#latitude').val(place.geometry.location.lat());--}}
                    {{--$('#longitude').val(place.geometry.location.lng());--}}

                    {{--if (place.geometry.viewport) {--}}
                        {{--// Only geocodes have viewport.--}}
                        {{--bounds.union(place.geometry.viewport);--}}
                    {{--} else {--}}
                        {{--bounds.extend(place.geometry.location);--}}
                    {{--}--}}
                {{--});--}}
                {{--map.fitBounds(bounds);--}}
            {{--});--}}
        {{--}--}}
        {{--function handleLocationError(browserHasGeolocation, infoWindow, pos) {--}}
            {{--infoWindow.setPosition(pos);--}}
            {{--infoWindow.setContent(browserHasGeolocation ?--}}
                {{--'Error: The Geolocation service failed.' :--}}
                {{--'Error: Your browser doesn\'t support geolocation.');--}}
            {{--infoWindow.open(map);--}}
        {{--}--}}
        {{--function splitLatLng(latLng){--}}
            {{--var newString = latLng.substring(0, latLng.length-1);--}}
            {{--var newString2 = newString.substring(1);--}}
            {{--var trainindIdArray = newString2.split(',');--}}
            {{--var lat = trainindIdArray[0];--}}
            {{--var Lng  = trainindIdArray[1];--}}

            {{--$("#latitude").val(lat);--}}
            {{--$("#longitude").val(Lng);--}}
        {{--}--}}

    {{--</script>--}}
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8WHGB9JtfpSt9b9BxBojydfVPd80dKxg&libraries=places&callback=initAutocomplete&language=ar&region=YE--}}
         {{--async defer"></script>--}}
    @stop
