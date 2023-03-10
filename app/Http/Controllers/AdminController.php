<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userAccounts = User::where('level', 'user')->get();
        return view('admin-coba.index')->with('user', $user)->with('userAccounts', $userAccounts);
    }
    
    public function edit($id){

        $user = User::findOrFail($id);
        return view('admin-coba.edit')->with(['user'=> $user]);
    }
    
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('deleteUser','Data berhasil dihapus !');
    }
}
