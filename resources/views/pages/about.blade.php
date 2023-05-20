@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-8">
            <div class="info d-flex flex-column align-items-center text-center">
            <img class="card-img-top w-75" src="/public/assets/images/логотип.png">
            <p class="d-flex text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dignissimos exercitationem explicabo magnam sequi temporibus? Animi aspernatur atque consequatur cum doloribus, eos impedit in, maxime mollitia nesciunt non soluta vitae!</p>
            <h4 class="mt-4 mb-3">Новинки компании</h4>
            <div id="carouselExampleCaptions" class="carousel slide w-75" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 400px">
                        <img src="/public/assets/images/product1.jpg" class="slide d-block h-100 w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Ромашка</h5>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 400px">
                        <img src="/public/assets/images/product2.jpg" class="slide d-block h-100 w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Роза</h5>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 400px">
                        <img src="/public/assets/images/product3.jpg" class="slide d-block h-100 w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Лилия</h5>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 400px">
                        <img src="/public/assets/images/product4.png" class="slide d-block h-100 w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Сирень</h5>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 400px">
                        <img src="/public/assets/images/product5.jpg" class="slide d-block h-100 w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Одуванчик</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection
