<div class="post">
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
            You can manage this post
        </div>
    @endcan
</div>