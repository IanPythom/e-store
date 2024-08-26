@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="card p-2">
        <div class="card-header mt-2">
            <h3>Create Blog</h3>
        </div>

        <div class="cardbody">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @if (session()->has('success')) {{-- has method checks for the key --}}
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form class="ml-3" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <code> {{ $message }} <code>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" id="" class="form-control">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('category'))
                        <code>{{ $errors->first('category') }}</code>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control" id="" name="title">
                    @error('title')
                        <code>{{ $message }}</code>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="">Body</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                    @error('body')
                        <code>{{ $message }}</code>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Show</option>
                        <option value="0">Hide</option>
                    </select>
                    @error('status')
                        <code>{{ $message }}</code>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
