<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

//navigation routes for guests
Route::get('/', [GuestController::class, 'guestWelcome']);
Route::get("/home", [GuestController::class, 'guestIndex']);
Route::get('/blog/{id}',[GuestController::class, 'guestBlogView'])->name('guest.blogview');

//navigation routes for admins
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('/admin/home', [AdminController::class, 'adminIndex'])->name('admin.home');
//Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/addblog', [AdminController::class, 'showAdd'])->name('admin.add');
Route::post('/admin/addblog', [AdminController::class, 'createBlog'])->name('admin.add.submit');
Route::get('/admin/editblog/{id}', [AdminController::class, 'showEdit'])->name('admin.edit');
Route::put('/admin/editblog/{id}', [AdminController::class, 'edit'])->name('admin.edit.submit');
Route::delete('/admin/deleteblog/{id}', [AdminController::class, 'delete'])->name('admin.delete');