<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('admin.users.index', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect()->to('/admin/users')->with('success', 'User deleted!');
    }
}
