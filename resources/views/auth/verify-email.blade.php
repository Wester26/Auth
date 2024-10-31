@extends('layout.app')
@section('content')
<br />
<div class="container">
    <div class="mb-3">
        <div class="alert alert-info">
            Благодарим за успешную регистрацию. Осталось поддтвердить email.
        </div>
    </div>
    <div class="mb-3">
        Не получили письмо?
    </div>
    <form action="{{ route('verification.send') }}" method="post">@csrf
        <button type="submit" class="btn btn-primary">Send link</button>
    </form>
</div>
@endsection