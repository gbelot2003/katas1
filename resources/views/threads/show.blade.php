@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="#">{{ $thread->creator->name }}</a> posted:
                <strong>{{ $thread->title }}</strong>
            </div>
            <div class="card-body">
                 <article>
                    <div class="body">{{ $thread->body }}</div>
                 </article>
            </div>

        </div>
    </div>
    <div class="row justify-content-center">
        @include('threads._replies')
    </div>
</div>

@stop
