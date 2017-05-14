<ul class="list-group threads">
    @foreach($threads as $thread)
        @include('thread.template')
    @endforeach
</ul>