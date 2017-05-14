@extends('layouts.frontend')

@section('title', 'Homepage')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default categories-panel">
                <div class="panel-heading">
                    Categories
                    @can('manage-categories')
                    <a href="{{ route('category.create') }}"><span class="glyphicon glyphicon-plus-sign"></span> Create category</a>
                    @endcan
                </div>
                @include('category.list')
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Last threads
                </div>
                @include('thread.list')
            </div>
        </div>
    </div>
@endsection

