<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Users;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $articles=new Article;
        $articles=Article::with('category','user')->orderby('id','desc')->get();
        
        return view('pages.frontend.index',compact('articles'));
    }
    public function contact()
    {
        return view('pages.frontend.contact');
    }
    public function show($id)
    {
        $single=Article::with('category','user')->where('id',$id)->first(); //first because single data
        return view('pages.frontend.single',compact('single'));
        
    }

    public function category($id)
    {
        $articles=Article::with('category','user')->where('category_id',$id)->get(); //first because single data
        return view('pages.frontend.index',compact('articles'));
    }
}
