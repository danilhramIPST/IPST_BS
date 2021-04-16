<?php
/*if (isset($_FILES['attachingFiles'])){
    $errors = array();
    $file_name = $_FILES['attachingFiles']['name'];
    $file_size = $_FILES['attachingFiles']['size'];
    $file_tmp = $_FILES['attachingFiles']['tmp_name'];
    $file_type = $_FILES['attachingFiles']['type'];
    //$file_ext = strtolower (end(explode('.' ,$_FILES['attachingFiles']['name'] )));

    $expensions = array ("zip","docx","pdf","xlsx");

    if ($file_size>41943040) {
        $errors[] = 'Размер файла не более 5 Мбайт';
    }
    if (empty($errors)) {
        move_uploaded_file($file_tmp, "/contact/en/send".$file_name);

    }else{
        print $errors;
    }
}
*/?>

@extends('layouts.app')

@section('title-block') Contacts @endsection

@section('content')
    <h1>Contacts</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact/en/send" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Enter your full name</label>
            <input type="text" name="name" placeholder="Enter your full name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="company">Enter your company name</label>
            <input type="text" name="company" placeholder="Enter your company name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Enter your phone number</label>
            <input type="text" name="phone" placeholder="Enter your phone number" id="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Enter your email address</label>
            <input type="text" name="email" placeholder="Enter your email address" id="email" class="form-control">
        </div>

        <div class="form-group">

            <textarea name="message" id="message" class="form-control"
                      placeholder="Enter a message"></textarea>
        </div>

        <div>
            <label for="Attaching files">Attaching files</label>
            <p><input type="file" name="attachingFiles">
        </div>
        <button type="submit" class="btn btn-success">Submit a form</button>

    </form>
@endsection

