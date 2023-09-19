<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactForm;
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
            $contact->save();
            return redirect()->back();
        }
        else{
            return view('back.contact.add');
        }
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

    public function contactlist()
    {
        $contactForms = ContactForm::all();
        return view('back.contact.contactList',compact('contactForms'));
    }
    public function delete($id){
        $contactForm = contactForm::where('id',$id)->first();
        $contactForm->delete();
        return redirect()->back();
    }
}
