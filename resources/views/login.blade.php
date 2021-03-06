@extends('welcome')
@section('content')
<!-- <div class="container custom-login">
    <div class="row">
                <div class="col-sm-6">
                    <form action="login" method="POST">
                        <div class="form-group">
                           
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div>
    </div>
</div> -->

<section id="home" class="section welcome-area d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-lg-7">
                <div class="welcome-intro">
                    <h1 class="">Welcome back!</h1>
                    <p class=" my-4">Give Username & Password to Login.</p>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-5">
                <!-- Contact Box -->
                <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg">
                    <!-- Contact Form -->
                    <form action="login" method="POST">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                    @csrf

                        <div class="contact-top">
                            <h3 class="contact-title mb-5">Sign In</h3>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><svg class="svg-inline--fa fa-envelope-open fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M512 464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V200.724a48 48 0 0 1 18.387-37.776c24.913-19.529 45.501-35.365 164.2-121.511C199.412 29.17 232.797-.347 256 .003c23.198-.354 56.596 29.172 73.413 41.433 118.687 86.137 139.303 101.995 164.2 121.512A48 48 0 0 1 512 200.724V464zm-65.666-196.605c-2.563-3.728-7.7-4.595-11.339-1.907-22.845 16.873-55.462 40.705-105.582 77.079-16.825 12.266-50.21 41.781-73.413 41.43-23.211.344-56.559-29.143-73.413-41.43-50.114-36.37-82.734-60.204-105.582-77.079-3.639-2.688-8.776-1.821-11.339 1.907l-9.072 13.196a7.998 7.998 0 0 0 1.839 10.967c22.887 16.899 55.454 40.69 105.303 76.868 20.274 14.781 56.524 47.813 92.264 47.573 35.724.242 71.961-32.771 92.263-47.573 49.85-36.179 82.418-59.97 105.303-76.868a7.998 7.998 0 0 0 1.839-10.967l-9.071-13.196z"></path>
                                                </svg><!-- <i class="fas fa-envelope-open"></i> --></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                    </div>
                                </div>
                                <span class="text-danger">@error('email') {{$message}}
                                        
                                    @enderror</span>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><svg class="svg-inline--fa fa-unlock-alt fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="unlock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <path fill="currentColor" d="M400 256H152V152.9c0-39.6 31.7-72.5 71.3-72.9 40-.4 72.7 32.1 72.7 72v16c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24v-16C376 68 307.5-.3 223.5 0 139.5.3 72 69.5 72 153.5V256H48c-26.5 0-48 21.5-48 48v160c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zM264 408c0 22.1-17.9 40-40 40s-40-17.9-40-40v-48c0-22.1 17.9-40 40-40s40 17.9 40 40v48z"></path>
                                                </svg><!-- <i class="fas fa-unlock-alt"></i> --></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
                                    </div>
                                </div>
                                <span class="text-danger">@error('password') {{$message}}
                                        
                                    @enderror</span>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit">Sign In</button>
                            </div>
                            <div class="col-12">
                                <span class="d-block pt-2 mt-4 border-top">Don't have an account? <a href="register">Sign Up</a></span>
                            </div>
                        </div>
                    </form>
                    <!-- <p class="form-message"></p> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shape Bottom -->
    <div class="shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
</section>
@endsection