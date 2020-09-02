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
    <div class="container">
	 <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> New Room </h1>
            </div>
          
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{-- {{route('frontend.store')}} --}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            
                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                                <div class="col-sm-10">
                                    <div class="input-images"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="name">
                                </div>
                            </div>

                          

                            <div class="form-group row">
                                <label for="i_description" class="col-sm-2 col-form-label"> Description </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="i_description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name_id" class="col-sm-2 col-form-label"> Price </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name_id" name="price">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="brandid">
                                        <option> Choose Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="photo_id" class="col-sm-2 col-form-label"> City </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="subcategoryid">
                                        <option> Choose City </option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}"> {{ $city->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="icofont-save"></i>
                                        Save
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

@section('script_content')

    <script type="text/javascript">
        $(document).ready(function() {

            $('#i_description').summernote();


            $('.input-images').imageUploader();

        });
    </script>
@endsection
</x-frontend>