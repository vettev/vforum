@extends('layouts.frontend')

@section('title', 'User ' . $user->name . ' profile')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">User profile</div>
        <div class="panel-body">
            @include('user.avatar', ['user' => $user, 'size' => 128])
            <h3>{{ $user->name }}</h3>
        </div>
    </div>
@endsection