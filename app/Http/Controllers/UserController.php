<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profiles;
use App\Models\Groups;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users= User::orderBy('created_at','DESC')->get();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profiles= Profiles::orderBy('created_at','DESC')->get();
        $groups  = Groups::orderBy('created_at','DESC')->get();

        return view('users.create',compact('profiles','groups'));
    }

    public function createprofile()
    {
        return view('users.createprofile');
    }

    public function creategroup()
    {
        return view('users.creategroup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('users')->with('success','User account added successfully'); 
    }

    public function storeprofile(Request $request)
    {
        Profiles::create($request->all());
        return redirect()->route('users')->with('success','Profile added successfully'); 
    }

    public function storegroup(Request $request)
    {
        Groups::create($request->all());
        return redirect()->route('users')->with('success','Group added successfully'); 
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user= User::findOrFail($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user= User::findOrFail($id);

        $profiles= Profiles::orderBy('created_at','DESC')->get();
        $groups  = Groups::orderBy('created_at','DESC')->get();

        return view('users.edit',compact('user','profiles','groups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user= User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users')->with('success','User account updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user= User::findOrFail($id);
        $user->delete();
        return redirect()->route('users')->with('success','User deleted successfully');

    }
}