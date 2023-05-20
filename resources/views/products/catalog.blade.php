@extends('index')
@section('title', 'Каталог')
@section('content')
    <div class="container">
        <h3 class="mt-4">Каталог товаров</h3>
        <div class="d-flex gap-2 mt-4">
            <select class="form-select" aria-label="Default select example">
                <option selected>Упорядочить по...</option>
                <option value="1">Страна поставщика</option>
                <option value="2">Наименование</option>
                <option value="3">Цена</option>
            </select>
            <select class="form-select" aria-label="Default select example">
                <option selected>Отфильтровать</option>
                <option value="1">Цветы</option>
                <option value="2">Упаковка</option>
                <option value="3">Дополнительно</option>
            </select>
        </div>
        <div class="mt-4 d-flex flex-wrap gap-5">
            <div class="card" style="width: 18rem;">
                <img src="/public/assets/images/product1.jpg" class="card-img-top" alt="..." style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Ромашка</h5>
                    <p class="card-text">200 руб.</p>
                    <a href="{{route('product', ['product'=>1])}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/public/assets/images/product2.jpg" class="card-img-top" alt="..." style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Роза</h5>
                    <p class="card-text">200 руб.</p>
                    <a href="{{route('product', ['product'=>2])}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/public/assets/images/product3.jpg" class="card-img-top" alt="..." style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Хризантема</h5>
                    <p class="card-text">200 руб.</p>
                    <a href="{{route('product', ['product'=>3])}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/public/assets/images/product4.png" class="card-img-top" alt="..." style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Лилия</h5>
                    <p class="card-text">200 руб.</p>
                    <a href="{{route('product', ['product'=>4])}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/public/assets/images/product5.jpg" class="card-img-top" alt="..." style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Астра</h5>
                    <p class="card-text">200 руб.</p>
                    <a href="{{route('product', ['product'=>5])}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/public/assets/images/product6.jpg" class="card-img-top" alt="..." style="height: 200px">
                <div class="card-body">
                    <h5 class="card-title">Роза</h5>
                    <p class="card-text">200 руб.</p>
                    <a href="{{route('product', ['product'=>6])}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
@endsection
