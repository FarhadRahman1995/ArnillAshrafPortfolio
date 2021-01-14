<?php

namespace App\Http\Controllers;

use App\Models\HomePosts;
use Illuminate\Http\Request;

class HomePostsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeposts = HomePosts::first();
        return view('pages.homeposts', compact('homeposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title1' => 'required|string',
            'title2' => 'required|string',
            'title3' => 'required|string',
            
        ]);

        $homeposts = HomePosts::first();
        $homeposts->title1 = $request->title1;
        $homeposts->title2 = $request->title2;
        $homeposts->title3 = $request->title3;

        if($request->file('bc_img1')){
            $img_file = $request->file('bc_img1');
            $img_file->storeAs('public/img/','bc_img1.' . $img_file->getClientOriginalExtension());
            $homeposts->bc_img1 = 'public/storage/img/bc_img1.' . $img_file->getClientOriginalExtension();
        }
        if($request->file('bc_img2')){
            $img_file = $request->file('bc_img2');
            $img_file->storeAs('public/img/','bc_img2.' . $img_file->getClientOriginalExtension());
            $homeposts->bc_img2 = 'public/storage/img/bc_img2.' . $img_file->getClientOriginalExtension();
        }
        if($request->file('bc_img3')){
            $img_file = $request->file('bc_img3');
            $img_file->storeAs('public/img/','bc_img3.' . $img_file->getClientOriginalExtension());
            $homeposts->bc_img3 = 'public/storage/img/bc_img3.' . $img_file->getClientOriginalExtension();
        }

        $homeposts->save();

        return redirect()->route('admin.homeposts')->with('success', "HomePosts in Main Page data has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
