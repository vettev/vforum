@if(Auth::check())
<div class="post-form">
    {!! Form::open(['url' => route('post.store'), 'class' => 'form']) !!}
    <div class="panel panel-success">
        <div class="panel-heading">
            {!! Form::hidden('thread_id', $thread->id) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            {!! Form::label('content', 'Add post', ['class' => 'panel-title']) !!}
        </div>
        <div class="panel-body">
            <div class="form-group">
                {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Post your reply']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Post your reply', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endif