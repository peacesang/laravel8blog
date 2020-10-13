@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Articles</div>
                @error('image')
                {{ $message}}
                @enderror

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <form action="/articles/{{ $article->id}}" method="post" enctype="multipart/form-data"> we can use both this is route url method below is route name method from route list --}}
                    <form action="{{route('articles.update',$article->id)}}" method="post" enctype="multipart/form-data">
                            <p>
                            Title: <input value="{{ $article->title}}" type="text" name="title" class="form-control">
                            </p>
                            <p>
                                    <img src="/images/{{ $article->image }}" class="img-fluid" width=150>{{$article->image}}
                               <br> Image: <input type="file" name="image" class="form-control">
                            </p>
                            <p>
                                Short Description:
                                 <textarea  name="short_description" id="" rows="3" class="form-control" >{{ $article->short_description}}</textarea>
                            </p>
                            <p>
                                 Description:
                                 <textarea  name="description" id="" rows="5" class="form-control" >{{ $article->description}}</textarea>
                            </p>
                            <p>
                                Category:
                                <select name= "category_id">
                                    {{-- @foreach($categories as $category) --}}
                                        @foreach(App\Models\category::all() as $category)
                                <option {{($article->category_id==$category->id)?"selected":""}} value="{{ $category->id}}">
                                        {{$category->name}}
                                </option>
                                    @endforeach
                                </select>
                            </p>
                            <p>
                                Status:
                                <select name="status">
                                    <option value="1" {{ ($article->status==1)?"selected":""}}>Published</option>
                                    <option value="0" {{ ($article->status==0)?"selected":""}}>Unpublished</option>
                                </select>
                            </p>
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Edit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
