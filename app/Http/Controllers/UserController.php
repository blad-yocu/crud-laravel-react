<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class UserController extends Controller
{

    public function index()
    {
        return User::paginate();
    }


    public function store(Request $request)
    {
        $user = User::create($request->only('name', 'last_name', 'email') + ['password' => Hash::make($request->input('password'))]);
        return response($user, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        return User::find($id);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->only('name', 'last_name', 'email'));
        return response($user, Response::HTTP_ACCEPTED);
    }


    public function destroy($id)
    {
        User::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
