<div class="card">
    @foreach ($thread->replies as $reply)
        <div class="card-header">
            <strong><a href="#">{{ $reply->owner->name }}</a> said</strong>
             {{ $reply->created_at->diffForHumans() }}</div>
        <div class="card-body">

            {{ $reply->body }}
        </div>
        <hr />
    @endforeach
</div>
