<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::where('user_id', auth()->user()->id)->get();
        return view('admin.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug'  => 'required|unique:posts',
            'photo' => 'required|image|file|max:1024',
            'post_fill' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->post_fill, 100));

        $validatedData['photo'] = $request->file('photo')->store('post-image');

        Post::create($validatedData);

        return redirect('/admin/post')->with('success', 'Berita Barus Berhasil Di upload!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.post.edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'photo' => 'required|image|file|max:1024',
            'post_fill' => 'required'
        ];

        if($request->slug !=  $post->slug){
            $rules['slug'] = 'required|unique:posts';
        } 

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->post_fill, 100));

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('post-image');
        }

        Post::where('id',$post->id)->update($validatedData);
        
        return redirect('/admin/post')->with('success', 'Banner Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        
        return redirect('/admin/post')->with('success', 'Berita Berhasil Di hapus');
    }
}
