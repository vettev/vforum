@extends('layouts.frontend')

@section('title', $category->name)

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ $category->name }}</div>
        @include('thread.list')
    </div>
    <div class="pagination-block">
        {{ $threads->links() }}
    </div>
@endsection