<?php

namespace App\Http\Controllers;

use App\Thread;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreThreadRequest;
use Auth;

class ThreadController extends Controller
{

    /**
     * ThreadController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $threads = Thread::select()->orderBy('created_at', 'desc')->withCount('posts')->paginate(15);

        return view('thread.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();

        return view('thread.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThreadRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadRequest $request)
    {
        $thread = Thread::create([
            "title" => $request->title,
            "category_id" => $request->category_id,
            "content" => $request->content,
            "user_id" => Auth::user()->id
        ]);

        return redirect()->route('thread.show', ['id' => $thread->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Thread $thread)
    {
        $posts = $thread->posts()->with('user')->get();

        return view('thread.show', compact('thread', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Thread $thread)
    {
        $this->authorize('manage-thread', $thread);
        $categories = Category::pluck('name', 'id')->all();

        return view('thread.edit', compact('thread', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        $this->authorize('manage-thread', $thread);
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->category_id = $request->category_id;
        $thread->update();

        return redirect()->route('thread.show', ['id' => $thread->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        $this->authorize('manage-thread', $thread);
        $thread->delete();

        return redirect()->route('index');
    }
}
