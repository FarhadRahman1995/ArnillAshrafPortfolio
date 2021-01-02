<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Main;
use App\Models\Notice;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialMediaPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::first();
        $about = About::first();
        $notices = Notice:: orderBy('created_at', 'desc')->get()->take(3);
        $socialmedias = SocialMedia::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.socialmedia', compact('socialmedias','main','notices','about'));
    }

    public function list()
    {
        $socialmedias = SocialMedia::all();
        return view('pages.socialmedia.list', compact('socialmedias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.socialmedia.create');
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
            'iframe' => 'required|string',
        ]);

        $socialmedias = new SocialMedia;
        $socialmedias->title = $request->title;
        $socialmedias->iframe = $request->iframe;

        $socialmedias->save();

        return redirect()->route('admin.socialmedia.create')->with('success','Social Media Page Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socialmedia = SocialMedia::find($id);
        return view('pages.socialmedia.edit', compact('socialmedia'));
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
            'iframe' => 'required|string',

        ]);

        $socialmedias = SocialMedia::find($id);
        $socialmedias->title = $request->title;
        $socialmedias->iframe = $request->iframe;


        $socialmedias->save();

        return redirect()->route('admin.socialmedia.list')->with('success','Social Media Page Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socialmedia = SocialMedia::find($id);
        $socialmedia->delete();

        return redirect()->route('admin.socialmedia.list')->with('success','Social Media Page Deleted Successfully');
    }
}
