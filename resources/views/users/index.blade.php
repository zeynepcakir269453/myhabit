@extends('layouts.app')

@section('title','Home User')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1>List Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User Account</a>
</div>
<hr/>
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Group</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @if($users->count() > 0)
                @foreach($users as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->profile }}</td>
                        <td class="align-middle">{{ $rs->group }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products.show', $rs->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                                <a href="{{ route('products.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">User not found</td>
                </tr>
            @endif
        </tbody>
</table>
@endsection