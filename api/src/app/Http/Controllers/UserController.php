<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        return response()->json(
            UserResource::make($user)
        );
    }

    public function index(Request $request)
    {
        $users = User::All();   //levelがmin以上max未満
        return response()->json(
            UserResource::collection($users)
        );
    }

    public function store(Request $request)
    {
        //validator();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return response()->json(['user_id'=>$user->id]);
    }

}
