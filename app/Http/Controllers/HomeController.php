<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getCarousel()
    {
        $images[0] = asset('asset/sliders/slider1.jpg'); 
        $images[1] = asset('asset/sliders/slider2.jpg'); 
        $images[2] = asset('asset/sliders/slider3.jpg'); 
        return response($images);
    }
}
