@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ $thread->title }}</div>
            <div class="card-body">
                 <article>
                    <div class="body">{{ $thread->body }}</div>
                 </article>
            </div>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="card">
            @foreach ($thread->replies as $reply)
                <div class="card-header">{{ $reply->created_at->diffForHumans() }}</div>
                <div class="card-body">
                    <strong>{{ $reply->owner->name }} said</strong>
                    {{ $reply->body }}
                </div>
                <hr />
            @endforeach

        </div>
    </div>
</div>

@stop
