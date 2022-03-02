@extends('layouts.app');
@section('content')
    

    <div class="card col-5 mx-auto shadow">
        <div class="card-header bg-primary text-light">
            <h3>Add BLOG Post</h3>
        </div>
        <div class="card-body my-3">
            <form action="{{route('post.store')}}" method="get">
                @csrf
                <input type="text" name="title" placeholder="Blog Title" class="my-3 form-control">
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <textarea name="details" placeholder="details my-3 " class="my-3 form-control"></textarea>
                @error('details')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <button class="my-3 btn btn-primary w-100">Add blog post</button>
            </form>
        </div>
    </div>




@endsection