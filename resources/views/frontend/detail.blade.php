<x-frontend>

 <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">304 Blaster Up</h1>
              <span class="color-text-a">Chicago, IL 606543</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('index')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{route('property')}}">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  304 Blaster Up
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row">
        
			@php
      $room=$roomdetail;
			$id=$room->id;
			
			$name=$room->name;

      $photos=json_decode($room->photo);

   //    $photo=$photos[0];
			// $photo=$room->photo;

			$description=$room->Description;
			$price=$room->price;
			
			
			
			$category=$room->category->name;
			$city=$room->city->name;
			

			@endphp
          <div class="col-sm-12">
           
            <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
               @foreach($photos as $photo)
              <div class="carousel-item-b">
                <img src="{{asset($photo)}}" alt="">
              </div>
              @endforeach
         
            </div>
       

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="ion-money">MMK</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">{{$price}}</h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span>{{$id}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Location:</strong>
                        <span>{{$city}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>{{$category}}</span>
                      </li>
                         <li class="d-flex justify-content-between">
                        <strong>Price: </strong>
                        <span>{{$price}}</span>
                      </li>
                    {{--    
                      <li class="d-flex justify-content-between">
                        <strong>Description: </strong>
                        <span>{!!$description!!}</span>
                      </li> --}}
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>Rent</span>
                      </li>
                      {{-- <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        <span>340m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Beds:</strong>
                        <span>4</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Baths:</strong>
                        <span>2</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garage:</strong>
                        <span>1</span>
                      </li> --}}
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                   {!!$description!!}
                  </p>
                  
                </div>
                     <div class="row section-t3">
                  <div class="col-sm-12">
                   <form action="{{route('cart')}}" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{$id}}">
                  <div class="title-box-d">
                      <div class=" col-md-12">
                         <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Duration:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="duration">
                                </div>
                            </div>

                          

                          
                           

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Payment Type :</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="paymenttype_id">
                                        <option> Choose Payment Type</option>
                                        @foreach($paymenttypes as $paymenttype)
                                            <option value="{{ $paymenttype->id }}"> {{ $paymenttype->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div col-sm-10>
                               
                              <input type="submit" class="btn-primary btn-lg" value="Rent Here">
                            
                            </div>



                      
                      </div>
                  </div>
                </form>
                    

                


                  </div>
                </div>
              </div>
            </div>
          </div>
          
     
   
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->
</x-frontend>