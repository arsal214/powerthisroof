<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Power this Roof</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>Power this Roof</title>
    <!-- Font Icon -->
    {{--    <link rel="stylesheet" href="./assets/font/material-icon/css/material-design-iconic-font.min.css">--}}
    {{--    <link rel="stylesheet" href="./assets/css/bootstrap.css">--}}
    <!-- Main css -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('assets/muliform/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

</head>
<body>
<!-- Top Bar -->
<div id="top-bar">
    <div id="top-bar-inner" class="container">
        <div class="top-bar-inner-wrap">
            <div class="top-bar-content">
                <div class="inner">
                    <span class="location content">2072 Pinnickinick Street, WA 98370</span>
                    <span class="envelope content">info@website.com</span>
                </div>
            </div>
            <!-- /.top-bar-content -->
            <div class="top-bar-socials">
                <div class="inner">
                            <span class="icons">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </span>
                </div>
            </div>
            <!-- /.top-bar-socials -->
        </div>
    </div>
</div>
<!-- /#top-bar -->
<div class="main">
    <div class="ars-container">
        <div class="row signup-content mt-5 m-auto">
            <div class="col-12 p-4 pt-5 signup-desc">
                <form
                    method="POST"
                    id="signup-form"
                    class="signup-form p-4"
                    enctype="multipart/form-data"
                >
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 1 / 08</span>
                        <h3>What type of property do you want quotes for?</h3>
                        <span class="text-danger text-center" id="errors" style="display:none;"> Please Select Any option</span>
                        <div class="btn-group w-100 pt-5 pb-2" data-toggle="buttons">
                            <label for="property_type" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="options" value="home" id="property_type" autocomplete="off">
                                Home
                            </label>
                            <label for="property_type" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="options" value="Business" id="property_type"
                                       autocomplete="off"> Business
                            </label>
                            <label for="property_type" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="options" value="Nonprofit" id="property_type"
                                       autocomplete="off"> Nonprofit
                            </label>

                        </div>

                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 2 / 08</span>
                        <h3> Do you own or rent this home?</h3>
                        <span class="text-danger text-center" id="home_type_errors" style="display:none;"> Please Select Any option</span>

                        <div class="btn-group w-100 pt-5 pb-2" data-toggle="buttons">
                            <label for="option1" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="home_type" id="home_type" value="own" autocomplete="off"> I
                                own
                            </label>
                            <label for="option2" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="home_type" id="home_type" value="rent" autocomplete="off"> I
                                rent
                            </label>
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 3 / 08</span>
                        <div class="form-group">
                            <label for="first_name" style="margin-top: 45px;" class="ars-average">Average Monthly Utility Bill?</label>
                            <input
                                class="range"
                                type="range"
                                id="bill_range"
                                name="bill_range"
                                value="0"
                                min="101"
                                max="1000"
                                onChange="rangeSlide(this.value)"
                                onmousemove="rangeSlide(this.value)"
                            >
                            <div class="d-flex justify-content-between">
                                <span class="ars-dollersize">101$</span>
                                <span class="ars-dollersize">
                                            <span id="rangeValue">101</span>$</span>
                                <span class="ars-dollersize">1000$</span>
                            </div>
                        </div>

                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 4 / 08</span>
                        <h2> Let’s find your roof.</h2>
                        <p>Your address allows our installer network to tailor their quotes to the specific needs of
                            your property. </p>
                        <span class="text-danger text-center" id="address_address_errors" style="display:none;"> Please Type Complete Address</span>

                        <div class="form-group">
                            <input type="text" id="address-input" name="address_address" class="form-control map-input">
                            <input type="hidden" name="address_latitude" id="address-latitude" value="0"/>
                            <input type="hidden" name="address_longitude" id="address-longitude" value="0"/>


                        </div>
                        <div id="address-map-container" style="width:100%;height:400px; ">
                            <div style="width: 100%; height: 100%" id="address-map"></div>
                        </div>

                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 5 / 08</span>
                        <h3> Is your roof more than 20 years old? </h3>
                        <span class="text-danger text-center" id="home_age_errors" style="display:none;"> Please Select Any option</span>

                        <div class="btn-group w-100 pt-5 pb-2" data-toggle="buttons">
                            <label for="home_age" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="home_age" id="home_age" value="yes" autocomplete="off"> Yes
                            </label>
                            <label for="home_age" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="home_age" id="home_age" value="no" autocomplete="off"> No
                            </label>
                            <label for="home_age" class="btn btn-secondary ars-radio-style">
                                <input type="radio" name="home_age" id="home_age" value="replace" autocomplete="off">
                                Yes - but I plan to replace it to go solar
                            </label>
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 6 / 08</span>
                        <h3> Almost done! What’s your name? </h3>
                        <span class="text-danger text-center" id="fname_errors" style="display:none;"> Please  enter your name</span>

                        <div class="form-group">
                            <label for="name"> <b> Your Name</b> </label>
                            <input
                                type="text"
                                name="fname"
                                id="name"
                                placeholder="Enter Your Name"
                                required="required"
                            >
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 7 / 08</span>
                        <h3> What is you Email </h3>
                        <p>We will never share your email with installers without your permission.</p>
                        <span class="text-danger text-center" id="email_errors" style="display:none;"> Please  enter your Email</span>

                        <div class="form-group">
                            <label for="email"> <b>Your Email</b> </label>
                            <input
                                type="text"
                                name="email"
                                id="email"
                                placeholder="Enter Your Email"
                                required="required"
                            >
                        </div>
                    </fieldset>
                    <h3></h3>
                    <fieldset>
                        <span class="step-current">Step 08 / 08</span>
                        <h3> What is you Phone Number </h3>
                        <span class="text-danger text-center" id="number_errors" style="display:none;"> Please  enter your Phone Number</span>
                        <div class="form-group">
                            <label for="number"> <b>Phone Number</b></label>
                            <input
                                type="text"
                                name="number"
                                id="number" placeholder="Enter Your Number"
                                required="required"
                            >
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPPwBA8J_OwXfpaBEg6mbX6RdM43ysOuU&libraries=places&callback=initialize"
    async defer></script>
<!-- JS -->
<script src="./assets/vendor/jquery/jquery.min.js"></script>
<script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="./assets/vendor/jquery-validation/dist/additional-methods.min.js"></script>
<script src="./assets/vendor/jquery-steps/jquery.steps.js"></script>
<script src="./assets/js/multi-form.js"></script>
<script type="text/javascript">
    function rangeSlide(value) {
        document.getElementById('rangeValue').innerHTML = value;
    }


    function initialize() {

        $('form').on('keyup keypress onchange', function (e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) {
                e.preventDefault();
                return false;
            }
        });
        const locationInputs = document.getElementsByClassName("map-input");

        const autocompletes = [];
        const geocoder = new google.maps.Geocoder;
        for (let i = 0; i < locationInputs.length; i++) {

            const input = locationInputs[i];
            const fieldKey = input.id.replace("-input", "");
            const isEdit = document.getElementById(fieldKey + "-latitude").value != '' && document.getElementById(fieldKey + "-longitude").value != '';

            const latitude = parseFloat(document.getElementById(fieldKey + "-latitude").value) || -33.8688;
            const longitude = parseFloat(document.getElementById(fieldKey + "-longitude").value) || 151.2195;

            const map = new google.maps.Map(document.getElementById(fieldKey + '-map'), {
                 mapTypeId: 'satellite',
                  mapTypeControl: false,
                   rotateControl: false,
                center: {lat: latitude, lng: longitude},
                zoom: 69


            });
            const marker = new google.maps.Marker({
                map: map,
                position: {lat: latitude, lng: longitude},
            });

            marker.setVisible(isEdit);

            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.key = fieldKey;
            autocompletes.push({input: input, map: map, marker: marker, autocomplete: autocomplete});
        }

        for (let i = 0; i < autocompletes.length; i++) {
            const input = autocompletes[i].input;
            const autocomplete = autocompletes[i].autocomplete;
            const map = autocompletes[i].map;
            const marker = autocompletes[i].marker;

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                marker.setVisible(false);
                const place = autocomplete.getPlace();

                geocoder.geocode({'placeId': place.place_id}, function (results, status) {
                    if (status === google.maps.GeocoderStatus.OK) {
                        const lat = results[0].geometry.location.lat();
                        const lng = results[0].geometry.location.lng();
                        setLocationCoordinates(autocomplete.key, lat, lng);
                    }
                });

                if (!place.geometry) {
                    window.alert("No details available for input: '" + place.name + "'");
                    input.value = "";
                    return;
                }

                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

            });
        }
    }

    function setLocationCoordinates(key, lat, lng) {
        const latitudeField = document.getElementById(key + "-" + "latitude");
        const longitudeField = document.getElementById(key + "-" + "longitude");
        latitudeField.value = lat;
        longitudeField.value = lng;
    }
</script>
</body>
</html>

