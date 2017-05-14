@extends('layouts.admin')

@section('title', 'Admin panel')

@section('nav')
    @include('partials.admin-nav', ['active' => 'user'])
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Users management</div>
        <div class="panel-body">
            Tu beda uzytkownicy
        </div>
    </div>
@endsection