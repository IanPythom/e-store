<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // For using RAW Queries

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ONE TO ONE RELATIONSHIP
        #==========================
        // Return the object with its relation object (belongsTo)
        # $blog = Blog::all();
        # $category = $blog->category;
        # return $blog;

        // Fetching data with its categories
        // NOTE : all() -> is a static method and cannot be used in a chaining way
        # $blog = Blog::with('category')->get();
        # return $blog;

        // Fetching data with its categories
        // NOTE : all() -> is a static method and cannot be used in a chaining way
        # $blog = Blog::with('category')->get();
        # return $blog;

        // Running a loop on the collection maybe we want only the titles of the blog
        // This is a continuation of our 1 to 1 relationship
        # $blogs = Blog::with('category')->get();
        # foreach($blogs as $blog)
        # {
        #     echo $blog->title.' & '.$blog->category->name;
        #     echo '</br>';
        # }

        // ONE TO MANY RELATIONSHIP
        #==========================
        # $category = Category::find(1);
        # return $category->blogs;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
