@extends('layout.app')
@section('content')
<br />
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-sm">
            <form action="{{ route('password.email') }}" method="post">@csrf
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Адрес электронной почты">
                    <label for="exampleInputEmail1">Адрес электронной почты</label>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">Восстановить доступ</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection