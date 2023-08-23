<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{

    public function add(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $slider = new Slider();
            $slider->desktop_image = $request->desktop_image->store('uploads/slider');
            $slider->mobile_image = $request->mobile_image->store('uploads/slider');
            $slider->logo = $request->logo->store('uploads/slider');
            $slider->title = $request->title;
            $slider->text = $request->text;
            $slider->button_text = $request->button_text;
            $slider->save();
            return redirect()->back();
        } else {
            return view('back.slider.add');
        }
    }
    public function index()
    {
        $sliders = DB::table('sliders')->get();
        return view('back.slider.index', compact('sliders'));
    }
    public function edit(Request $request,Slider  $slider)
    {
        if ($request->getMethod() == 'POST') {
            if ($request->hasFile('image')) {
                $slider->desktop_image = $request->desktop_image->store('uploads/slider');
            }
            if ($request->hasFile('mobile_image')) {
                $slider->mobile_image = $request->mobile_image->store('uploads/sliders');
            }
            if ($request->hasFile('logo')) {
                $slider->logo = $request->logo->store('uploads/sliders');
            }
            $slider->title = $request->title;
            $slider->text = $request->text;
            $slider->button_text = $request->button_text;
            $slider->save();
            return redirect()->back();
        } else {

            return view('back.slider.edit', compact('slider'));
        }
    }
    public function del($slider)
    {
        DB::table('sliders')->where('id', $slider)->delete();
        return redirect()->back();
    }
}
