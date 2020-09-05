<x-frontend>  
<section class="breadcrumb-section set-bg subtitle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> Register </h2>
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
                        <h2> Register </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Rent </h1>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                           {{--  @if(session('successMsg')!=NULL)

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Success!</strong> {{session('successMsg')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            @endif --}}




                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Codeno</th>
                                          
                                          <th>Amount</th>
                                          <th>Room Name</th>
                                          <th>Customer Name</th>
                                          <th>Phone</th>
                                          
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($users as $rent)

                                        @php 
                                            $id=$rent->id;
                                           
                                            
                                            $codeno=$rent->codeno;
                                            $amount=$rent->amount;
                                            $room_name=$rent->room->name;
                                            // $customer=$rent->users->name;
                                            $customer=$rent->user->name;
                                            $phone=$rent->user->phone;
                                           
                                        @endphp
                                        <tr>
                                            <td> {{$i++}}. </td>
                                           
                                             <td>
                                                 {{$codeno}}
                                             </td>
                                             <td>
                                                 {{$amount}}
                                             </td>
                                             <td>
                                                 {{$room_name}}
                                             </td>
                                             <td>
                                                 {{$customer}}
                                             </td>
                                             <td>
                                                 {{$phone}}
                                             </td>
                                            
                                            <td>
                                               {{-- <a href="" class="btn btn-outline-success">
                      <i class="icofont-ui-check"></i>
                    </a> --}}
                    <a href="{{route('index')}}" class="btn-outline-success"> Back</a>
                                              
                                                {{-- <form action="{{route('backside.rent.destroy',$id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are You Sure Delete?')"> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger" type="submit"> <i class="icofont-close icofont-1x"></i></button>
                                                </form> --}}
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-frontend>  