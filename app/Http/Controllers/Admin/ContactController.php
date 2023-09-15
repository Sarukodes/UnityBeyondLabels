<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function add(Request $request){
        if ($request->getMethod()=='POST'){
            $contact =new Contact();
            $contact->title=$request->title;
            $contact->text=$request->text;
            $contact->Contactno=$request->Contactno;
            $contact->address=$request->address;
            $contact->gmail=$request->gmail;
            $contact->map=$request->map;
            // $contact->name=$request->name;
            // $contact->email=$request->email;
            // $contact->message=$request->message;
            $contact->save();
            return redirect()->back();
        }
        else{
            return view('back.contact.add');
        }
    }
    public function save(Request $request){
        $contact= new contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        return redirect('front.contact');
    }
    public function index(){
        $contacts=DB::table('contacts')->get();
        return view('back.contact.index', compact('contacts'));
    }
    public function edit(Request $request, Contact $contact ){
        if ($request->getMethod()=='POST'){
            $contact->title=$request->title;
            $contact->text=$request->text;
            $contact->Contactno=$request->Contactno;
            $contact->address=$request->address;
            $contact->gmail=$request->gmail;
            $contact->map=$request->map;
            $contact->save();
            return redirect()->back();
        }
        else{
            return view('back.contact.edit', compact('contact'));
        }
    }
    public function del($contact)
    {
    DB::table('contacts')->where('id', $contact)->delete();
    return redirect()->back();
    }
}
