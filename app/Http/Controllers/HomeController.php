<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $threads = Thread::select()->orderBy('created_at', 'desc')->take('15')->with('user')->withCount('posts')->get();
        $categories = Category::withCount('threads')->get();

        return view('home', compact('categories', 'threads'));
    }
}
