<x-frontend>
    
    <section class="breadcrumb-section set-bg subtitle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> Rent</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumb-section set-bg subtitle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> Rent</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <div class="container">
     <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i>Rent</h1>
            </div>
          
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{-- {{route('rent')}} --}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            
                            {{-- 
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Room Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="price" readonly="readonly" value="{{$room->price}}">
                                </div>
                            </div>
 --}}
                       
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Duration</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="duration">
                                </div>
                            </div>

                          

                          
                           

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Payment Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id">
                                        <option> Choose Payment Type</option>
                                        @foreach($paymenttypes as $paymenttype)
                                            <option value="{{ $paymenttype->id }}"> {{ $paymenttype->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                           

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icofont-save"></i>
                                        Rent Room
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>

</x-frontend>
