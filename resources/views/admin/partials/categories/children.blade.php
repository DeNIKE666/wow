@foreach ($categories as $category)
    <option
        @if (isset($product))
           @if($category->id == $product->category_id)
              selected
          @endif
        @endif value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach
