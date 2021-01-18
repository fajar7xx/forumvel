@extends('layouts.front')

@section('heading', 'Create Thread')

@section('banner')
    <div class="bg-light p-5 rounded shadow-sm">
        <h3>Edit Thread</h3>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="well card shadow-sm p-2 bg-light">
            <form action="{{route('thread.update', $thread->id)}}" class="form-vertical needs-validation" method="POST" role="form" id="create-thread-form" novalidate>
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" id="subject" class="form-control @error('subject') is-invalid @enderror" value="{{old('subject') ?? $thread->subject}}">
                    @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type') ?? $thread->type}}">
                    @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="thread" class="form-label">Thread</label>
                    <textarea name="thread" id="thread" cols="30" rows="10" class="form-control @error('thread') is-invalid @enderror">{{old('thread') ?? $thread->thread}}</textarea>
                    @error('thread')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
