<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $attempt = Auth::attempt([
            'email' =>$request->email,
            'password' =>$request->password,
        ]);

        if( ! $attempt){
            return redirect('/admin-coba');
        }

        $user = Auth::user();

        if($user->level === 'admin') {
            return redirect('/admin-coba');
        } else {
            return redirect('/user');
        }
    }

    public function dashboard()
    {
        $user = Auth::user();
        $userAccounts = User::where('level', 'user')->get();
        return view('admin.dashboard')->with('user', $user)->with('userAccounts', $userAccounts);
    }

    public function createForm()
    {
        return view('admin.create_form');
    }

    public function deleteUser($id){
        User::destroy($id);
        return redirect()->back()->with('deleteUser','Data berhasil dihapus !');
    }
}
