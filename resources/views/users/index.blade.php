@extends('layouts.app')

@section('title','Home User')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1>List Users</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Add User Account</a>
</div>
<hr />
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
            <th width="3%"></th>
            <th width="3%"></th>
            <th width="3%"></th>
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
                <a href="{{ route('users.show', $rs->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $rs->id) }}" method="POST" type="button"
                    onsubmit="return confirm('Delete?')">
                    @csrf
                    @method('DELETE')
                    <button><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
            <td class="align-middle">
                <a href="{{ route('users.edit', $rs->id) }}"><i class="fa fa-tint" aria-hidden="true"></i></a>
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