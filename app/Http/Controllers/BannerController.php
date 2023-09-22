<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banner.index',['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'sub_title' => 'required|max:255',
            'photo' => 'required|image|file|max:2048'
        ]);

        $validatedData['photo'] = $request->file('photo')->store('banner-image');

        Banner::create($validatedData);
        
        return redirect('/admin/banner')->with('success', 'Banner Baru Berhasil Di Upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        return view('admin.banner.show ', ['banner' => $banner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit',['banner' =>$banner]);
    }

    /**
     * Update the specified resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
        ]);

        Banner::where('id',$banner->id)->update($validatedData);
        
        return redirect('/admin/banner')->with('success', 'Banner Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        Banner::destroy($banner->id);
        
        return redirect('/admin/banner')->with('success', 'Banner Berhasil Di hapus');
    }
}
