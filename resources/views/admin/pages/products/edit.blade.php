@extends('layouts.admin')

@section('title' , 'Редактирование продукта')

@section('content')
    <div class="card">
        <div class="card-header">
            Редактирование продукта
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="title">Название продукта</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $product->title ?? old('title') }}">
            </div>

            <div class="form-group">
                <label for="image">Изображение</label>
                <select name="image" class="form-control" id="image">
                    <option selected value="">Выберите изображение</option>
                    @foreach (Storage::disk('public')->files('img') as $files)
                        <option
                            @if ($product->image == $files)
                            selected
                            @endif
                            value="{{ $files }}">{{ $files }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="price">Стоимость</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $product->price ?? old('price') }}">
            </div>

        </div>
    </div>
@endsection
