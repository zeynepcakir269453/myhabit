@extends('layouts.app')

@section('title', 'Create User Account')

@section('contents')
<h1 class="mb-0">Add User</h1>
<hr />
<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <select name="profile" id="profile" class="form-control">
                <option>Choose Profiles</option>
                @foreach($profiles as $value)
                <option value="{{$value->value}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="group" id="group" class="form-control">
                <option>Choose Groups</option>
                @foreach($groups as $value)
                <option value="{{$value->value}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create User Account</button>
        </div>
    </div>
</form>
@endsection