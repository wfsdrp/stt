@extends('layout')

@section('main_content')
    <form method="get" action="/checkform" class="input-group has-validation">
        @csrf
        <span class="input-group-text">Ссылка</span>
        <input type="url" class="form-control" name="link" id="link" placeholder="https://www.instagram.com/gushchinvv/" required="">
        <div class="invalid-feedback">
            Необходимо указать ссылку на ваш профиль.
        </div>
    </form>
@endsection
