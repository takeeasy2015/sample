<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 進行身分認證需引用
use Auth;


class SessionsController extends Controller
{
    
    public function create() {
        return view('sessions.create');
    }

    public function store(Request $request) {
        $credentials = $this->validate($request, [
            'email'    =>  'required|email|max:255',
            'password' =>  'required'
        ]);
        
        if (Auth::attempt($credentials, $request->has('remember'))) {
            // 登入成功後的相關操作
            session()->flash('success', '歡迎回來');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            // 登入失敗後的相關操作
            session()->flash('danger', '很抱歉，您輸入的電子郵件或密碼不正確');
            return redirect()->back();
        }
    }

    public function destroy() {
        Auth::logout();
        session()->flash('success', '您已成功登出');
        return redirect('login');
    }

}
