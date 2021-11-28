@extends('layout')
@section('main_content')
{{--    style="visibility: hidden;"--}}
    <div>
        <form class="form-group row" id="admin" style="position: fixed; width: 500px; height: 200px; top: 50%; left: 50%; margin-top: -100px; /* Negative half of height. */ margin-left: -250px; /* Negative half of width. */">
            @csrf
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-small">Админ Панель STT-STROI.RU</h1>
            </div>
            <div class="form-label-group">
                <input type="text" id="login" name="login" class="form-control" placeholder="Логин" required="" autofocus="">
            </div>

            <div class="form-label-group">
                <input type="password" id="password" name="password" style="margin-top: 10px" class="form-control p-a-1" placeholder="Пароль" required="">
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" id="check" name="check"> Запомнить меня
                </label>
            </div>
            <button class="btn btn-lg btn-success btn-block" id="button" type="button" onclick="return submitForm()" style="width: 200px; display: block; margin-left: auto; margin-right: auto">Войти</button>
        </form>
    </div>
@endsection
