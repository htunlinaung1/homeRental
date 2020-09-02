<x-backend>  


  <main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> City</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.city.create')}}" class="btn btn-outline-primary">
                        <i class="icofont-plus icofont-1x"></i>
                    </a>
                </ul>
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
                                          
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=1; @endphp
                                        @foreach($cities as $city)

                                        @php 
                                            $id=$city->id;
                                            $name=$city->name;
                                           
                                        @endphp
                                        <tr>
                                            <td> {{$i++}}. </td>
                                            <td> 
                                                
                                            {{$name}}
                                             </td>
                                            
                                            <td>
                                                <a href="{{route('backside.city.edit',$id)}}" class="btn btn-warning">
                                                    <i class="icofont-ui-settings icofont-1x"></i>
                                                </a>

                                                <form action="{{route('backside.category.destroy',$id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are You Sure Delete?')"> 
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