<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index(){
    $sliders = DB::table('sliders')->get(['desktop_image','mobile_image','logo', 'title','text','button_text']);
    $services= DB::table('services')->get();
    return view('front.home.index', compact('sliders','services'));
   }

//    public function services(){

//     $services=DB::table('services')->get(['title']);
//     return view('front.home.index', compact('services'));
//   }
}
