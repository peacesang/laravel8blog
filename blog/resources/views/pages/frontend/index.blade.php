@extends('layouts.home')

@section('content')
@foreach($articles as $article)
<div class="creatives-grid">
    <a href="/blog/{{$article->id}}">
    <img src="/images/{{$article->image}}" alt=" " class="img-fluid" />
    </a>
    <div class="p-mask img-thumbnail">
    <h4><a href="/blog/{{$article->id}}">{{$article->title}}</a></h4>
        <span class="let mt-3">{{$article->created_at}}</span>
        <hr>
        <p>{{$article->short_description}}</p>
    <a class="btn button-style-w3ls mt-4" href="/blog/{{$article->id}}">Read More</a>
    </div>
</div>
@endforeach


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