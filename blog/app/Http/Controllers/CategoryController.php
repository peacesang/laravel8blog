<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $categories=Category::paginate(3);
        $i=1;
        return view('categories.list',compact('categories','i'));
        return view('categories.list');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:categories|min:3|max:10'

        ]);

        $category=new Category;
        $category->name=$request->name;

        $category->save();

        return redirect('/categories/list')->with('status','Category Added');
    }
}
