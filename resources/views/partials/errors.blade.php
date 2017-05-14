@if (count($errors) > 0)
    <div class="panel panel-danger">
        <div class="panel-heading">
            Errors
        </div>
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif