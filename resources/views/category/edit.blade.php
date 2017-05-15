@extends('layouts.frontend')

@section('title', 'Edit category')

@section('content')
    <div class="panel panel-default form-panel">
        <div class="panel-heading">Edit category</div>
        <div class="panel-body">
            {!! Form::open(['action' => ['CategoryController@update', $category] , 'method' => 'PATCH']) !!}
            <div class="form-group">
                <label for="name">Category name</label>
                {!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit category', ['class' => 'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection