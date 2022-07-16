<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    
    public function index(){

        return view('front.index');
            }

    public function about(){

     return view('front.about');
                    }


}
