@extends('layouts.admin')

@section('title' , 'Все продукты')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Все продукты</h4>
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

                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td class="text-center">
                                <div class="d-inline-flex">
                                    <a href="{{ route('admin.product.edit', $product) }}" class="btn"><i class="fad fa-edit"></i></a>
                                    <a href="" class="btn"><i class="fad fa-trash"></i></a>
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
@endsection
