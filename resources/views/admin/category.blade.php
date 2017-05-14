@extends('layouts.admin')

@section('title', 'Admin panel')

@section('nav')
    @include('partials.admin-nav', ['active' => 'category'])
@endsection

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading">Categories management</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <a href="{{ route('category.destroy', ['id' => $category->id]) }}" class="btn btn-danger" @click.prevent="removeCategory"><span class="glyphicon glyphicon-remove"></span> Remove</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="pagination-block">{{ $categories->links() }}</div>
        </div>
    </div>
@endsection