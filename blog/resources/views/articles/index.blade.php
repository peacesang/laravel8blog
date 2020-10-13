@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>List of all Categories</h2>
                                 
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Title</th>
                                <th>Images</th>
                                <th>Category</th>
                                <th>User</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td><img src="/images/{{ $article->image }}" class="img-fluid" width=150></td>
                                <td>{{$article->category->name}}</td>
                                <td>{{$article->user->name}}</td>
                                <td>{{$article->status_label}}</td>
                                <td>
                                    {{-- <form action="/articles/{{$article->id}}" method="post"> using  url --}}
                                        <form action="{{ route('articles.destroy',$article->id)}}" method="post">  {{-- <br> using name but both correct --}}
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">    
                                        </form>



                                        {{-- @if($article->user_id==Auth::user()->id) using content filter delete appear if u are owner of that article --}}
                                      {{--   <form action="{{ route('articles.destroy',$article->id)}}" method="post"> 
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">    
                                        </form> --}}
                                        {{-- @endif --}}
                                        <br>

                                   <a class="btn btn-danger btn-sm"  role="button" href="{{route('articles.edit',$article->id)}}">edit</a>
                                </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
