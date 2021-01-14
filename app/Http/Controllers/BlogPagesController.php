<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Main;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $main = Main::first();
        $about = About::first();
        $notices = Notice:: orderBy('created_at', 'desc')->get()->take(3);
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.blog', compact('blogs','notices','main','about'));
    }

    public function list()
    {
        $blogs = Blog::all();
        return view('pages.blog.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blog.create');
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

        $blogs = new Blog;
        $blogs->title = $request->title;
//        $blogs->user = $request->user;
        $blogs->description = $request->description;

        $big_file = $request->file('big_image');
        Storage::putFile('public/img/', $big_file);
        $blogs->big_image = "public/storage/img/".$big_file->hashName();

        $small_file = $request->file('small_image');
        Storage::putFile('public/img/', $small_file);
        $blogs->small_image = "public/storage/img/".$small_file->hashName();

        $blogs->save();

        return redirect()->route('admin.blogs.create')->with('success','New Blog Page Created Successfully');
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
        $notices = Notice:: orderBy('created_at', 'desc')->get()->take(3);
        $blog = Blog::find($id);
        return view('pages.blog-single', compact('blog','notices','main','about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pages.blog.edit', compact('blog'));
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

        $blogs = Blog::find($id);
        $blogs->title = $request->title;
        $blogs->description = $request->description;

        if($request->file('big_image')){
            $big_file = $request->file('big_image');
            Storage::putFile('public/img/', $big_file);
            $blogs->big_image = "public/storage/img/".$big_file->hashName();
        }

        if($request->file('small_image')){
            $small_file = $request->file('small_image');
            Storage::putFile('public/img/', $small_file);
            $blogs->small_image = "public/storage/img/".$small_file->hashName();
        }

        $blogs->save();

        return redirect()->route('admin.blogs.list')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        @unlink(public_path($blog->big_image));
        @unlink(public_path($blog->small_image));
        $blog->delete();

        return redirect()->route('admin.blogs.list')->with('success','Blog Deleted Successfully');
    }
}
