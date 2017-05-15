@extends('layouts.admin')

@section('title', 'Settings')

@section('nav')
    @include('partials.admin-nav', ['active' => 'settings'])
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Settings</div>
        <div class="panel-body">
            Forum Settings
        </div>
    </div>
@endsection