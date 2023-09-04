<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\navbar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function add(Request $request){
        if($request->getMethod()=='POST'){
          $navbar =new navbar();
          $navbar->logo=$request->logo->store('uploads/navbar');
          $navbar->save();
          $this->makeCache();
          return redirect()->back();
        }
        else{
            return view('back.navbar.add');
        }
    }
    public function index(){
        $navbars=DB::table('navbars')->get();
        return view('back.navbar.index', compact('navbars'));
    }
    public function edit(Request $request, Navbar $navbar){
        if($request->getMethod()=='POST'){
            if($request->hasFile('logo')){
                $navbar->logo=$request->logo->store('uploads/navbar');
            }
            $navbar->save();
            $this->makeCache();
            return redirect()->back();
        }
        else{
            return view('back.navbar.edit', compact('navbar'));
        }
    }
    public function del($navbar)
    {
    DB::table('navbars')->where('id', $navbar)->delete();
    $this->makeCache();
    return redirect()->back();
    }
    public function makeCache(){
        $navbar=DB::table('navbars')->first();
        file_put_contents(
            resource_path('views/front/cache/home/navbar.blade.php'),
            view('back.navbar.template', compact('navbar'))->render()
       );
    }
}
