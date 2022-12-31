<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Service;
class pageController extends Controller
{
    
    public function index(){
        echo "pageController";
    }

public function homepage(){
    $sliders= slider::all();

// dd($sliders);
$services =Service::all();
// dd($services);
return view("hompage",["sliders"=>$sliders,"services"=>$services]);
}


}


