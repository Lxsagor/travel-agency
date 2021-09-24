@extends('welcome')
@section('content')
<section
          <!-- ***** Banner Area Start ***** -->
      <section
        id="about"
        class="section welcome-area bg-inherit h-100vh overflow-hidden"
      >
        <div class="shapes-container">
          <div class="bg-shape"></div>
        </div>
        <div class="container h-100">
          <div class="row align-items-center h-100">
            <!-- Welcome Intro Start -->
            <div class="col-12 col-md-6">
              <div class="welcome-intro">
                <h2 class="aboutHead">Best Destinations around the world</h2>
                <p class="aboutMiddle mt-2" data-translatekey="about-desc">
                  Travel, enjoy and live a new and full life
                </p>
                <small class="aboutSecondMiddle mt-2"
                  >Built Wicket longer admire do barton vanity itself do in it.
                  Preferred to sportsmen it engrossed listening. Park gate sell
                  they west hard for the.</small
                >
                <div class="mt-2"></div>
                <button class="findBtn">Find out more</button>
                <span class="playBtn mr-3">
                  <img src="./assets/img/jadoo/arrow.png" class="playIcon" />
                </span>
                <span class="playTxt">Play Demo</span>
                <!-- <a href="#" class="btn">Get Started</a> -->
              </div>
            </div>
            <div class="col-12 col-md-5 offset-lg-1">
              <!-- Welcome Thumb -->
              <div
                class="welcome-thumb traveller"
                data-aos="fade-right"
                data-aos-delay="500"
                data-aos-duration="1000"
              >
                <img src="assets/img/jadoo/Traveller.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ***** Banner Area End ***** -->

      <!-- Book Your Next Trip -->
      <section
        id="features"
        class="section features-area overflow-hidden mt-5 ptb_100"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <!-- Section Heading -->
              <div class="section-heading text-center traveller2">
                <p class="d-sm-block mt-4 tHeader">CATEGORY</p>
                <h2>We Offer Best Services</h2>
              </div>
            </div>
          </div>
          <div class="row traveller2">
            <div class="col-12 col-md-6 col-lg-3 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm" src="assets/img/jadoo/menu/1.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Calculated Weather </h3>
                        <p>Built Wicket longer admire do barton vanity itself do in it.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box img-border text-center icon-1 p-5 wow fadeInUp" data-aos-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm" src="assets/img/jadoo/menu/2.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Best Flights</h3>
                        <p>Engrossed listening. Park gate sell they west hard for the.</p>
                    </div>
                </div>
                <div class="backBorder"></div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInRight" data-aos-duration="2s" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm" src="assets/img/jadoo/menu/3.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Local Events</h3>
                        <p>Barton vanity itself do in it. Preferd to men it engrossed listening. </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 my-3 res-margin">
                <!-- Image Box -->
                <div class="image-box text-center icon-1 p-5 wow fadeInLeft" data-aos-duration="2s" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                    <!-- Featured Image -->
                    <div class="featured-img mb-3">
                        <img class="avatar-sm" src="assets/img/jadoo/menu/4.png" alt="">
                    </div>
                    <!-- Icon Text -->
                    <div class="icon-text">
                        <h3 class="mb-2">Customization</h3>
                        <p>We deliver outsourced
                            aviation services for
                            military customers</p>
                    </div>
                </div>
            </div>
            
        </div>
      </section>
      <!-- EnD -->

      <!-- Top Destination -->
      <section
        id="features"
        class="section blog-area ptb_100 ownCustom"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
              <!-- Section Heading -->
              <div class="section-heading text-center traveller2">
                <p class="d-sm-block mt-4 tHeader">Top Selling</p>
                <h2>Top Destinations</h2>
              </div>
            </div>
          </div>
          <div class="row traveller2">
            <div class="col-12 col-md-4">
              <!-- Single Blog -->
              <div class="single-blog res-margin">
                  <!-- Blog Thumb -->
                  <div class="blog-thumb">
                      <a href="#"><img src="assets/img/jadoo/menu/r3.png" alt=""></a>
                  </div>
                  <!-- Blog Content -->
                  <div class="blog-content p-4">
                      <!-- Meta Info -->
                      <ul class="meta-info d-flex justify-content-between">
                          <li>By <a href="#">Rome, Italty</a></li>
                          <li><a href="#">$5,42k</a></li>
                      </ul>
                      <!-- Blog Title -->
                      <h3 class="blog-title my-3"><img src="assets/img/jadoo/menu/send.svg" /> <a href="#">10 Days Trip</a></h3>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4">
            <!-- Single Blog -->
            <div class="single-blog res-margin">
                <!-- Blog Thumb -->
                <div class="blog-thumb">
                    <a href="#"><img src="assets/img/jadoo/menu/r2.png" alt=""></a>
                </div>
                <!-- Blog Content -->
                <div class="blog-content p-4">
                    <!-- Meta Info -->
                    <ul class="meta-info d-flex justify-content-between">
                      <li>By <a href="#">London, UK</a></li>
                      <li><a href="#">$4.2k</a></li>
                    </ul>
                    <!-- Blog Title -->
                    <h3 class="blog-title my-3"><img src="assets/img/jadoo/menu/send.svg" /> <a href="#">12 Days Trip</a></h3>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
          <!-- Single Blog -->
          <div class="single-blog res-margin">
              <!-- Blog Thumb -->
              <div class="blog-thumb">
                  <a href="#"><img src="assets/img/jadoo/menu/r1.png" alt=""></a>
              </div>
              <!-- Blog Content -->
              <div class="blog-content p-4">
                  <!-- Meta Info -->
                  <ul class="meta-info d-flex justify-content-between">
                    <li>By <a href="#">Full Europe</a></li>
                    <li><a href="#">$15k</a></li>
                  </ul>
                  <!-- Blog Title -->
                  <h3 class="blog-title my-3"><img src="assets/img/jadoo/menu/send.svg" /> <a href="#">28 Days Trip</a></h3>
              </div>
          </div>
       </div>
            
            
        </div>
      </section>
      <!-- EnD -->

    <!-- Easy & Fast -->
    <section class="section service-area overflow-hidden ptb_100">
        <div class="container">
            <div class="row justify-content-between traveller2">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <!-- Service Text -->
                    <div class="service-text pt-4 pt-lg-0">
                        <p class="text-left">Easy & Fast</p>
                        <h2 class="mb-4 text-left">Book your next trip 
                            in 3 easy steps</h2>
                        <!-- Service List -->
                        <ul class="service-list trr">
                            <!-- Single Service -->
                            <li class="single-service media py-2">
                                <div class="service-icon pr-4">
                                    <span style="background: #006380;""><svg class="svg-inline--fa fa-buffer fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="buffer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M427.84 380.67l-196.5 97.82a18.6 18.6 0 0 1-14.67 0L20.16 380.67c-4-2-4-5.28 0-7.29L67.22 350a18.65 18.65 0 0 1 14.69 0l134.76 67a18.51 18.51 0 0 0 14.67 0l134.76-67a18.62 18.62 0 0 1 14.68 0l47.06 23.43c4.05 1.96 4.05 5.24 0 7.24zm0-136.53l-47.06-23.43a18.62 18.62 0 0 0-14.68 0l-134.76 67.08a18.68 18.68 0 0 1-14.67 0L81.91 220.71a18.65 18.65 0 0 0-14.69 0l-47.06 23.43c-4 2-4 5.29 0 7.31l196.51 97.8a18.6 18.6 0 0 0 14.67 0l196.5-97.8c4.05-2.02 4.05-5.3 0-7.31zM20.16 130.42l196.5 90.29a20.08 20.08 0 0 0 14.67 0l196.51-90.29c4-1.86 4-4.89 0-6.74L231.33 33.4a19.88 19.88 0 0 0-14.67 0l-196.5 90.28c-4.05 1.85-4.05 4.88 0 6.74z"></path></svg><!-- <i class="fab fa-buffer"></i> --></span>
                                </div>
                                <div class="service-text media-body">
                                    <h5>Choose Destination</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Urna, tortor tempus. </p>
                                </div>
                            </li>
                            <!-- Single Service -->
                            <li class="single-service media py-2">
                                <div class="service-icon pr-4">
                                    <span style="background: #F15A2B;"><svg class="svg-inline--fa fa-brush fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="brush" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M352 0H32C14.33 0 0 14.33 0 32v224h384V32c0-17.67-14.33-32-32-32zM0 320c0 35.35 28.66 64 64 64h64v64c0 35.35 28.66 64 64 64s64-28.65 64-64v-64h64c35.34 0 64-28.65 64-64v-32H0v32zm192 104c13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24s-24-10.75-24-24c0-13.26 10.75-24 24-24z"></path></svg><!-- <i class="fas fa-brush"></i> --></span>
                                </div>
                                <div class="service-text media-body">
                                    <h5>Make Payment</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Urna, tortor tempus. </p>
                                </div>
                            </li>
                            <!-- Single Service -->
                            <li class="single-service media py-2">
                                <div class="service-icon pr-4">
                                    <span style="background: #006380;"><svg class="svg-inline--fa fa-burn fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="burn" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 0C79.7 101.3 0 220.9 0 300.5 0 425 79 512 192 512s192-87 192-211.5c0-79.9-80.2-199.6-192-300.5zm0 448c-56.5 0-96-39-96-94.8 0-13.5 4.6-61.5 96-161.2 91.4 99.7 96 147.7 96 161.2 0 55.8-39.5 94.8-96 94.8z"></path></svg><!-- <i class="fas fa-burn"></i> --></span>
                                </div>
                                <div class="service-text media-body">
                                    <h5>Reach Airport on Selected Date</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit. Urna, tortor tempus. </p>
                                </div>
                            </li>
                           
                        </ul>
                        <!-- <a href="#" class="btn btn-bordered mt-4">Learn More</a> -->
                    </div>
                </div>
                <div class="col-12 col-lg-4 order-1 order-lg-2 d-none d-lg-block">
                    <!-- Service Thumb -->
                    <div class="service-thumb mx-auto trr">
                        <img src="assets/img/jadoo/menu/esfst.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

     <!-- Easy & Fast -->
     <section class="section service-area overflow-hidden ptb_100 trr2">
      <div class="container">
          <div class="row justify-content-between traveller2">
              <div class="col-12 col-lg-5 order-2 order-lg-1">
                  <!-- Service Text -->
                  <div class="service-text pt-4 pt-lg-0">
                      <p class="text-left">Testimonials</p>
                      <h2 class="mb-4 text-left">What people say
                        about Us.</h2>
                      <!-- Service List -->
                  </div>
              </div>
              <div class="col-12 col-lg-7 order-1 order-lg-2 d-none d-lg-block row justify-content-center">
                  <!-- Service Thumb -->
                  <div class="service-thumb mx-auto">
                      <img src="assets/img/jadoo/menu/r44.png" alt="">
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End -->
    <section class="section service-area overflow-hidden ptb_100 trr2">
      <div class="container">
        <div class="row justify-content-between traveller2">
            <div class="col-12">
      <div class="subs">
        <div class="send">
          <img src="assets/img/jadoo/menu/send.png" />
        </div>
        <label>Subscribe to get information, latest news and other
          interesting offers about Cobham</label>
          <input type="text" class="field" />
          <button class="btnSubscribe">Subscribe</button>
      </div>
      </div>
      </div>
    </div>
    </section>
      <!-- Branding Start -->
      <!-- <section class="branding-area ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="section-heading text-center">
                        <h2>Where have we been mentioned</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                        <p class="d-block d-sm-none mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="branding-slider owl-carousel op-5 owl-loaded owl-drag">
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2088px, 0px, 0px); transition: all 2s ease 0s; width: 3712px;"><div class="owl-item cloned" ><div class="single-brand p-3">
                        <img src="assets/img/jadoo/brand/image27.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 212px; margin-right: 20px;"><div class="single-brand p-3">
                        <img src="assets/img/jadoo/brand/image28.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 212px; margin-right: 20px;"><div class="single-brand p-3">
                        <img src="assets/img/jadoo/brand/image29.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 212px; margin-right: 20px;"><div class="single-brand p-3">
                        <img src="assets/img/jadoo/brand/image30.png" alt="">
                    </div></div><div class="owl-item cloned" style="width: 212px; margin-right: 20px;"><div class="single-brand p-3">
                        <img src="assets/img/jadoo/brand/image31.png" alt="">
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </section> -->
      <!-- Branding End -->
      <!--====== Height Emulator Area Start ======-->
      <div class="height-emulator d-none d-lg-block"></div>
      <!--====== Height Emulator Area End ======-->
      @endsection