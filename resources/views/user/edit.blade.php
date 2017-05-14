@extends('layouts.frontend')

@section('title', 'Edit your account')

@section('content')
<div class="edit-user-form">
    {!! Form::open(['url' => route('user.update'), 'class' => 'form']) !!}
    <div class="panel panel-success">
        <div class="panel-heading">
            Edit your account
        </div>
        <div class="panel-body">
            <div class="form-group">
                {!! Form::label('avatar', 'Avatar') !!}
                {!! Form::file('avatar', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Write something about you...') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit your account', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection