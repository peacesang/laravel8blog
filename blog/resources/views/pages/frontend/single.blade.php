@extends('layouts.home')

@section('content')

<div class="creatives-grid">
    <a href="">
    <img src="/images/{{$single->image}}" alt=" " class="img-fluid" />
    </a>
    <div class="p-mask img-thumbnail">
    <h4><a href="">{{$single->title}}</a></h4>
    By :: {{ $single->user->name }} on :: {{$single->category->name}} category <br>
        <span class="let mt-3">{{$single->created_at}}</span>
        <hr>
        <p>{{$single->description}}</p>
    
    </div>
</div>



<nav aria-label="Page navigation example">
    <ul class="pagination float-left mt-5">
        <li class="page-item">
            <a class="page-link" href="#">Previous</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="blog1.html">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="blog2.html">2</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="blog3.html">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="blog4.html">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="blog3.html">Next</a>
        </li>
    </ul>
</nav>
@endsection