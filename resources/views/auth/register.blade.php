<x-frontend>
      <!-- Breadcrumb Section Begin -->
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
    <!-- Breadcrumb Section End -->
    <!-- Breadcrumb Section Begin -->
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
    <!-- Breadcrumb Section End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                     <form method="POST" action="{{ route('register') }}">
                          @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="small mb-1" for="inputName"> Name</label>
                                  <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" autofocus="" />
                                   @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="small mb-1" for="phone">Phone Number</label>
                                  <input class="form-control py-4" id="phone" type="text" placeholder="Enter Phone Number" name="phone" />
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">NRC NO</label>
                            <input class="form-control py-4" id="inputNRCNO" type="text" aria-describedby="emailHelp" placeholder="Enter nrc address" name="nrc" />
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-row">
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="small mb-1" for="inputPassword"> Password</label>
                                  <input class="form-control py-4" id="inputPassword" type="password" placeholder="Password" />
                                   @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                  <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                  <input class="form-control py-4" id="inputUsername" type="password"  placeholder="Confirm Password" name="conpassword" />
                                  <font id="error" color="red"></font>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="small mb-1" for="address"> Address </label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        
                      <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class=" mt-3 text-center ">
                        <a href="login.php" class="text-dark text-decoration-none">Have an account? Go to login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form End -->
</x-frontend>