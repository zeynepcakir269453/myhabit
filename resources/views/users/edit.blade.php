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
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
        </div>
        <div class="col mb-3">
        <label class="form-label">Profile</label>
            <select name="profile" id="profile" class="form-control">
                @foreach($profiles as $value)
                <option value="{{$value->value}}" @if($value->value == auth()->user()->profile) selected @endif >{{$value->name}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col mb-3">
        <label class="form-label">Groups</label>
            <select name="group" id="group" class="form-control">
                @foreach($groups as $value)
                <option value="{{$value->value}}" @if($value->value == auth()->user()->group) selected @endif >{{$value->name}}
                </option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="row">

        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"
                placeholder="Descriptoin">{{ $user->description }}</textarea>
        </div>

    </div>
    <div class="row">
        <div class="d-grid">
            <button class="btn btn-warning">Update</button>
        </div>
    </div>
</form>
@endsection