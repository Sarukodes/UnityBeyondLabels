<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
        public function add()
        {
            return view('front.home.contact');
        }
        public function save(Request $request)
        {
            $contactForm = new ContactForm();
            $contactForm->name = $request->name;
            $contactForm->email = $request->email;
            $contactForm->message = $request->message;
            $contactForm->save();
            return redirect('/contact/save');
        }
    }

