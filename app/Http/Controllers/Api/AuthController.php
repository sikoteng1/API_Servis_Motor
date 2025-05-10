<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'User not found'
            ], 404);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password salah'
            ], 401);
        }

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'message' => 'success',
            'user' => $user,
        ]);
    }


    function register(Request $request)
    {

        $request->validate([
            "name" => 'required',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|string|min:8'
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password), //untuk encrypt password
        ]);

        return response()->json([
            'message' => 'Berhasil Register',
        ]);
    }

    function logout(Request $request)
    {

        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Berhasil logout'
        ]);
    }

    public function showProfile()
    {
        return response()->json([
            'user' => auth()->user()
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'nullable|string|min:8',
        ]);

        // $status = Password::reset(); //----

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if(!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        /** @var \App\Models\User $user **/
        $user->save();

        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => $user,
        ]);
    }

    public function deleteProfile($id)
    {
        $user = User::find($id);
        $user->forceDelete();
        return response()->json([
            'message' => 'Profile deleted successfully',
        ]);
    }
}
