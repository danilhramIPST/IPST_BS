<?php

namespace App\Http\Controllers;

use App\Mail\TestMailEn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactControllerEn extends Controller {

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'phone' => 'required|max:16',
            'email' => 'required|email|min:9|max:60',
            'company' => 'required|min:1|max:20',
            'message' => 'min:5|max:500'
        ]);
    }

    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $textMail = "<p><b>Имя и фамилия:</b>{$request->input('name')}</p><br>";
            $textMail.= "<p><b>Название компании:</b>{$request->input('company')}</p><br>";
            $textMail.= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
            $textMail.= "<p><b>Email:</b>{$request->input('email')}</p><br>";
            $textMail.= "<p><b>Сообщение:</b>{$request->input('message')}</p><br>";
            $textMail.= "<p><b>Прикрепленный файл:</b>{$request->input('attachingFiles')}</p><br>";
        }
        Mail::to('hdiipstomsk@gmail.com')->send(new TestMailEn($textMail,$request->file('attachingFiles')));
        return view('senden');

    }

}

