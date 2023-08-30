<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
public function add(Request $request){
    if($request->getMethod()=='POST'){
        $donation =new donation();
        $donation->text1=$request->text1;
        $donation->text2=$request->text2;
        $donation->text3=$request->text3;
        $donation->image=$request->image->store('uploads/donation');
        $donation->background_image=$request->background_image->store('uploads/donation');
        $donation->save();
        return redirect()->back();
    }else{
    return view('back.donation.add');
}
}
public function index(){
    $donations=DB::table('donations')->get();
    return view('back.donation.index', compact('donations'));
  }
  public function edit(Request $request,Donation $donation)
  {
    if($request->getMethod()=='POST'){
        if ($request->hasFile('image')) {
            $donation->image = $request->image->store('uploads/donations');
        }
        if ($request->hasFile('background_image')) {
            $donation->background_image = $request->background_image->store('uploads/donations');
        }
        $donation->text1=$request->text1;
        $donation->text2=$request->text2;
        $donation->text3=$request->text3;
        $donation->save();
        return redirect()->back();
    }else{
        return view('back.donation.edit', compact('donation'));
    }
  }
  public function del($donation)
  {
    DB::table('donations')->where('id', $donation)->delete();
    return redirect()->back();
  }
}
