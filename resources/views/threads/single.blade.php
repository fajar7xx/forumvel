@extends('layouts.front')

@section('content')
<div class="card rounded shadow-sm">
    <div class="card-body">
        <h5 class="card-title">
           {{$thread->subject}}
        </h5>
        <hr>
        <p class="card-text">{{$thread->thread}}</p>
        @auth()
            <a href="{{route('thread.edit', $thread->id)}}" class="btn btn-sm btn-primary">Edit</a>

            <form action="{{route('thread.destroy', $thread->id)}}" method="POST" class="inline-it">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
            </form>
        @endauth
{{--        <a href="#" class="card-link">Another link</a>--}}
    </div>
</div>
@endsection
