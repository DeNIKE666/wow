<ul style="line-height: 30px;">
    @foreach ($category as $categoryItem)
        <li><a href="{{ route('category.edit', $categoryItem) }}">{{ $categoryItem->name }}</a></li>
        @if ($categoryItem->children->count())
            @include('admin.partials.categories.ul', ['category' => $categoryItem->children])
        @endif
    @endforeach
</ul>
