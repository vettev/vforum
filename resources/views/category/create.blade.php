@extends('layouts.admin')

@section('title', 'Admin panel')

@section('nav')
    @include('partials.admin-nav', ['active' => 'category.create'])
@endsection

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">Creating new category</div>
        <div class="panel-body">
            {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}
            <div class="form-group">
                <label for="name">Category name</label>
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create category', ['class' => 'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection