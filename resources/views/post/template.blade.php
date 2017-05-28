<div class="post" id="post-{{ $post->id }}">
    <div class="post-at">
        {{ $post->created_at->diffForHumans() }}
    </div>
    <div class="post-by">
        @include('user.avatar', ['size' => 64, 'user' => $post->user])
        @include('user.link', ['user' => $post->user])
    </div>
    <div class="post-content">
        {{ $post->content }}
    </div>
    @can('manage-post', $post)
        <div class="manage manage-post">
            <button data-id="{{ $post->id }}" class="btn btn-info btn-sm" @click="editPost">
                <span class="glyphicon glyphicon-edit"></span> Edit
            </button>
            <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-remove"></span>
                    Delete
                </button>
            </form>
        </div>
    @endcan
</div>