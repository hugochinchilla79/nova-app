<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        $userArray = $users->map(function($user){
            return [
                'name' => $user->name,
                'date' => $user->created_at->format('Y-m-d')
            ];
        });

        return response()->json([
            'users' => $userArray
        ]);
    }
}
