<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiveController extends Controller
{
  public function service(){
    $services=DB::table('services')->get([]);
    return view('front.home.service', compact('services'));
  }
}
