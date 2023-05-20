@extends('index')
@section('title', 'Панель администратора')
@section('content')
    <div class="container d-flex flex-column align-items-center">
        <h2 class="mt-5">Админ-панель</h2>
        <div class="w-75 mt-4">
            <h4>Управление заказами</h4>
            <select class="form-select w-50 mb-3" aria-label="Default select example">
                <option selected>Фильтрация</option>
                <option value="1">Новые</option>
                <option value="2">Подтвержденные</option>
                <option value="3">Отмененные</option>
            </select>
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="w-50">ФИО</th>
                    <th scope="col">Количество</th>
                    <th scope="col">Дата и время</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Иван Иванов</td>
                    <td>1</td>
                    <td>20.05.2023 12:05</td>
                    <td><a href="#" class="btn btn-outline-danger">Отменить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Подтвердить</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Павел Павлов</td>
                    <td>5</td>
                    <td>24.05.2023 17:01</td>
                    <td><a href="#" class="btn btn-outline-danger">Отменить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Подтвердить</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Алиса Алисова</td>
                    <td>2</td>
                    <td>12.05.2023 23:00</td>
                    <td><a href="#" class="btn btn-outline-danger">Отменить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Подтвердить</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="w-75 mt-4">
            <h4>Управление товарами</h4>
            <td><a href="#" class="btn btn-outline-primary mb-3">Добавить новый товар</a></td>
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Фото</th>
                    <th scope="col" class="w-50">Наименование</th>
                    <th scope="col">Цена</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td class="w-25"><img src="/public/assets/images/product1.jpg" class="card-img-top w-50" alt="..."></td>
                    <td>Роза</td>
                    <td>200 руб.</td>
                    <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Редактировать</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td class="w-25"><img src="/public/assets/images/product2.jpg" class="card-img-top w-50" alt="..."></td>
                    <td>Ландыш</td>
                    <td>300 руб.</td>
                    <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Редактировать</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td class="w-25"><img src="/public/assets/images/product3.jpg" class="card-img-top w-50" alt="..."></td>
                    <td>Ромашка</td>
                    <td>250 руб.</td>
                    <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Редактировать</a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="w-75 mt-4">
            <h4>Управление категориями</h4>
            <td><a href="#" class="btn btn-outline-primary mb-3">Добавить новую категорию</a></td>
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="w-75">Наименование</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Цветы</td>
                    <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Редактировать</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Упаковка</td>
                    <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Редактировать</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Дополнительно</td>
                    <td><a href="#" class="btn btn-outline-danger">Удалить</a></td>
                    <td><a href="#" class="btn btn-outline-primary">Редактировать</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
