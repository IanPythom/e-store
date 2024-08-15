<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // the all method return a collection
        # $blog = Blog::all();

        // The find method takes a parameter which is the identifier
        # $blog = Blog::find(2);
        # returns the first value
        # $blog = Blog::first();

        // BTW these are eloquent queries
        # $blog = Blog::all();

        // Raw queries use DB instance initialization
        # $blog = DB::select('SELECT * FROM blogs'); //->get()

        // ADDING DATA TO THE DATABASE
        # $blog = new Blog(); // This creates an instance of our model
        # $blog -> title = '2 this is a new title';
        # $blog -> body = '2 this is a new body';
        # $blog -> status = 0;
        # $blog -> save();

        // UPDATING DATA IN THE DATABASE
        # $blog = Blog::find(1);
        # //dd($blog);
        # $blog -> title = 'this is a new title and its awesome';
        # $blog -> body = 'this is a new body its just as awesome';
        # $blog -> status = 1;
        # $blog -> save();

        // FINDING VALUES FROM THE DATABASE
        # $blog = Blog::where('status', '=', 1)->where('id', '=', 2)->get();

        // HOW TO CHAIN MULTIPLE WHERE CONDITIONS (Using Arrays)
        // Note array uses the equal and arrow
        #$blog = Blog::where(['status' => 0, 'id' =>3])->get();

        // DELETE DATA
        # $blog = Blog::find(2);
        # $blog->delete();
        // findOrFail method is case sensitive
        # $blog = Blog::findOrFail(2); // to return users to the 404 page incase the data doesnt exist
        # $blog->delete();

        //dd($blog); // dd means dump and die. debugging tool that output the value of the given variable then immediately stop the execution of the script.
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
