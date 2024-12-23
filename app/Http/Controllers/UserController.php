<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function index(User $user): JsonResponse
    {
        return response()->json($user->all());
    }

    public function show(User $user, $id): JsonResponse
    {
        return response()->json($user->find($id));
    }

}
