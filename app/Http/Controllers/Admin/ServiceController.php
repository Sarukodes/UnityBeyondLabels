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
            $service->save();
            return redirect()->back();
        } else {
            return view('back.services.add');
        }
    }
   public function index(){
   $services=DB::table('services')->get();
   return view('back.services.index', compact('services'));
   }
}
