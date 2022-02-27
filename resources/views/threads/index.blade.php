@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Forum Threads') }}</div>

            <div class="card-body">
                @foreach ($threads as $row)
                 <article>
                    <h4>
                        <a href="{{ $row->path() }}">{{ $row->title }}</a>
                    </h4>
                    <div class="body">{{ $row->body }}</div>
                 </article>
                 <hr/>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
