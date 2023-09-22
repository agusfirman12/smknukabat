<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Post;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }
        
        return back()->with('loginError', 'login failed!');
    }

    public function dashboard(){
        $teachres =Teacher::all();
        $allTeacher = Teacher::count();
        $posts = Post::all();
        $allPost = Post::count();
        $allAnnouncement = Announcement::count();

        return view('admin.dashboard.index',[
            'teachers' => $teachres, 
            'posts' => $posts,
            'allPost' => $allPost,
            'allTeacher' => $allTeacher,
            'allAnnouncement' => $allAnnouncement
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
