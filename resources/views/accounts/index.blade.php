@extends('layouts.app')

@section('title','Home Account')

@section('contents')
<div class="row justify-content-start">
<div  class="col-8">
    <h1>List Account</h1>
</div>
<div  class="col-4 justify-content-end">
    <a href="{{ route('accounts.create') }}" class="btn btn-primary">Add Account Account</a>
</div>
<hr /></div>
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
            <th>Group</th>
            <th>Category</th>
            <th>User</th>
            <th>Description</th>
            <th width="3%"></th>
            <th width="3%"></th>
            <th width="3%"></th>
        </tr>
    </thead>
    <tbody>
        @if($acc->count() > 0)
        @foreach($acc as $rs)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->name }}</td>
            <td class="align-middle">{{ $rs->groups }}</td>
            <td class="align-middle">{{ $rs->category }}</td>
            <td class="align-middle">{{ $rs->user }}</td>
            <td class="align-middle">{{ $rs->description }}</td>

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