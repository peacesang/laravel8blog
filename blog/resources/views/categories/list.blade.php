@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @error('name')
                    {{ $message}}
                    @enderror

                    
                    <form action="{{route('categories.store')}}" method="POST">
                      <div class="form-group">
                        
                        <input type="text" class="form-control" id="email" placeholder="Enter category" name="name">
                      </div>
                      @csrf
                      <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>

                    <br>

                    <h2>List of all Categories</h2>
                                 
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>S.n</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->name}}</td>
                                <td>Edit
                                    

                                </td>
                                <td>
                                    delete
                                </td>
                            </tr>
                            @endforeach
                            
                            </tbody>
                        </table>

                        {{ $categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
