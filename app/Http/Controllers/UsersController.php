<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// 註冊成功自動登入需引用
use Auth;


class UsersController extends Controller
{   

    public function create() {
        return view('users.create');
    }

    public function show(User $user) {
        return view('users.show', compact('user'));
    }

    public function store(Request $request) {
        
        // 對接收到的數據進行驗證
        $this->validate($request, [
            'name'  => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        
        // 將用戶輸入的資訊存入資料庫
        $user = User::create([
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // 用戶註冊成功後，自動登入
        Auth::login($user);

        // 用戶註冊成功後，在頁面頂部顯示註冊成功的訊息
        session()->flash('success', '歡迎，您將在這裡開啟一段新的旅程。');

        return redirect()->route('users.show', [$user->id]);
    }

}
