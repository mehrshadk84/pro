<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'))->with(['panel_title' => 'لیست کاربران']);
    }
    public function create()
    {
        return view('admin.user.create')->with(['panel_title' => 'ایجاد کاربر جدید']);
    }
    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem instanceof User) {
                $userItem->delete();
                return redirect()->route('admin.users.list')->with('user_deleted', true);
            }
        }
    }
    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if ($userItem instanceof User) {
                return view('admin.user.edit', compact('userItem'))->with(['panel_title' => 'ویرایش کاربر']);
            }
        }
    }
    public function update(UserRequest $userRequest, $user_id)
    {
        $inputs = request()->except('_token');
        if (empty(request()->input('password'))) {
            unset($inputs['password']);
        }
        $userItem = User::find($user_id);
        $userItem->update($inputs);
        return redirect()->route('admin.users.list')->with('user_edited', true);
    }
    public function admin()
    {
        return view('layouts.admin.admin');
    }
    public function store(UserRequest $userRequest)
    {
        $user_data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'password' => request()->input('password'),
            'role' => request()->input('role'),
            'wallet' => request()->input('wallet'),
        ];
        $new_user_object = User::create($user_data);
        if ($new_user_object instanceof User) {
            return redirect()->route('admin.users.list')->with('success', true);
        }
    }
}
