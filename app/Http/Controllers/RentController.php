<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\City;
use App\Room;
use App\User;
use App\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         $rents=Rent::all();
     

        return view('backend.rent.list',compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  dd($id);
        // $rent=Rent::find($id);
      
               
        // $status=2;
        //     $rent= new Rent();
        //     $rent->status=$status;
        //     dd($status);
        //     $rent->save();

        //     return redirect()->route('backside.rent.index');
    }

    public function confirm($id)
    {
        
        $rent=Rent::find($id);
        $rent->status=1;
      
               
       
            $rent->save();

            return redirect()->route('backside.rent.index');
    }
     public function cancel($id)
    {
        
        $rent=Rent::find($id);
        $rent->status=2;
      
               
       
            $rent->save();

            return redirect()->route('backside.rent.index');
    }
}
