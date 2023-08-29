<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $service = new service();
            $service->title=$request->title;
            $service->content=$request->content;
            $service->logo1 = $request->logo1->store('uploads/service');
            $service->logo2 = $request->logo2->store('uploads/service');
            $service->logo3 = $request->logo3->store('uploads/service');
            $service->logo4 = $request->logo4->store('uploads/service');
            $service->logo1_title=$request->logo1_title;
            $service->logo2_title=$request->logo2_title;
            $service->logo3_title=$request->logo3_title;
            $service->logo4_title=$request->logo4_title;
            $service->save();
            return redirect()->back();
        } else {
            return view('back.services.add');
        }
    }   public function index(){
   $services=DB::table('services')->get();
   return view('back.services.index', compact('services'));
   }

   public function edit(Request $request,Service  $service)
   {
       if ($request->getMethod() == 'POST') {
           if ($request->hasFile('logo1')) {
               $service->logo1 = $request->logo1->store('uploads/services');
           }
           if ($request->hasFile('logo2')) {
               $service->logo2 = $request->logo2->store('uploads/services');
           }
           if ($request->hasFile('logo3')) {
               $service->logo3 = $request->logo3->store('uploads/services');
           }
           if ($request->hasFile('logo4')) {
               $service->logo4 = $request->logo4->store('uploads/services');
           }
           $service->title = $request->title;
           $service->content = $request->content;
           $service->logo1_title=$request->logo1_title;
           $service->logo2_title=$request->logo2_title;
           $service->logo3_title=$request->logo3_title;
           $service->logo4_title=$request->logo4_title;
           $service->save();
           return redirect()->back();
       } else {

           return view('back.services.edit', compact('service'));
       }
   }
   public function del($service)
   {
       DB::table('services')->where('id', $service)->delete();
       return redirect()->back();
   }
}


