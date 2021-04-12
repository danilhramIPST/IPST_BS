<?php

namespace App\Http\Controllers;

use App\Mail\TestMailEn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactControllerEn extends Controller {

    public function submit(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:4|max:50',
            'phone' => 'required|max:16',
            'email' => 'required|email|min:9|max:60',
            'company' => 'required|min:1|max:20',
            'message' => 'required|min:5|max:500',
            'Attaching files'
        ]);
    }
        public function send ()
        {
            Mail::to ('hdiipstomsk@gmail.com')->send(new TestMailEn());
            return view ('senden');

        }

}

