@extends('index')
@section('title', 'Где нас найти?')
@section('content')
    <div class="container d-flex flex-column align-items-center mt-4">
        <h3>Страница контактов</h3>
        <img src="/public/assets/images/map.jpg" class="card-img-top w-75 mt-2" alt="...">
        <div class="list-group w-75">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Наш адрес</h5>
                </div>
                <p class="mb-1">г. Челябинск, ул. Энтузиастов,17</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Наш номер телефона</h5>
                </div>
                <p class="mb-1">+7 (800) 555 35 35</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Наш email</h5>
                </div>
                <p class="mb-1">worldflowers@email.ru</p>
            </a>
        </div>
    </div>
@endsection
