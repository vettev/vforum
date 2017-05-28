<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Role;
use Illuminate\Http\Response;
use Config;

class AdminController extends Controller
{

    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        $this->middleware('can:admin-access');
    }

    /**
     * Display an admin panel.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Manage categories
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category()
    {
        $categories = Category::paginate(15);

        return view('admin.category', compact('categories'));
    }

    /**
     * Manage users
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user()
    {
        $users = User::paginate(15);
        $roles = Role::all();

        return view('admin.user', compact('users', 'roles'));
    }

    /**
     * Settings of forum
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function settings()
    {
        return view('admin.settings');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function updateSettings(Request $request)
    {
        Config::set('app.name', $request->title);

        return redirect()->route('admin.settings');
    }
}
