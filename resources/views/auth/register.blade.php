@extends('layout.app')
@section('content')
<br />
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-sm">
            <form action="{{ route('register.create') }}" method="post">@csrf
                <div class="form-floating mb-3">
                    <input type="email" value="{{ old('email') }}" name="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1">Адрес электронной почты</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" value="{{ old('document') }}" name="document" class="form-control @error('document') is-invalid @enderror" id="exampleInputDocument1" placeholder="ИНН организации">
                    <label for="exampleInputDocument1">ИНН организации</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Пароль">
                    <label for="exampleInputPassword1">Пароль</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword2" placeholder="Повторите пароль">
                    <label for="exampleInputPassword2">Повторите пароль</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
                    <a href="{{ route('login') }}" class="float-end me-2">Уже зарегистрированы?</a>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Отправить</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection