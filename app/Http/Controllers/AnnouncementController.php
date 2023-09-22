<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Announcemenets = Announcement::where('user_id', auth()->user()->id)->get();
        return view('admin.pengumuman.index',['Announcements' => $Announcemenets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.create');
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
            'photo' => 'required|image|file|max:1024',
            'annoucment_fill' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['photo'] = $request->file('photo')->store('announcement-image');

        Announcement::create($validatedData);

        return redirect('/admin/announcement')->with('success', 'Pengumuman Baru Berhasil Di upload!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('admin.pengumuman.show',['announcement' => $announcement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('admin.pengumuman.edit',['announcement' => $announcement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'photo' => 'image|file|max:1024',
            'annoucment_fill' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('announcement-image');
        }

        Announcement::where('id',$announcement->id)->update($validatedData);

        return redirect('/admin/announcement')->with('success', 'Pengumuman Berhasil Di update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        Announcement::destroy($announcement->id);
        
        return redirect('/admin/announcement')->with('success', 'Berita Berhasil Di hapus');
    }
}
