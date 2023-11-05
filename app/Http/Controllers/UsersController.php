<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.users.index");
    }

    public function auth(Request $request)
    {
       
        $username = $request->input("username");
        $password = $request->input("password");
        $users = User::all();
        foreach ($users as $user) {
            if ($user->username == $username && $user->password == $password) {
                if ($user->enable != 1) {
                $error = "الحساب معطل";
                    return view('pages.welcome', ['error' => $error,'username'=> $username,'password'=> $password]);
                } else {
                    return redirect()->route("homepage");
                }
            }else{
                $error = "اسم المستخدم او كلمة المرور غير صحيحة";
                return view('pages.welcome',['error'=> $error,'username'=> $username,'password'=> $password]);
            }
        }
    }
    public function create()
    {
        //
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
