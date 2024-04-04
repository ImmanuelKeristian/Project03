<?php

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validatedData = validator($request->all()), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|string|confirmed',
            'role' => required|string   
        ],[]->validate();
        $user = new User($validatedData);
        $user->save();
        return redirect(route('user.list'));
    }