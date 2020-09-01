<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $categories=Category::all();
        // dd($categories);

        return view('backend.category.list',compact('categories'));

          

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.category.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
            'name'=>['required','string','max:255','unique:categories'],
            
            
        ]);
        if($validator)
       {
        $name=$request->name;
       

        $category= new Category();
        $category->name=$name;
     
        $category->save();

        return redirect()->route('backside.category.index')->with('successMsg','New category is Added in your data');
        }
        else
        {
            return redirect::back()->withErrors($validator);
        }
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
        $category=Category::find($id);
        return view('backend.category.edit',compact('category'));
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
        
       $name=$request->name;
       
       

      
       $category=Category::find($id);
       $category->name=$name;
      
       $category->save();

       return redirect()->route('backside.category.index')->with('successMsg','Existing Category is Updated in your data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();

        return redirect()->route('backside.category.index')->with('successMsg','Existing Category is DELETED in your data');
    }
}
