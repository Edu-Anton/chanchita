<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd($user);
        
        return view('admin.profiles.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $edit_user = $user->select('id', 'name', 'lastname', 'avatar', 'phone', 'facebook', 'twitter')->first();
        // dd($edit_user);s
        return view('admin.profiles.edit', compact('edit_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        // dd($user);
        // $user->update($request->all());

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;

        if ($request->hasFile('avatar'))
        {
            $user->avatar = $request->file('avatar')->store('public');
        }

        $user->save();
        // $user->twitter = $request->twitter;
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
