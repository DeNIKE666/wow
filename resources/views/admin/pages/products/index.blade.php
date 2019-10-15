@extends('layouts.admin')

@section('title' , 'Все продукты')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Все продукты | <button class="btn btn-primary" data-toggle="modal" data-target="#product">Добавить товар </button></h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Название продукта</th>
                        <th>Категория</th>
                        <th>Стоимость</th>
                        <th width="100">Действия</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse ($products as $productItem)
                        <tr>
                            <td>{{ $productItem->title }}</td>
                            <td>{{ $productItem->category->name }}</td>
                            <td>{{ $productItem->price }}</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <a href="{{ route('admin.product.edit', $productItem) }}" class="btn"><i class="fad fa-edit"></i></a>
                                    <a href="{{ route('admin.product.delete', $productItem) }}" class="btn"><i class="fad fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                ПРОДУКТЫ ОТСУТСТВУЮТ
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавление товара</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('admin.products.create') }}" method="POST" enctype="multipart/form-data">
                        @CSRF
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input id="title" name="title" class="form-control" placeholder="Введите название товара">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea id="description" name="description" class="form-control" placeholder="Описание товара"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Изображение</label>
                            <select name="image" class="form-control" id="image">
                                <option selected value="">Выберите изображение</option>
                                @foreach (Storage::disk('public')->files('img') as $files)
                                    <option value="{{ $files }}">{{ $files }}</option>
                                @endforeach
                            </select>
                        </div>

                        @include('admin.partials.categories.option', ['category' => $categories])

                        <div class="form-group">
                            <label for="price">Стоимость</label>
                            <input id="price" name="price" class="form-control" placeholder="Стоимость">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
