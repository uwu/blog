<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function update_avatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300, 300)->save(storage_path('app/public/uploads/avatars/' . $filename));

            $user = User::find(Auth::user()->id);
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', ['user' => Auth::user()]);
    }
}
