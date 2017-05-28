@extends('layouts.admin')

@section('title', 'Settings')

@section('nav')
    @include('partials.admin-nav', ['active' => 'settings'])
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Settings</div>
        <div class="panel-body">
            {!! Form::open(['route' => 'admin.settings.update','method' => 'POST']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Page title') !!}
                {!! Form::text('title', config()['app']['name'], ['placeholder' => 'Site title', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Save settings', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection