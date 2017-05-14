@extends('layouts.frontend')

@section('title', 'Categories')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Categories</div>
        @include('category.list')
            <div class="pagination-block">{{ $categories->links() }}</div>
    </div>
@endsection