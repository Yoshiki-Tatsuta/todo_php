<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function loginhome()
    {

        $user = Auth::user();

        $folder = $user->folders()->first();

        if(is_null($folder)) {
            return view('loginhome');
        }

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
        
    }
}

    // public function index()
    // {
    //     // ログインユーザーを取得する
    //     $user = Auth::user();

    //     // ログインユーザーに紐づくフォルダを一つ取得する
    //     $folder = $user->folders()->first();

    //     // まだ一つもフォルダを作っていなければホームページをレスポンスする
    //     if (is_null($folder)) {
    //         return view('loginhome');
    //     }

    //     // フォルダがあればそのフォルダのタスク一覧にリダイレクトする
    //     return redirect()->route('tasks.index', [
    //         'id' => $folder->id,
    //     ]);
    // }