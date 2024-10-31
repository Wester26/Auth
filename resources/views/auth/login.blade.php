@extends('layout.app')
@section('content')
<br />
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-sm">
            <form action="{{ route('login.store') }}" method="post">@csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Адрес электронной почты</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Пароль">
                    <label for="floatingPassword">Пароль</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
                    <a href="{{ route('password.request') }}" class="float-end me-2">Забыли пароль?</a>
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