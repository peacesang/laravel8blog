<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
       $articles=new Article;
       //$articles=$articles::all();
       $articles=Article::with('category','user')->where('user_id',Auth::user()->id)->orderby('id','desc')->get(); //this is fastest query it is join query runs single time in database
        
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=new Category;
        $categories=$categories::all();
        
        //return $categories;
      return view('articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation 
        //insert process

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',

        ]);
        $article= new Article;
        $article->title=$request->title;
        $article->description=$request->description;
        $article->short_description=$request->short_description;
        $article->status=$request->status;
        $article->category_id=$request->category_id;
        $article->user_id= Auth::user()->id;
        $article->image=$request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $request->image->getClientOriginalName());


        $article->save();

        return redirect('/articles')->with('status','Record added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article=Article::find($id);
        return view('articles.edit',compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->has('image'))
        {
            $request->validate([

                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
    
            ]);
        }

        
        $article= Article::find($id);
        $article->title=$request->title;
        $article->description=$request->description;
        $article->short_description=$request->short_description;
        $article->status=$request->status;
        $article->category_id=$request->category_id;
        $article->user_id= Auth::user()->id;
       

        if($request->has('image'))
        {
            unlink('images/'.$article->image);

            $article->image=$request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $request->image->getClientOriginalName());

        }     


        $article->save();

        return redirect('/articles')->with('status','Record added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article=Article::find($id);
        unlink('images/'.$article->image);
        $article->delete();
        //return redirect('/articles')->with('status','record deleted'); //using url path from route table
        return redirect(route('articles.index'))->with('status','record deleted'); //using name path from route table both are correct



        
    }
}
