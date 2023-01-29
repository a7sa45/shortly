<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('profile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $videos = Video::orderByDesc('created_at')->get();
        return view('home', ['videos' => $videos]);
    }

    public function profile($username)
    {
        $username = User::all()->where('username', $username)->first();
        if($username == null)
        {
            abort(404);
        }

        //$shortcuts = Shortcut::all()->where('user_id', $username->id);
        //$likes = Shortcut::whereLikedBy($username->id)->with('likeCounter')->get();
        //$comment = Shortcut::
        //$comments = Comment::all()->where('user_id', $username->id);
        return view('profile', ['username' => $username]);
    }
}
