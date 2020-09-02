<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Room;
use App\Category;
use App\City;
use App\User;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $rooms=Room::all();
       $toprooms=Room::all()->random(4);
       // dd($toprooms);
       $latestrooms=Room::latest()->take(4)->get();
       // $reviewitems=Item::all()->random(3);

      


       return view('frontend.index',compact('rooms','toprooms','latestrooms'));
    }
    public function property()
    {
       $rooms=Room::all();

       return view('frontend.property',compact('rooms'));
    }
      public function about()
    {

       return view('frontend.about');
    }
      public function contact()
    {

       return view('frontend.contact');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
     public function roomcreate()
    {

        $categories = Category::all();
        $cities = City::all();
        return view('frontend.room',compact('categories','cities'));

         

       
    }
    public function detail($id)
    {
           $roomdetails=Room::where('id',$id)->get();

        

         return view('frontend.detail',compact('roomdetails'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = $request->validate([
        //     'name'  => ['required', 'string', 'max:255',],
        // ]);

        // if ($validator) {
        //     $name = $request->name;
        //     $price = $request->price;
            
        //     $description = $request->description;
        //     $city_id = $request->city_id;
        //     $category_id = $request->category_id;
           



        //     // FILE UPLOAD

        //     if ($request->hasfile('images')) 
        //     {
        //         $i=1;
        //         foreach($request->file('images') as $image)
        //         {
        //             $imagename = time().$i.'.'.$image->extension();
        //             $image->move(public_path('images/rooms'), $imagename);  
        //             $data[] = 'images/rooms/'.$imagename;
        //             $i++;
        //         }
        //     }
        //     // $photoString = implode(',', $data);

            

        //     $room= new Item();
           
        //     $room->name = $name;
        //     $room->photo = json_encode($data);
        //     $room->price = $price;
           
        //     $room->description = $description;
        //     $room->category_id = $category_id;
        //     $room->city_id = $city_id;
           
        //     $room->save();

        //     return redirect()->route('frontend.index')->with("successMsg", "New Item is ADDED in your data");


        // }else{
        //     return Redirect::back()->withErrors($validator);
        // }

    }

    
     public function roomstore(Request $request)
    {
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
        //
    }

   
}
