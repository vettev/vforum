@extends('layouts.frontend')

@section('title', 'All threads')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">All threads</div>
        @include('thread.list')
    </div>
@endsection