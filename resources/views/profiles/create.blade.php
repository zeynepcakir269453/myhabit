@extends('layouts.app')

@section('title', 'Create Profile')

@section('contents')
<h1 class="mb-0">Add Profile</h1>
<hr />
<form action="{{ route('users.storeprofile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create Profile</button>
        </div>
    </div>
</form>
@endsection