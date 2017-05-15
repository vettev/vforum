@extends('layouts.frontend')

@section('title', 'All threads')

@section('content')
    <div class="panel panel-default threads-panel">
        <div class="panel-heading">
            All threads
            @if(Auth::check())
                <a href="{{ route('thread.create') }}"><span class="glyphicon glyphicon-plus-sign"></span> Create thread</a>
            @endif
        </div>
        @include('thread.list')
    </div>
    {{ $threads->links() }}
@endsection