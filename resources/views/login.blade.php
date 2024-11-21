@extends('layout.layout')
@section('title', 'Вход')

@section('body')
    <form method="POST" action={{ route('login-post') }} style="width: 50%;">
        @csrf
        <legend>Авторизация</legend>
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" id="login" name="login" class="form-control" placeholder="Логин">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Пароль">
            @error('authError')
                <span class="badge text-bg-danger">
                    {{ $message }}
                </span>
            @enderror
            @if (session('register-success'))
                <span class="badge text-bg-success">
                    {{ session('register-success') }}
                </span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
