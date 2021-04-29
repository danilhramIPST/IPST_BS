@extends('layouts.app')

@section('title-block') Contacts @endsection

@section('content')
    <h1>Contacts</h1>

{{--    @if ($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    <form action={{route('send_mail_en')}} method="post" enctype="multipart/form-data">
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

            <textarea name="comment" id="comment" class="form-control"
                      placeholder="Enter a message"></textarea>
        </div>

        <div>
            <label for="Attaching files">Attaching files</label>
            <p><input type="file" name="file">
        </div>
        <button type="submit" class="btn btn-success">Submit a form</button>

    </form>
@endsection

