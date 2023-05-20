@extends('index')
@section('title', 'Регистрация')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <h4 class="mb-4 mt-4">Страница регистрации</h4>
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" aria-describedby="InvalidName" id="inputName" value="{{old('name')}}">
                        @error('name')
                        <div class="invalid-feedback" id="InvalidName">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputSurname" class="form-label">Фамилия</label>
                        <input type="text" name="surname" class="form-control @error('surname') is-invalid @enderror" aria-describedby="InvalidSurname" id="inputSurname" value="{{old('surname')}}">
                        @error('surname')
                        <div class="invalid-feedback" id="InvalidSurname">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPatronymic" class="form-label">Отчество</label>
                        <input type="text" name="patronymic" class="form-control @error('patronymic') is-invalid @enderror" aria-describedby="InvalidPatronymic" id="inputPatronymic" value="{{old('patronymic')}}">
                        @error('patronymic')
                        <div class="invalid-feedback" id="InvalidPatronymic">{{$message}}</div>
                        @enderror
                    </div><div class="mb-3">
                        <label for="inputLogin" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" aria-describedby="InvalidLogin" id="inputLogin" value="{{old('login')}}">
                        @error('login')
                        <div class="invalid-feedback" id="InvalidLogin">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="InvalidEmail" id="inputEmail" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback" id="InvalidEmail">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" aria-describedby="InvalidPassword" id="inputPassword">
                        @error('password')
                        <div class="invalid-feedback" id="InvalidPassword">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Пароль повторно</label>
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirmation">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="rules" class="form-check-input @error('rules') is-invalid @enderror" id="inputCheck" aria-describedby="InvalidCheck">
                        <label class="form-check-label" for="inputCheck">Согласие с политикой регистрации</label>
                        @error('rules')
                        <div class="invalid-feedback" id="InvalidCheck">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
