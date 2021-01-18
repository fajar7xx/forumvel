@extends('layouts.front')

@section('title', 'Thread')

@section('content')
    <h2>Threads</h2>

    <div class="list-group">
        @forelse($threads as $thread)
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$thread->subject}}</h5>
{{--                    <small>3 days ago</small>--}}
                </div>
                <p class="mb-1">{{$thread->thread}}</p>
{{--                <small>Donec id elit non mi porta.</small>--}}
            </a>
        @empty
            <h5>No Threads</h5>
        @endforelse
    </div>
@endsection
