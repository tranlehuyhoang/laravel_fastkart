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
        return view('admin.user.all-users', compact('users'));
    }



    public function create()

    {
        return view('admin.user.user-create');
    }
    public function edit(User $user)

    {
        return view('admin.user.user-edit', compact('user'));
    }


    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'image' => 'image',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required'
        ]);

        // Upload and save the image
        if ($request->hasFile('image')) {
            $avatarfile = $request->file('image');
            $avatarname = time() . '_' . $avatarfile->getClientOriginalName();
            $avatarfile->move(public_path('avatar'), $avatarname);
            $data['image'] = 'avatar/' . $avatarname;
        }

        $user = User::create($data);

        // Uncomment the line below if you want to log the user in after registration
        // auth()->login($user);

        return redirect('admin/user');
    }

    public function update(Request $request, User $user)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'image' => 'image',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        // Upload and save the image
        if ($request->hasFile('image')) {
            $avatarFile = $request->file('image');
            $avatarName = time() . '_' . $avatarFile->getClientOriginalName();
            $avatarFile->move(public_path('user'), $avatarName);
            $data['image'] = 'user/' . $avatarName;
        }

        $user->update($data);

        return redirect('admin/user');
    }

    public function destroy(User $user)
    {

        $user->delete();

        return redirect('admin/user');
    }
}
