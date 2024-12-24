<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {

        $users = User::all();
        return view('pages.users', ['users' => $users]);
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'role' => 'required|in:admin,user,editor',
        ]);

        $user->role = $request->role;
        $user->save();

        return redirect()->back()->with('success', 'نقش کاربر با موفقیت تغییر یافت.');
    }

}
