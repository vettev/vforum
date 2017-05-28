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
    <div id="edit-post" hidden>
        <form class="edit-post-form">
            <input type="hidden" id="id" value="0" name="id">
            <div class="form-group">
                <textarea name="content" id="content" rows="6" placeholder="Content of your post..." class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Edit</button>
            </div>
        </form>
    </div>
@endsection