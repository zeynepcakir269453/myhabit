@extends('layouts.app')
  
@section('title', 'Edit User Account')
  
@section('contents')
    <h1 class="mb-0">Edit User</h1>
    <hr />
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}" >
            </div>

        </div>
        <div class="row">

            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $user->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection