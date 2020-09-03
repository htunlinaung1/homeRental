<x-backend>  


  <main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Customer</h1>
                </div>
               
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            @if(session('successMsg')!=NULL)

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong>Success!</strong> {{session('successMsg')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            @endif




                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Name</th>
                                          <th>NRC</th>
                                          <th>Phone</th>
                                          <th>Address</th>
                                          <th>Email</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($customers as $customer)

                                        @php 
                                            $id=$customer->id;
                                            

                                            $photo=$customer->photo;
                                            
                                            $name=$customer->name;
                                            $nrc=$customer->nrcno;
                                            $phone=$customer->phone;
                                            $address=$customer->address;
                                            $email=$customer->email;
                                          
                                           
                                        @endphp
                                        <tr>
                                            <td> {{$i++}}. </td>
                                            <td>     
                                             <img src="{{asset($photo)}}" class="img-fluid" style="width: 70px;" >
                                                {{$name}}
                                             </td>
                                             <td>
                                                 {{$nrc}}
                                             </td>
                                             <td>
                                                 {!!$phone!!}
                                             </td>
                                             <td>
                                                 {{$address}}
                                             </td>
                                             <td>
                                                 {{$email}}
                                             </td>
                                            
                                            <td>
                                              
                                                <form action="{{route('backside.customer.destroy',$id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are You Sure Delete?')"> 
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger" type="submit"> <i class="icofont-close icofont-1x"></i></button>
                                                </form>
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
</x-backend>  