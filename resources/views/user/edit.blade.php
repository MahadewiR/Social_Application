@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #f5f5f5;">
        <div class="row">
            <div class="col-md-12">
                <div class="card mx-auto" style="width: 80%; max-width: 800px; border: none; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-header bg-primary text-white">
                        <h2>Edit Profile</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Form fields -->
                            <div class="form-group mb-3">
                                <label for="name" class="font-weight-bold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Enter your name">
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="bio" class="font-weight-bold">Bio</label>
                                <textarea class="form-control" id="bio" name="bio" placeholder="Enter your bio">{{ $user->bio }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="profile_picture" class="font-weight-bold">Profile Picture</label>
                                <input type="file" class="form-control" id="profile_picture" name="profile_picture">
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection