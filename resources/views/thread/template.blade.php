<li class="list-group-item thread">
    <div class="main">
        <a href="{{ route('thread.show', ['id' => $thread->id]) }}">{{ $thread->title  }}</a>
        <p class="meta">
            <span>Created by</span>
            @include('user.link', ['user' => $thread->user])
            <span> at {{ $thread->created_at }}</span>
        </p>
    </div>
    @can('manage-thread', $thread)
        <div class="manage thread-manage">
            <a href="{{ route('thread.edit', ['id' => $thread->id]) }}" class="btn btn-info btn-sm">
                <span class="glyphicon glyphicon-edit"></span> Edit
            </a>
            <form action="{{ route('thread.destroy', ['id' => $thread->id]) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-remove"></span>
                    Delete
                </button>
            </form>
        </div>
    @endcan
    <div class="reply-count">
        {{ $thread->posts_count }} replies
    </div>
    <div class="posted-lately">
        <div class="meta">
            <a href="{{ route('user.show', ['id' => $thread->lastReplyUser()->id]) }}">
                @include('user.avatar', ['size' => 32, 'user' => $thread->lastReplyUser()])
                <span>{{ $thread->lastReplyUser()->name }}</span>
            </a>
            <span>{{ $thread->lastReplyDate()->diffForHumans() }}</span>
        </div>
    </div>
    <div class="clearfix"></div>
</li>