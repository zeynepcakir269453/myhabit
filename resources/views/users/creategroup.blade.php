@extends('layouts.app')

@section('title', 'Create User Group')

@section('contents')
<h1 class="mb-0">Add Group</h1>
<hr />
<form action="{{ route('users.storegroup') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <input type="number" name="value" class="form-control" placeholder="Value">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <textarea class="form-control" name="description" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Create User Group</button>
        </div>
    </div>
</form>
@endsection