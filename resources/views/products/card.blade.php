@extends('index')
@section('title', 'Карточка товара')
@section('content')
    <div class="container d-flex flex-column align-items-center">
        <div class="card text-center mt-4 w-75">
            <div class="card-header">
                Карточка товара
            </div>
            <div class="card-body">
                <h5 class="card-title">Роза</h5>
                <img src="/public/assets/images/product1.jpg" class="card-img-top w-50" alt="...">
                <p class="card-text mt-4">Страна производитель: Россия</p>
                <p class="card-text">Категория: цветы</p>
                <p class="card-text">Цвет: черный</p>
                <a href="#" class="btn btn-primary">Добавить в корзину</a>
            </div>
        </div>
    </div>
@endsection
