@extends('layouts.app')
  
@section('title', 'Show User')
  
@section('contents')
    <h1 class="mb-0">Detail User Information</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $user->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Price" value="{{ $user->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Profile</label>
            <input type="text" name="profile" class="form-control" placeholder="Price" value="{{ $user->profile }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Group Name</label>
            <input type="text" name="group" class="form-control" placeholder="Price" value="{{ $user->group }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $user->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $user->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $user->updated_at }}" readonly>
        </div>
    </div>
@endsection