@extends('layouts.frontend')

@section('title', $thread->title)

@section('content')
    <div id="thread">
        <div class="title">
            <h3>{{ $thread->title }}</h3>
        </div>
        <div class="post thread-post" style="margin-bottom: 3em">
            <div class="post-at">
               Thread started {{ $thread->created_at->diffForHumans() }}
            </div>
            <div class="post-by">
                @include('user.avatar', ['size' => 100, 'user' => $thread->user])
                <a href="#">{{ $thread->user->name }}</a>
            </div>
            <div class="post-content">
                {{ $thread->content }}
            </div>
            @can('manage-thread', $thread)
            <div class="manage thread-manage">
                You can manage this thread
            </div>
            @endcan
        </div>
        <div class="posts">
            <div class="post-list">
                @foreach($posts as $post)
                    @include('post.template')
                @endforeach
            </div>
            @include('post.create')
        </div>
    </div>
@endsection