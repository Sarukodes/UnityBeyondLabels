<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function add(Request $request){
        if($request->getMethod()=='POST'){
            $news=new news();
            $news->title=$request->title;
            $news->content=$request->content;
            $news->image=$request->image->store('uploads/news');
            $news->save();
            return redirect()->back();
        }
        else{
            return view('back.news.add');
        }
    }
    public function index(){
      $news=DB::table('news')->get();
      return view('back.news.index', compact('news'));
    }

    public function edit( Request $request, News $news){
        if($request->getMethod()=='POST'){
            if($request->hasFile('image')){
                $news->image=$request->image->store('uploads/news');
            }
            $news->title=$request->title;
            $news->content=$request->content;
            $news->save();
            return redirect()->back();
        }
        else{
            return view('back.news.edit', compact('news'));
        }
    }
    public function del($news)
    {
        DB::table('news')->where('id', $news)->delete();
        return redirect()->back();
    }
}
