@extends('layouts.admin')

@section('title', 'Admin panel')

@section('nav')
    @include('partials.admin-nav', ['active' => 'panel'])
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Admin panel</div>
        <div class="panel-body">
            Admin panel XD
        </div>
    </div>
@endsection