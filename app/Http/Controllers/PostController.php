<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts;

        return Inertia::render('Dashboard/Blog/BlogIndex', ["posts" => $posts]);
    }
    //
    public function create()
    {

        // $tags = Tag::select('id', 'tag as name')->orderBy('tag')->get();
        $tags = Tag::orderBy('tag')->get();

        return Inertia::render('Dashboard/Blog/CreateBlog', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        // dd(auth()->user()->id);

        $validated = $request->validate([
            'title' => 'required|unique:posts,title|max:255',
            'slug' => 'required|unique:posts,slug|max:255',
            'tags' => 'required',
            'post' => 'required',
            'summary' => 'required',
        ]);

        $user = auth()->user()->id;

        $post = Post::create(
            [
                'user_id' => $user,
                'title' => $request->input('title'),
                'slug' => $request->input('slug'),
                'summary' => $request->input('summary'),
                'post' => $request->input('post'),
            ]
        );

        $tags = $request->input('tags');

        foreach ($tags as $tag) {
            $tagg = Tag::find($tag['id']);
            $post->tags()->attach($tagg);
            $post->save();
        }

        // $post->tags();


        return Redirect::route('post.index');

        // dd($request);
    }

    //  index() => shows student list
    // create() => creates a student using a form
    // store() => creates a student in the database
    // show() => shows a specific student
    // edit() => updates the student data using a form
    // update() => updates the student data using a form
    // destroy() => removes a particular student
}
