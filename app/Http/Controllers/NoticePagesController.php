<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Main;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $main = Main::first();
        $about = About::first();
        $notices = Notice::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.notices', compact('notices','main','about'));
    }

    public function list()
    {
        $notices = Notice::all();
        return view('pages.notices.list', compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'big_image' => 'required|image',
            'small_image' => 'required|image',
            'description' => 'required|string',
        ]);

        $notices = new Notice;
        $notices->title = $request->title;
        $notices->description = $request->description;

        $big_file = $request->file('big_image');
        Storage::putFile('public/img/', $big_file);
        $notices->big_image = "public/storage/img/".$big_file->hashName();

        $small_file = $request->file('small_image');
        Storage::putFile('public/img/', $small_file);
        $notices->small_image = "public/storage/img/".$small_file->hashName();

        $notices->save();

        return redirect()->route('admin.notices.create')->with('success','New Notice Page Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       // dd($id);
        $main = Main::first();
        $about = About::first();
        $notices = Notice::find($id);
        return view('pages.notice-single', compact('notices','main','about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('pages.notices.edit', compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',

        ]);

        $notices = Notice::find($id);
        $notices->title = $request->title;
        $notices->description = $request->description;

        if($request->file('big_image')){
            $big_file = $request->file('big_image');
            Storage::putFile('public/img/', $big_file);
            $notices->big_image = "public/storage/img/".$big_file->hashName();
        }

        if($request->file('small_image')){
            $small_file = $request->file('small_image');
            Storage::putFile('public/img/', $small_file);
            $notices->small_image = "public/storage/img/".$small_file->hashName();
        }

        $notices->save();

        return redirect()->route('admin.notices.list')->with('success','Notice Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);
        @unlink(public_path($notice->big_image));
        @unlink(public_path($notice->small_image));
        $notice->delete();

        return redirect()->route('admin.notices.list')->with('success','Notice Deleted Successfully');
    }
}
