@extends('layout.app')
@section('content')
<br />
<div class="row">
    <div class="col"></div>
    <div class="col">
        <form action="{{ route('password.update') }}" method="post">@csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Новый пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="PasswordHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" aria-describedby="PasswordHelp">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
    <div class="col"></div>
</div>
@endsection