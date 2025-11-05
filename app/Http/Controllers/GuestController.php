<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function guestIndex()
    {
        $blogs = Blog::all();
        return view('guests.home',['blogs' => $blogs]);
    }
    public function guestWelcome()
    {
        return view('guests.welcome');
    }
    public function guestBlogView($id)
    {
        $blog = Blog::findOrFail($id);
        return view('guests.blog', compact('blog'));
    }
}
