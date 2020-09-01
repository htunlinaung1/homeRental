<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Paymenttype;

class PaymenttypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymenttypes=Paymenttype::all();
        // dd($categories);

        return view('backend.paymenttype.list',compact('paymenttypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.paymenttype.new');
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
            'name'=>['required','string','max:255','unique:paymenttypes'],
            
            
        ]);
        if($validator)
       {
        $name=$request->name;
       

        $paymenttype= new Paymenttype();
        $paymenttype->name=$name;
     
        $paymenttype->save();

        return redirect()->route('backside.paymenttype.index')->with('successMsg','New paymenttype is Added in your data');
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
        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $paymenttype=Paymenttype::find($id);
        return view('backend.paymenttype.edit',compact('paymenttype'));
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
       
       

      
       $paymenttype=Paymenttype::find($id);
       $paymenttype->name=$name;
      
       $paymenttype->save();

       return redirect()->route('backside.paymenttype.index')->with('successMsg','Existing Paymenttype is Updated in your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymenttype=Paymenttype::find($id);
        $paymenttype->delete();

        return redirect()->route('backside.paymenttype.index')->with('successMsg','Existing Paymenttype is DELETED in your data');
    }
}
