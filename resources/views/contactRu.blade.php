@extends('layouts.app')

@section('title-block') Страница контактов@endsection

@section('content')
    <h1>Страница контактов</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/contact/ru/send" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Введите ФИО</label>
            <input type="text" name="name" placeholder="Введите ФИО" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Введите номер телефона</label>
            <input type="text" name="phone" placeholder="Введите номер телефона" id="phone" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите Email-адрес</label>
            <input type="text" name="email" placeholder="Введите Email-адрес" id="email" class="form-control">
        </div>

        <div class="form-group">
            <p><select size="7" multiple name="language">
                    <option disabled>Уровень владения английским языком</option>
                    <option value="A1">A1</option>
                    <option selected value="A2">A2</option>
                    <option value="B1">B1</option>
                    <option value="B2">B2</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                </select></p>

        </div>

        <div class="form-group">
            <p><select size="8" multiple name="role">
                    <option disabled>Желаемая роль в команде</option>
                    <option value="Менеджер">Менеджер</option>
                    <option selected value="Аналитик">Аналитик</option>
                    <option value="Дизайнер">Дизайнер</option>
                    <option value="Front-end разработчик">Front-end разработчик</option>
                    <option value="Back-end разработчик">Back-end разработчик</option>
                    <option value="Тестировщик">Тестировщик</option>
                    <option value="Специалист по машинному обучению">Специалист по машинному обучению</option>
                </select></p>
        </div>

        <div class="form-group">

            <textarea name="aboutOneSelf" id="aboutOneSelf" class="form-control"
                      placeholder="Расскажите о себе"></textarea>
        </div>
        <div>
            <label for="Attaching files">Прикрепление файлов</label>
            <p><input type="file" name="attachingFiles">

        </div>
        <button type="submit" class="btn btn-success">Отправить форму</button>

    </form>
@endsection


