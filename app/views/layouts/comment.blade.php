<a name="comments"></a><h1>Comments</h1>

@if($errors->has())
    <div class="error">
        <h2>Error:</h2>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    </div>
@endif

<h2>Add Comment</h2>

{{ Form::open(array('url' => '/comment/')) }}
    {{ Form::hidden('type', $type) }}
    {{ Form::hidden('id', $id) }}
    {{ Form::label('title', 'Comment title'); }} {{ Form::text('title'); }}
    {{ Form::label('email', 'Email address'); }} {{ Form::text('email'); }}
    {{ Form::label('content', 'Comment text'); }} {{ Form::textarea('content'); }}
    {{ Form::submit('Submit'); }}
{{ Form::close() }}

@if ($comments && sizeof($comments) > 0)
    @foreach ($comments as $comment)
        <div class="comment">
            <h3>{{{ $comment['title'] }}}</h3>
            <div class="meta">Comment by {{ $comment['user']['name'] }} at {{ date('m-d-Y H:i:s', strtotime($comment['created_at'])) }}</div>
            <p>
                {{{ $comment['content'] }}}
            </p>
        </div>
    @endforeach
@endif