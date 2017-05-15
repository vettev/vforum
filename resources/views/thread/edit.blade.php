@extends('layouts.frontend')

@section('title', 'Edit thread')

@section('content')
    @include('partials.errors')
    <div class="panel panel-success form-panel">
        <div class="panel-heading">Edit thread</div>
        <div class="panel-body">
            {!! Form::open(['action' => ['ThreadController@update', $thread], 'class' => 'form', 'method' => 'PATCH']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Thread title') !!}
                {!! Form::text('title', $thread->title, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Thread category') !!}
                {!! Form::select('category_id', $categories, $thread->category_id, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content of your thread') !!}
                {!! Form::textarea('content', $thread->content, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit your thread', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection