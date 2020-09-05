<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Room;
use App\Category;
use App\City;
use App\User;
use App\Paymenttype;
use App\Rent;



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

       $cities=City::all();
       $categories=Category::all();



      


       return view('frontend.index',compact('rooms','toprooms','latestrooms','cities','categories'));
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

    public function rent()
    {
       $rents=Rent::all();

       $users=Rent::where('user_id','=',Auth::user()->id)->get();


       return view('frontend.history',compact('users'));
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
          // $roomdetails=Room::where('id',$id)->get();
        $roomdetail=Room::find($id);
         $paymenttypes = Paymenttype::all();

        

         return view('frontend.detail',compact('roomdetail','paymenttypes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $validator = $request->validate([
            'name'  => ['required', 'string', 'max:255',],
        ]);

        if ($validator) {
            $name = $request->name;
            $price = $request->price;
            $user_id=Auth::user()->id;
            $description = $request->description;
            $city_id = $request->city_id;
            $category_id = $request->category_id;
           



            // FILE UPLOAD

            if ($request->hasfile('images')) 
            {
                $i=1;
                foreach($request->file('images') as $image)
                {
                    $imagename = time().$i.'.'.$image->extension();
                    $image->move(public_path('images/rooms'), $imagename);  
                    $data[] = 'images/rooms/'.$imagename;
                    $i++;
                }
            }
            // $photoString = implode(',', $data);

            

            $room= new Room();
           
            $room->name = $name;
            $room->photo = json_encode($data);
            $room->price = $price;
            
            $room->description = $description;
            $room->category_id = $category_id;
            $room->city_id = $city_id;
            $room->user_id = $user_id;
           
            $room->save();

            return redirect()->route('index')->with("successMsg", "New Room is ADDED in your data");


        }else{
            return Redirect::back()->withErrors($validator);
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
      public function cart(Request $request)
   {
     
     $room_id=$request->room_id;
     $duration=$request->duration;
     $paymenttype_id=$request->paymenttype_id;

     $codeno="RMT-".rand(111111,999999);
     $date=Carbon::now();
     $user_id=Auth::user()->id;
     $room=Room::find($room_id);
     $price=$room->price;
     $amount=$price*$duration;
     $status=0;
     // dd($amount);

     $rent= new Rent();
     $rent->codeno=$codeno;
     $rent->date=$date;
     $rent->duration=$duration;
     $rent->paymenttype_id=$paymenttype_id;
     $rent->room_id=$room_id;
     $rent->user_id=$user_id;
     $rent->amount=$amount;
     $rent->status=$status;
     
     $rent->save();

            return redirect()->route('index')->with("successMsg", "Your rent is successfully");
      
   }
   //    public function cartroom($id)
   // {

     
   //    $room=Room::where('id',$id)->get();
  
   //    return view ('frontend.cart',compact('room'));
   // }


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
    public function search(Request $request)
    {
        // dd($request);
        $rooms=Room::where('category_id','=',$request->category)
                        ->orWhere('city_id','=',$request->city)
                        ->orWhere('price','>=',$request->price)
                        ->get();



        // $rooms=Room::where('category_id','=',$request->category)
        //             ->orWhere(function ($query)
        //             {
        //             $query->where('city_id','=',$request->city)
        //             })
        //              ->orWhere(function ($query)
        //             {
        //             $query->where('price','>=',$request->price)
        //             })
        //              ->get();

        // $rooms=Room::where(function ($query){

        //     $query->where('category_id','=',$request->category)
        //                 ->orWhere('city_id','=',$request->city)
        //                ->orWhere('price','>=',$request->price)

        // })->get();

        return view('frontend.roomsearch',compact('rooms'));
        
    }

   
}
