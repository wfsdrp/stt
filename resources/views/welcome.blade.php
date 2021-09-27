@extends('layout')

@section('main_content')
    <form method="get" action="/checkform" class="input-group has-validation">
        @csrf
        <span class="input-group-text">Ссылка</span>
        <input type="text" class="form-control" name="" id="login" placeholder="Логин" required="">
        <input type="password" class="form-control" name="password" id="password" placeholder="Пароль" required="">
        <div class="invalid-feedback">
            Введите имя пользователя или пароль.
        </div>
    </form>
@endsection
