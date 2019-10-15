

<div class="form-group">
    <label for="image">Категории</label>
    <select name="category_id" class="form-control" id="category_id">
        <option selected value=""> Выберите категорию </option>

        @foreach ($categories as $category)
            <option
                @if ($category->hasParent())
                style="font-weight: 700;"
                disabled
                @endif>
                {{ $category->name }}
            </option>

            @if (count($category->children))
                @include('admin.partials.categories.children', ['categories' => $category->children])
            @endif

        @endforeach
    </select>
</div>
