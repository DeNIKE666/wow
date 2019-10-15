@extends('layouts.admin')

@section('title', 'Категории')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">
                    <div class="card-title">Категории | <button class="btn btn-primary" data-toggle="modal" data-target="#category">Добавить категорию</button></div>
                </div>

                <div class="card-body">
                    @foreach ($categories as $category)
                        <a href="{{ route('category.edit', $category) }}">{{ $category->name }} </a>
                        <div class="float-right">
                            <a href="{{ route('category.show', $category) }}"><i class="far fa-plus-circle"></i></a>
                        </div>
                        @include('admin.partials.categories.ul', ['category' => $category->children])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить новую категорию</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('category.create') }}" method="POST" enctype="multipart/form-data">
                        @CSRF
                        <div class="form-group">
                            <label for="category_name">Название</label>
                            <input id="category_name" name="name" class="form-control" placeholder="Введите название категории">
                        </div>

                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea id="category_name" name="description" class="form-control" placeholder="Описание категории"></textarea>
                            <br>
                            <label for="popup">Позиция всплывающего текста</label>
                            <select name="class" class="form-control" id="image">
                                @foreach (position() as $k => $position)
                                    <option value="{{ $k }}">{{ $position }}</option>
                                @endforeach
                            </select>
                            <br>
                            <p>Очень важно, каждый новый ряд по 3 блока должен начинаться с новой позиции (<b>top-line-1, top-line-2, top-line-3</b>) </p>
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

                        <div class="form-group">
                            <label for="icons">Иконка</label>
                            <select name="icons" class="form-control" id="icons">
                                <option selected value="">Выберите иконку</option>
                                <option value="percent">Процент</option>
                                <option value="star">Звёздочка</option>
                            </select>
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
