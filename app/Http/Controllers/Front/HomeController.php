<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $services= DB::table('services')->get();
        // $news =DB::table('news')->latest()->take(4)->get();
        // $footer =DB::table('footers')->first();
        return view('front.home.index');
    }
    public function events()
    {
        $news = DB::table('news')->latest()->paginate(2);
        return view('front.home.events', compact('news'));
    }
    public function news($id)
    {
        $news = DB::table('news')->find($id);
        $allnews = DB::table('news')
            ->where('id', '!=', $id) // Exclude the specified ID
            ->latest()
            ->take(2)
            ->get();
        return view('front.home.newsShow', compact('news', 'allnews'));
    }
    public function contact()
    {
        $contacts = DB::table('contacts')->latest()->take(1)->get();
        return view('front.home.contact', compact('contacts'));
    }
    public function donation(){
        $donation =DB::table('donations')->get();
        return view('front.home.donation',compact('donation'));
    }
}
