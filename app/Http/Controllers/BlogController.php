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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); // We are not inside a class so we can't import the model hence we use the namespace/path
        //dd($categories);
        return view('blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate uses a key (column) and a value (constraint) pair in the array
         $request->validate([
            // 'category' =>'required|intager' // You can use a pipe or an array
            'category' => ['required', 'integer'], // The array looks more convinien
            'title' => ['required', 'max:255', 'min:2'], // When it comes to varchar you always have to add the max value
            'body' => ['required'],
            'status' => ['required', 'boolean'],
            'image' => ['required', 'image', 'max:3000']
         ]);

         // upload file
         $imagePath = $this->uploadFile($request);

         // Store Data
         $blog = new Blog();
         $blog->category_id = $request->category; // remember category is the name of the name for the select field
         $blog->image = $imagePath;
         $blog->title = $request->title;
         $blog->body = $request->body;
         $blog->status = $request->status;
         $blog->save();

         session()->flash('success', 'Your Blog has been created successfully!'); // flash only stays on one reload (has key and value)
         return redirect()->back();
    }

    public function uploadFile(Request $request)
    {
        if($request->hasFile('image')){
            $image = $request->file('image'); // We now have access to the image
            $imageName = $image->getClientOriginalName(); // getClientOriginalName() will extract the name of the file with its extention
            $image->move(public_path('uploads'), $imageName); // move takes the directory and file name, public_path('uploads') tinker will access the local path
            return $imagePath = 'uploads/'.$imageName; // we only need to store the child path in the database not the whole local path
         }
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
