<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $acc= Accounts::orderBy('created_at','DESC')->get();
        return view('accounts.index',compact('acc'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      /**  $profiles= Profiles::orderBy('created_at','DESC')->get();
       * $groups  = Groups::orderBy('created_at','DESC')->get(); */

        return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}