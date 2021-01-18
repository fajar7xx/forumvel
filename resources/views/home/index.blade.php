@extends('layouts.front')

@section('title', 'Home')

@section('banner')
    <div class="bg-light p-5 rounded shadow-sm">
        <h1>Join ForumVel</h1>
        <p class="lead">ForumVel is also Forum Laravel. just for have fun to share anything about laravel</p>
        <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
    </div>
@endsection

@section('banner2')
    <div class="row content-heading mt-4">
        <div class="col-md-3">
            <h4>Category</h4>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="main-content-heading">
                        @yield('heading', 'Threads')
                    </h4>
                </div>
                <div class="offset-md-6 col-md-2">
                    <a href="{{route('thread.create')}}" class="btn btn-primary">Create Thread</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    @include('components.alert')

    <div class="bg-white rounded shadow-sm p-2">
        <div class="list-group">
            @forelse($threads as $thread)
                <div class="card rounded shadow-sm mb-2">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{route('thread.show', $thread->id)}}" class="text-decoration-none">{{$thread->subject}}</a>
                        </h5>
                        <p class="card-text">{{$thread->thread}}</p>
                    </div>
                </div>
{{--                <a href="#" class="list-group-item list-group-item-action" aria-current="true">--}}
{{--                    <div class="d-flex w-100 justify-content-between">--}}
{{--                        <h5 class="mb-1">{{$thread->subject}}</h5>--}}
{{--                    </div>--}}
{{--                    <p class="mb-1">{{$thread->thread}}</p>--}}
{{--                </a>--}}
            @empty
                <h5>No Threads</h5>
            @endforelse
        </div>
    </div>
@endsection
