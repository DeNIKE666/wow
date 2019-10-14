<ul style="line-height: 30px;">
    @foreach ($category as $categoryItem)
        <li>{{ $categoryItem->name }}</li>
        @if ($categoryItem->children->count())
            @include('admin.partials.categories.ul', ['category' => $categoryItem->children])
        @endif
    @endforeach
</ul>
