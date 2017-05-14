<div class="nav admin-nav">
    <ul class="nav nav-pills nav-stacked">
        <li @if($active == "panel") class="active" @endif>
            <a href="{{ route('admin.index') }}"><span class="glyphicon glyphicon-info-sign"></span> Panel</a>
        </li>
        <li @if($active == "category") class="active" @endif>
            <a href="{{ route('admin.category') }}"><span class="glyphicon glyphicon-book"></span> Categories</a>
        </li>
        <li @if($active == "category.create") class="active" @endif>
            <a href="{{ route('category.create') }}"><span class="glyphicon glyphicon-plus-sign"></span> New category</a>
        </li>
        <li @if($active == "user") class="active" @endif>
            <a href="{{ route('admin.user') }}"><span class="glyphicon glyphicon-user"></span>  Users</a>
        </li>
        <li @if($active == "settings") class="active" @endif>
            <a href="{{ route('admin.settings') }}"><span class="glyphicon glyphicon-cog"></span> Settings</a>
        </li>
    </ul>
</div>