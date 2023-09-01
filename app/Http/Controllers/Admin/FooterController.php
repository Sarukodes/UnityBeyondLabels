<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    public function add(Request $request){
        if($request->getMethod()=='POST'){
            $footer= new Footer();
            $footer->email=$request->email;
            $footer->phoneno=$request->phoneno;
            $footer->logo=$request->logo->store('uploads/footer');
            $footer->logo_name=$request->logo_name;
            $footer->facebook_link=$request->facebook_link;
            $footer->youtube_link=$request->youtube_link;
            $footer->instagram_link=$request->instagram_link;
            $footer->twitter_link=$request->twitter_link;
            $footer->copyright=$request->copyright;
            $footer->save();
            return redirect()->back();
        }
        else{
            return view('back.footer.add');
        }
    }
    public function index(){
        $footers=DB::table('footers')->get();
        return view('back.footer.index', compact('footers'));
    }
    public function edit(Request $request,  Footer $footer){
        if($request->getMethod()=='POST'){
            if($request->hasFile('logo')){
             $footer->logo=$request->logo->store('uploads/footer');
            }
            $footer->email=$request->email;
            $footer->phoneno=$request->phoneno;
            $footer->logo_name=$request->logo_name;
            $footer->facebook_link=$request->facebook_link;
            $footer->youtube_link=$request->youtube_link;
            $footer->instagram_link=$request->instagram_link;
            $footer->twitter_link=$request->twitter_link;
            $footer->copyright=$request->copyright;
            $footer->save();
            return redirect()->back();
        }
        else{
            return view('back.footer.edit', compact('footer'));
        }

    }
    public function del($footer)
    {
        DB::table('footers')->where('id',$footer)->delete();
        return redirect()->back();
    }
}
