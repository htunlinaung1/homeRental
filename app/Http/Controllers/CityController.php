<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities=City::all();
        // dd($categories);

        return view('backend.city.list',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.city.new');
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
            'name'=>['required','string','max:255','unique:cities'],
            
            
        ]);
        if($validator)
       {
        $name=$request->name;
       

        $city= new City();
        $city->name=$name;
     
        $city->save();

        return redirect()->route('backside.city.index')->with('successMsg','New city is Added in your data');
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
            $city=City::find($id);
        return view('backend.city.edit',compact('city'));
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
       
       

      
       $city=City::find($id);
       $city->name=$name;
      
       $city->save();

       return redirect()->route('backside.city.index')->with('successMsg','Existing City is Updated in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
             $city=City::find($id);
        $city->delete();

        return redirect()->route('backside.city.index')->with('successMsg','Existing City is DELETED in your data');
    }
}
