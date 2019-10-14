@extends('layouts.admin')

@section('title' , 'Добавить подкатегорию')

@section('content')
    <span>Название главной категории: <b>{{ $category->name }} </b></span> <br>
    <p>Добавьте список подкатегорий для этой категории</p>
    <button data-toggle="modal" data-target="#subCategory" class="btn btn-primary mt-2"> ДОБАВИТЬ ПОДКАТЕГОРИЮ </button>

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

                    <form action="{{ route('categorory.subcategory', $category) }}" method="POST" enctype="multipart/form-data">

                        @CSRF

                        <div class="form-group">
                            <label for="category_name">Название</label>
                            <input id="category_name" name="name" class="form-control" placeholder="Введите название категории">
                        </div>

                        <div class="form-group">
                            <label for="image">Изображение</label>
                            <input type="file" name="image" class="form-control-file" id="image">
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

