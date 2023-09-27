<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc('id')->get();
        return view('admin.all-users', compact('users'));
    }



    public function create()

    {
        return view('admin.user-create');
    }
    public function store(Request $request)

    {
        // dd($request);

    }

    // public function edit(Category $category)
    // {
    // }

    // public function update(Request $request, $id)
    // {
    // }

    // public function destroy(Category $category)
    // {
    // }
}
