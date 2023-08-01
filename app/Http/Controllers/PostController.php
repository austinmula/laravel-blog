<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function create()
    {

        $tags = Tag::select('id', 'tag as text')->orderBy('text')->get();

        return Inertia::render('Dashboard/Blog/CreateBlog', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        dd($request);
    }

    //  index() => shows student list
    // create() => creates a student using a form
    // store() => creates a student in the database
    // show() => shows a specific student
    // edit() => updates the student data using a form
    // update() => updates the student data using a form
    // destroy() => removes a particular student
}
