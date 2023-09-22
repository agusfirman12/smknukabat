<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Banner;
use App\Models\Teacher;
use App\Models\Announcement;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing.index',[
            'posts' => Post::paginate(4),
            'banner' => Banner::latest()->paginate(3),
            'announcement' => Announcement::latest()->paginate(3),
            'announcementFirst' => Announcement::latest()->take(1)->get()
        ]); 
    }

    public function sejarah(){
        return view('profile.sejarah');
    }

    public function visiMisi(){
        return view('profile.visiMisi');
    }

    public function organisasi(){
        return view('profile.organisasi');
    }
    
    public function pengajar(){
        $teacher = Teacher::all();
        return view('profile.pengajar',['teachers' => $teacher]);
    }

    public function extrakurikuler(){
        return view('profile.extrakurikuler');
    }

    public function jurusan(){
        return view('jurusan.jurusan');
    }

    public function berita($id){
        $post = Post::find($id);
        return view('berita.index',['post' => $post]);
    }

    public function allPost(){
        $post = Post::paginate(10);
        return view('berita.allPost',['posts' => $post]);
    }

    public function pengumuman($id){
        $announcement = Announcement::find($id);
        return view('pengumuman.index',['announcement' => $announcement]);
    }
}
