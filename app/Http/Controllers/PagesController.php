<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Main;
use App\Models\Notice;
use App\Models\SocialMedia;
use App\Models\HomePosts;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $about = About::first();
        $notices= Notice::orderBy('created_at', 'desc')->get()->take(3);;
        $socialmedias= SocialMedia::all();
        $blogs = Blog::all();
        $homeposts = HomePosts::first();
        $contacts = Contact::all();
        return view('pages.index', compact('main','about', 'notices', 'socialmedias','blogs','contacts','homeposts'));
    }
    public function dashboard(){
        return view('pages.dashboard');
    }
}
