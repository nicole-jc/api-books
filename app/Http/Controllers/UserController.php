<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function index() {

        $users = User::orderBy('id')->get(); // Get registers from DB
    
        if (request()->wantsJson()) { // Verify if the request wants a Json
            return response()->json([$users, [
                [
                    'rel' => 'all',
                    'href' => url('/api/users'), // link to get all books
                    'method' => 'GET'
                ], [
                    'rel' => 'create',
                    'href' => url('/api/users'), // link to create a new book
                    'method' => 'POST'
                ], [
                    'rel' => 'show',
                    'href' => url('/api/users/{id}'), // link to show a book
                    'method' => 'GET'
                ], [
                    'rel' => 'update',
                    'href' => url('/api/users/{id}'), // link to edit a book
                    'method' => 'PUT'
                ], [
                    'rel' => 'delete',
                    'href' => url('/api/users/{id}'), // link to delete a book
                    'method' => 'DELETE'
                ]

            ]
        ]);
    }

        return view('users.users', ['users' => $users]);
    }

    public function store(UserRequest $request) {
        
    try {
        // Create new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // Web return
        if (!request()->wantsJson()) {
        return redirect()->route('register')->with('success', 'User registred successfully');
    }
        // API return
        return response()->json(['message' => 'User registred succesfully!'], 201);
    } 
        catch(Exception $e) {
        // Web return for errors
        if (!request()->wantsJson()) {
        return back()->withInput()->with('error', 'User not registered');
    }
        // API return for errors
        return response()->json(['error' => 'Register failed', 'message' => $e->getMessage()], 500);
}

}
    public function show(User $user) {

    if (request()->wantsJson()) {
        return response()->json([$user, [
            [
                'rel' => 'all',
                'href' => url('/api/users'), // link to get all users
                'method' => 'GET'
            ], [
                'rel' => 'create',
                'href' => url('/api/users'), // link to create a new user
                'method' => 'POST'
            ], [
                'rel' => 'show',
                'href' => url('/api/users/' . $user->id), // link to show a user
                'method' => 'GET'
            ],[
                'rel' => 'update',
                'href' => url('/api/users/' . $user->id), // link to edit a user
                'method' => 'PUT'
            ], [
                'rel' => 'delete',
                'href' => url('/api/users/' . $user->id), // link to delete a user
                'method' => 'DELETE'
            ]

        ]
    ]); // return json with $user data
}
    // return view with $user data
    return view('users.user', ['user' => $user]);
}

    public function update(UserRequest $request, User $user) {

    try {
        // Edit info in DB
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Web return
        if (!request()->wantsJson()){
            return redirect()->route('user.edit.view', $user->id)->with('success', 'User updated succesfully!');
        }

        // API return
        return response()->json(['message' => 'User updated succesfully!', 'user' => $user], 200);

    } catch (Exception $e) {
        // Web return for errors
        if (!request()->wantsJson()) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }

        // API return for errors
        return response()->json(['error' => 'Update failed', 'message' => $e->getMessage()], 500);
    }


}

    public function destroy(User $user) {

        $user->delete();

        // Web return
        if (!request()->wantsJson()) {
            return redirect()->route('users')->with('success', 'User succesfully deleted!');
        }
        // API return
        return response()->json(['message' => 'User succesfully deleted!'], 200);
    }

}