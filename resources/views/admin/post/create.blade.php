@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')
    <h2 class="text-danger text-center">Posts</h2>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Create Post</h4>

            <a href="{{ route('posts.index') }}" class="btn btn-md btn-info ">Post List</a>


        </div>
        <div class="card-body">

            <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="col-4 col-form-label">Title</label>
                    <div class="col-6">
                        <input type="text"
                            class="form-control @error('title')
                        is-invalid
                    @enderror"
                            name="title" id="title" placeholder="Title" value="{{ old('title') }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="content" class="col-4 col-form-label">Content</label>
                    <div class="col-6">
                        <textarea type="text"
                            class="form-control @error('content')
                            is-invalid
                        @enderror"
                            name="content" id="content" placeholder="Post Description">{{ old('content') }}</textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="photo" class="col-4 col-form-label">Photo</label>
                    <div class="col-6">
                        <input type="file" class="form-control" name="photo" id="photo" accept="image/*"
                            placeholder="Photo">
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
        </div>
        </form>
    </div>
    </div>
@endsection
