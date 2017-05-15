@extends('layouts.admin')

@section('title', 'Users management')

@section('nav')
    @include('partials.admin-nav', ['active' => 'user'])
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Users management</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                                    <input type="hidden" name="_method" value="PATCH">
                                    {{ csrf_field() }}
                                    <select name="role_id" id="role" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" @if($role->id == $user->role_id) selected @endif> {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection