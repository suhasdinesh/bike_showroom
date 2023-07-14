<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bikes;
use App\Models\Colors;
use App\Models\Specs;
use App\Models\Videos;
class BikePageController extends Controller
{
    //
    public function handleRequest(Request $request){
        $bike_id=$request['id'];
        $bike=Bikes::where('id',$bike_id)->get();
        $color=$request['color_id'];
        $landing_image=Colors::where('id','=',$color)->where('bike_id','=',$bike_id)->get();
        $specs=Specs::where('bike_id','=',$bike_id)->where('color_id','=',$color)->get();
        $video=Videos::where('bike_id','=',$bike_id)->get();
        return view('bike',compact(['bike','landing_image','specs','video']));
        // return $video;
    }
}
