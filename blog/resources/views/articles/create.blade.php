@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Articles</div>
                @error('image')
                {{ $message}}
                @enderror

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                            <p>
                                Title: <input type="text" name="title" class="form-control">
                            </p>
                            <p>
                                Image: <input type="file" name="image" class="form-control">
                            </p>
                            <p>
                                Short Description:
                                 <textarea  name="short_description" id="" rows="3" class="form-control" ></textarea>
                            </p>
                            <p>
                                 Description:
                                 <textarea  name="description" id="" rows="5" class="form-control" ></textarea>
                            </p>
                            <p>
                                Category:
                                <select name= "category_id">
                                        {{-- @foreach(App\Models\category::all() as $category) --}}
                                        @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </p>
                            <p>
                                Status:
                                <select name="status">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </p>
                            @csrf
                            <input type="submit" value="Add" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
