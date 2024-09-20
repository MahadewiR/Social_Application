@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">Create Post</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" required rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-primary btn-lg">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
