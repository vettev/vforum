@extends('layouts.frontend')

@section('title', $category->name)

@section('content')
    <div class="panel panel-default threads-panel">
        <div class="panel-heading">
            {{ $category->name }}
            @if(Auth::check())
            <a href="{{ route('thread.create') }}"><span class="glyphicon glyphicon-plus-sign"></span> Create thread</a>
            @endif
        </div>
        @include('thread.list')
    </div>
    <div class="pagination-block">
        {{ $threads->links() }}
    </div>
@endsection