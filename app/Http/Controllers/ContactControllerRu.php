<?php

namespace App\Http\Controllers;

use App\Mail\TestMailRu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactControllerRu extends Controller {

    public function index()
    {
        return view('contactRu');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'phone' => 'required|max:16',
            'email' => 'required|email|min:9|max:60',
            'language' =>'required',
            'role' =>'required',
            'aboutOneSelf' => '|min:5|max:500',
        ]);
    }

    /*public function send(Request $request)
    {
        if ($request->method()=='POST'){
            $textMail = "<p><b>ФИО:</b>{$request->input('name')}</p><br>";
            $textMail.= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
            $textMail.= "<p><b>Email:</b>{$request->input('email')}</p><br>";
            $textMail.= "<p><b>Уровень английского:</b>{$request->input('language')}</p><br>";
            $textMail.= "<p><b>Роль в команде:</b>{$request->input('role')}</p><br>";
            $textMail.= "<p><b>О себе:</b>{$request->input('aboutOneSelf')}</p><br>";
            $textMail.= "<p><b>Прикрепленный файл:</b>{$request->input('attachingFiles')}</p><br>";
        }
        Mail::to('hdiipstomsk@gmail.com')->send(new TestMailRu($textMail,$request->file('attachingFiles')));
        return view('sendru');
    }*/

    public function send(Request $request)
    {


        if ($request->method()=='POST'){

        }
       // dd($request->only('name','phone','email','language','role','aboutOneSelf'));
        $textMail = "<p><b>ФИО:</b>{$request->input('name')}</p><br>";
            $textMail.= "<p><b>Телефон:</b>{$request->input('phone')}</p><br>";
            $textMail.= "<p><b>Email:</b>{$request->input('email')}</p><br>";
            $textMail.= "<p><b>Уровень английского:</b>{$request->input('language')}</p><br>";
            $textMail.= "<p><b>Роль в команде:</b>{$request->input('role')}</p><br>";
            $textMail.= "<p><b>О себе:</b>{$request->input('aboutOneSelf')}</p><br>";
            //$textMail.= "<p><b>Прикрепленный файл:</b>{$request->input('attachingFiles')}</p><br>";


        //Mail::to('hdiipstomsk@gmail.com')->send(new TestMailRu($textMail,$request->file('attachingFiles')));

        return response()->json([
            "status"=>true,
            "request"=>$request->only('name','phone','email','language','role','aboutOneSelf')
        ])->setStatusCode(201,'email sent');



    }

}

