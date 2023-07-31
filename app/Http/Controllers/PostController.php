<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    //
    public function create()
    {
        return Inertia::render('Dashboard/Blog/CreateBlog');
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
