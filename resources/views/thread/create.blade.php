@extends('layouts.frontend')

@section('title', 'Create new thread')

@section('content')
    @include('partials.errors')
    <div class="panel panel-success" style="width: 70%; margin: 2em auto;">
        <div class="panel-heading">Creating thread</div>
        <div class="panel-body">
            {!! Form::open(['url' => route('thread.store'), 'class' => 'form']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Thread title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Thread category') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content of your thread') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create your thread', ['class' => 'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection