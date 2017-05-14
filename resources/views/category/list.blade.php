<div class="list-group categories">
    @foreach($categories as $category)
        <a href="{{ route('category.show', ['id' => $category->id]) }}" class="list-group-item">
            {{ $category->name }}
            @if(isset($category->threads_count))
                <span class="badge">{{ $category->threads_count }}</span>
            @endif
        </a>
    @endforeach
</div>