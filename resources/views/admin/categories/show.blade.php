@extends('layouts.admin')

@section('title' , 'Добавить подкатегорию')

@section('content')
    <span>Название главной категории: <b>{{ $category->name }} </b></span> <br>
    <p>Добавьте список подкатегорий для этой категории</p>

    <span>список подкатегорий</span>

    @include('admin.partials.categories.ul', ['category' => $category->descendants()->get()])

    <div class="d-inline-block">
        <button data-toggle="modal" data-target="#subCategory" class="btn btn-success"> ДОБАВИТЬ ПОДКАТЕГОРИЮ </button>
        <a href="{{ route('categories') }}" class="btn btn-primary">КО ВСЕМ КАТЕГОРИЯМ</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="subCategory" tabindex="-1" role="dialog" aria-labelledby="subCategoryModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить подкатегорию</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('category.subcategory', $category) }}" method="POST" enctype="multipart/form-data">

                        @CSRF

                        <div class="form-group">
                            <label for="category_name">Название</label>
                            <input id="category_name" name="name" class="form-control" placeholder="Введите название категории">
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
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

