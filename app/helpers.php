<?php

use App\Models\User;

function validateAndStoreEmail($request)
{
    $request->validate([
        'email' => 'required|email|unique:users',
    ]);

    User::create([
        'email' => $request->email,
    ]);

    return response()->json(['message' => 'Email stored successfully'], 200);
}


