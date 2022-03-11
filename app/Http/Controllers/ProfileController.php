<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function storedescription(ProfileRequest $request)
    {
        // Get current user
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        // Fill user model
        $user->fill([
            'description' => $request->description,
            'languages' => $request->languages
        ]);

        // Save user to database
        $user->save();

        return redirect(route('profile'));
    }

}
