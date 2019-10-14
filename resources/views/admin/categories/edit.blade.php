@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categorory.update', $category) }}" method="POST">
                @CSRF
                <div class="form-group">
                    <label for="category_name">Название</label>
                    <input id="category_name" name="name" class="form-control" value="{{ $category->name ?? old('name') }}">
                </div>

                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea id="category_name" name="description" class="form-control"  rows="3">{{ $category->description ?? old('description') }}</textarea>
                    <br>
                    <label for="popup">Позиция всплывающего текста</label>
                    <select name="class" class="form-control" id="image">
                        @foreach (position() as $k => $position)
                            <option
                                @if ($category->class == $k)
                                selected
                                @endif
                                value="{{ $k }}">{{ $position }}</option>
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
                            <option
                                @if ($category->image == $files)
                                    selected
                                @endif
                                value="{{ $files }}">{{ $files }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="icons">Иконка</label>
                    <select name="icons" class="form-control" id="icons">
                        @foreach (icons() as $k=> $icon)
                            <option

                                @if($category->icons == $k)
                                    selected
                                @endif

                                value="{{ $k }}">{{ $icon }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
