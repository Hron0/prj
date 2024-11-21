@extends('layout.layout')
@section('title', 'Регистрация')

@section('body')
    <form action="{{ route('register-post') }}" method="POST" onsubmit="formAction(this, event)" style="width: 50%;">
        @csrf
        <legend>Регистрация</legend>
        <div class="mb-3">
            <label for="fio" class="form-label">Ваши ФИО</label>
            <input type="text" id="fio" name="fio" class="form-control" placeholder="ФИО">
            @error('fio')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Почта</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            @error('email')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" id="login" name="login" class="form-control" placeholder="Логин">
            @error('login')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Серия и номер Водительского</label>
            <input type="text" id="series" name="series" class="form-control" placeholder="Серия и номер слитно">
            @error('series')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Пароль">
            @error('password')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password-conf" class="form-label">Подтвердите пароль</label>
            <input type="password" id="password-conf" name="password-conf" class="form-control" placeholder="Пароль">
            @error('password-conf')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
    </form>
@endsection

