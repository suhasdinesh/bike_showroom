<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config('backpack.base.html_direction') }}">
<head>
    @include(backpack_view('inc.head'))
</head>
<body style="background-color:#FFF">
    <div class="card container-fluid-lg">
        <img src="{{$landing_image[0]['landing_image'];}}">
        <div class="card-img-overlay">
            <div class="row">
                <div class="card-text col-lg-8">
                    <br>
                </div>
                <div class="card-text text-end col-lg-4" style="padding-left: 5%">
                    <h4 class="card-title" style="color: #FFF;padding-top:70%">{{$bike[0]['bike_name']}}</h4>
                    <h1 style="color: #FFF; padding-top:5%">Lights on me</h1>
                    <div class="row">
                        <div class="col-sm-4"><button class="btn btn-secondary">Button 1</button></div>
                        <div class="col-sm-8"><button class="btn btn-primary">Button 2</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding: 1px;margin-top:-3%">
        <div class="card-group shadow-lg" >
            <div class="card bg-dark" style="border-right:2px;border-right-color:black;color:#FFF"><h6 class="card-title text-center p-2">Bike Name</h6>
                <h3 class="card-text text-center p-2" style="color: #FFF">{{$bike[0]['bike_name']}}</h3>
            </div>
            <div class="card bg-light" style="border-right:2px;border-right-color:black;color:#111"><h6 class="card-title text-center p-2">Power</h6>
                <h3 class="card-text text-center p-2" style="color: #000">{{$specs[0]['max_power']}} bhp</h3>
            </div>
            <div class="card bg-light" style="border-right:2px;border-right-color:black;color:#111"><h6 class="card-title text-center p-2">Torque</h6>
                <h3 class="card-text text-center p-2" style="color: #000">{{$specs[0]['max_torque']}} Nm</h3>
            </div>
            <div class="card bg-light" style="border-right:2px;border-right-color:black;color:#111"><h6 class="card-title text-center p-2">Seat Height</h6>
                <h3 class="card-text text-center p-2" style="color: #000">{{$specs[0]['seat_height']}} mm</h3>
            </div>
            <div class="card bg-light" style="border-right:2px;border-right-color:black;color:#111"><h6 class="card-title text-center p-2">Safety</h6>
                <h3 class="card-text text-center p-2" style="color: #000">Cornering ABS Evo, DTC Evo</h3>
            </div>
        </div>
    </div>
    <div class="conainer p-4 text-center" style=" margin-top:3%">
        <div class="card " style="border: 0px">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card text-center " style="border: 0px">
                            <div class="card-title"><h1 class="card-title">{{$bike[0]['description_title'];}}</h1></div>
                            <div class="card-text">
                                <p class="card-text">{{$bike[0]['description'];}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card w-60 text-center"><img class="img-fluid  rounded"  src="{{$landing_image[0]['bike_image']}}"  alt=""></div>
                    </div>
        
                </div>
            </div>
        </div>
        
        
    </div>
    <div class="container p-3">
        <div class="text-center"><h1 class="text-center" style="color: #000"><b>Specifications</b></h1></div>
        <table class="table table-striped" style="border: 0px">
            
            <tr><th>Price Ex-showroom</th><td>{{$specs[0]['price']}}</td></tr>
                <tr><th>Cubic Capacity</th><td>{{$specs[0]['cubic_capacity']}}</td></tr>
                <tr><th>Cylinders</th><td>{{$specs[0]['cylinders']}}</td></tr>
                <tr><th>Engine Type</th><td>{{$specs[0]['engine_type']}}</td></tr>
                <tr><th>Max Torque</th><td>{{$specs[0]['max_torque']}}</td></tr>
                <tr><th>Max Power</th><td>{{$specs[0]['max_power']}}</td></tr>
                <tr><th>Body Type</th><td>{{$specs[0]['body_type']}}</td></tr>
                <tr><th>Max Speed</th><td>{{$specs[0]['max_speed']}}</td></tr>
                <tr><th>Fuel Capacity</th><td>{{$specs[0]['fuel_capacity']}}</td></tr>
                <tr><th>Transmission</th><td>{{$specs[0]['transmission']}}</td></tr>
                <tr><th>Kerb Weight</th><td>{{$specs[0]['kerb_weight']}}</td></tr>
                <tr><th>Breaking Type</th><td>{{$specs[0]['braking_type']}}</td></tr>
                <tr><th>Wheels Type</th><td>{{$specs[0]['wheels_type']}}</td></tr>
                <tr><th>Seat Height</th><td>{{$specs[0]['seat_height']}}</td></tr>
                <tr><th>Chassis</th><td>{{$specs[0]['chasssis']}}</td></tr>
                <tr><th>Tyre Size</th><td>{{$specs[0]['tyre_size']}}</td></tr>
                <tr><th>Color</th><td>{{$landing_image[0]['color_name']}}</td></tr>
        </table>
    </div>
    <div class="container p-4 w-100">
        <div class="text-center"><h1 class="text-center" style="color: #000"><b>Watch the 3rd episode of the Ducati World Première</b></h1></div>

        <iframe class="p-4" height="600px" width="100%"  src="{{$video[0]['link'];}}"title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
</body>
</html>