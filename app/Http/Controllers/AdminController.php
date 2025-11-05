<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // 
    public function login(Request $request)
    {
        //validation
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        if (auth()->attempt(['name' => $data['name'], 'password' => $data['password']]))
        {
            $request->session()->regenerate();
            return redirect()->route('admin.home');
        }
        return back()->withErrors([
            'name'=>'not found',
        ]);
    }
    //used to create an account but this app only has one admin
    /*
    public function register(Request $request)
    {
        //validation
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);
        $admin = Admin::create($data);
        auth()->login($admin);
        return redirect()->route('admin.home');
    }
    */
    
    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public function showLogin()
    {
        return view('admin.login');
    }
    public function adminIndex()
    {
        $blogs = Blog::all();
        return view('admin.home', ['blogs' => $blogs]);
    }
    public function showAdd()
    {
        return view('admin.addblog');
    }
    public function createBlog(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $data['title'] = strip_tags($data['title']);
        $data['body'] = strip_tags($data['body']);
        $data['user_id'] = auth()->id();
        Blog::create($data);
        return redirect()->route('admin.home');
    }
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.home');
    }
    public function showEdit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.editblog', compact('blog'));
    }
    public function edit(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $blog = Blog::findOrFail($id);
        $blog->update([
            'title' => strip_tags($data['title']),
            'body' => strip_tags($data['body']),
        ]);
        return redirect()->route('admin.home');
    }
}
