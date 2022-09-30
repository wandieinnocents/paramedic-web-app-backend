@extends('frontend.layouts_frontend.master')

@section('title')
The International Paramedical Institute Maya
@endsection

@section('content')

 <!-- Banner Section Start -->
          
            <div class="rs-slider main-home">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                   
                    <!-- <div class="slider-content slide1">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Join one of the Best</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">paramedical Institutions in Uganda</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon blue-color main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Slide 2 -->
                    <!-- <div class="slider-content slide2">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Become a </div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Health Professional</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Slide 3 -->
                    <!-- <div class="slider-content slide3">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Practical Training With the </div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Most Advanced Medical Equipment</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- slide 4 -->
                    <!-- <div class="slider-content slide4">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Join a </div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Vibrant Community of young Talent</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Slide 5 -->

                    <!-- <div class="slider-content slide5">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Practical Training With the </div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Most Advanced Medical Equipment</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Slide 6 -->

                    <!-- <div class="slider-content slide6">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Education is</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">the key to success</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="#">Find Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Features Section start -->
                <div id="rs-features" class="rs-features main-home">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="{{ asset('assets/frontend/images/features/icon/3.png') }}" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">5,320 online courses</span>
                                        </h4>
                                        <p class="dese">
                                           Enjoy a variety of fresh topics
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="{{ asset('assets/frontend/images/features/icon/2.png') }}" alt="">
                                    </div>
                                    <div class="content-part">
                                      <h4 class="title">
                                          <span class="watermark">Expert instruction</span>
                                      </h4>
                                        <p class="dese">
                                            Find the right instructor
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-4 col-md-12">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="{{ asset('assets/frontend/images/features/icon/1.png') }}" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">Lifetime access</span>
                                        </h4>
                                        <p class="dese">
                                           Learn on your schedule
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Section End -->
            </div>

            

            <div class="rs-slider style1">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    
                    <!-- Slider 1 -->
                    <div class="slider-content slide1">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Join one of the Best</div>
                            <h3 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Paramedical Institutions in Uganda</h3>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slider 2 -->
                    <div class="slider-content slide2">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Practical Training With the </div>
                            <h3 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Most Advanced Medical Equipment</h3>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slider 3 -->
                    <div class="slider-content slide3">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Become a</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Health Professional</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slider 4 -->
                    <div class="slider-content slide4">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We Train Professionals </div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Ready for to Serve</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>

                     <!-- Slider 5 -->
                     <div class="slider-content slide5">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We Train Professionals </div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Ready  to Serve</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>

                     <!-- Slider 6 -->
                     <div class="slider-content slide6">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We Train Professionals </div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Competetive for the Market</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>

                     <!-- Slider 7 -->
                     <div class="slider-content slide7">
                        <div class="container">
                            <div class="sl-sub-title white-color wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We Care about Student Health</div>
                            <h1 class="sl-title white-color wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"> and well being through sports</h1>
                            <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <a class="readon2 banner-style" href="#">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner Section End -->

             <!-- Services Section Start -->
             <div class="rs-services style1">
                <div class="row no-gutter">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly1">
                            <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                            <div class="content-part">
                                <img src="{{ asset('assets/frontend/images/services/icons/1.png') }}" alt="">
                                <h4 class="title"><a href="#">Life at IPI</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly2">
                            <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                            <div class="content-part">
                                <img src="{{ asset('assets/frontend/images/services/icons/2.png') }}" alt="">
                                <h4 class="title"><a href="#">Graduation</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly3">
                            <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                            <div class="content-part">
                                <img src="{{ asset('assets/frontend/images/services/icons/3.png') }}" alt="">
                                <h4 class="title"><a href="#">Sports</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item overly4">
                            <img src="{{ asset('assets/frontend/images/services/1.jpg') }}" alt="">
                            <div class="content-part">
                                <img src="{{ asset('assets/frontend/images/services/icons/1.png') }}" alt="">
                                <h4 class="title"><a href="#">Social</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->
            
            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-4 order-last">
                            <div class="notice-bord style1">
                                <h4 class="title">Notice Board</h4>
                                <ul>
                                    <li class="wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                        <div class="date"><span>20</span>June</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        <div class="date"><span>22</span>Aug</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                        <div class="date"><span>14</span>May</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                        <div class="date"><span>31</span>Sept</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="700ms" data-wow-duration="2000ms">
                                        <div class="date"><span>28</span>Oct</div>
                                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and setting</div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="col-lg-12 pr-50 md-pr-15">
                            <div class="about-part">
                                <div class="sec-title mb-40">
                                    <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">About Us</div>
                                    <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">The International Paramedical Institute - IPI  </h2>
                                    <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">IPI is a science institution,  training dental professionals, clinical officers and many other health care courses. It is founded by Bunawona Uganda Community Outreach (BUCO) which is determined to help, treat and prevent oral conditions and many other health care problems in Uganda. It has a modern and spacious dental clinic, medical laboratories, dormitories, Medical equipment, classrooms and well stalked library and computer laboratory.</div>
                                
                                </div>
                                <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="img-part">
                                        <img src="{{ asset('assets/frontend/images/about/ceo1.png') }}" alt="CEO Image">
                                    </div>
                                    <div class="author-part">
                                        <span class="sign mb-10"><img src="{{ asset('assets/frontend/images/about/sign.png') }}" alt="Sign"></span>
                                        <span class="post">PRESIDENT Dr.Steven S Sseruyange</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Categories Section Start -->
            <!-- <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Subject Categories</div>
                                <h2 class="title mb-0">Our Top Categories </h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a href="#" class="readon">View All Categories</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/1.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Genarel Education</h4>
                                    <span class="courses">05 Courses</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/2.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Computer Science</h4>
                                    <span class="courses">05 Courses</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/3.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Civil Engineering</h4>
                                    <span class="courses">05 Courses</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/4.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Artificial Intelligence</h4>
                                    <span class="courses">05 Courses</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/5.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Business Studies</h4>
                                    <span class="courses">05 Courses</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/6.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Web Development</h4>
                                    <span class="courses">05 Courses</span>
                                </div>
                            </a>
                        </div>  
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/7.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Life Course</h4>
                                    <span class="courses">8 Courses</span>
                                </div>
                            </a>
                        </div>  
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/8.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Lawyer Course</h4>
                                    <span class="courses">1 Courses</span>
                                </div>
                            </a>
                        </div>  
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <a class="categories-item" href="#">
                                <div class="icon-part">
                                    <img src="assets/frontend/images/categories/icons/9.png" alt="">
                                </div>
                                <div class="content-part">
                                    <h4 class="title">Recipes</h4>
                                    <span class="courses">7 Courses</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Categories Section End -->

             <!-- Services Section Start -->
             <div class="rs-services style2 pt-100 md-pt-80">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Top Courses</div>
                                <h2 class="title mb-0">Popular Courses</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a href="#" class="readon">View Course Details </a>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-4 md-mb-30">
                            <div class="service-item wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <div class="content-part">
                                    <span class="icon-part"><i class="flaticon-document"></i></span>
                                    <h4 class="title"><a href="#">Paramedical School</a></h4>
                                    <p class="desc">Clinical, Public Health, Pharmacy e.t.c</p>
                                    <a class="service-btn" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-30">
                            <div class="service-item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <div class="content-part">
                                    <span class="icon-part"><i class="flaticon-document"></i></span>
                                    <h4 class="title"><a href="#">Dental School</a></h4>
                                    <p class="desc">Get Training in Dentisty</p>
                                    <a class="service-btn" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="service-item wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                <div class="content-part">
                                    <span class="icon-part"><i class="flaticon-bag"></i></span>
                                    <h4 class="title"><a href="#">Nursing School</a></h4>
                                    <p class="desc">Get Trained in  Nursing and Midwifery</p>
                                    <a class="service-btn" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Services Section End -->

            <!-- Popular Courses Section Start -->
                <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">IPI Courses</div>
                                <h2 class="title mb-0">Courses offered at IPI</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-part text-right sm-text-left">
                                <a href="#" class="readon">View All Courses</a>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/courses/1.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                        <li><span class="price">UGX. 1,500,000</span></li>
                                        <li><a class="categorie" href="dental.html">Dentistry</a></li>
                                    </ul>
                                    <h3 class="title"><a href="#">Diploma in Public Health Dentistry(3 years)</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="dental-details.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/courses/2.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                        <li><span class="price">UGX. 1,500,000</span></li>
                                        <li><a class="categorie" href="#">Clinical Medicine</a></li>
                                    </ul>
                                    <h3 class="title"><a href="#">Diploma in Clinical Medicine(3 years)</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/courses/3.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                        <li><span class="price">UGX. 1,500,000</span></li>
                                        <li><a class="categorie" href="#">Medical Laboratory</a></li>
                                    </ul>
                                    <h3 class="title"><a href="#">Diploma in Medical Laboratory(3 years)</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/courses/4.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                        <li><span class="price">UGX. 1,500,000</span></li>
                                        <li><a class="categorie" href="#">Pharmacy</a></li>
                                    </ul>
                                    <h3 class="title"><a href="#">Diploma in pharmacy (3 years)</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/courses/5.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                        <li><span class="price">UGX. 1,500,000</span></li>
                                        <li><a class="categorie" href="#">Medical Records</a></li>
                                    </ul>
                                    <h3 class="title"><a href="#">Diploma in Medical Records Management</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6  mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                            <div class="courses-item">
                                <div class="img-part">
                                    <img src="{{ asset('assets/frontend/images/courses/6.png') }}" alt="">
                                </div>
                                <div class="content-part">
                                    <ul class="meta-part">
                                        <li><span class="price">UGX.700,000</span></li>
                                        <li><a class="categorie" href="#">Certificate Programs</a></li>
                                    </ul>
                                    <h3 class="title"><a href="#">Certificate programs(2 years) include;</a></h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>
                                                <li class="user"><i class="fa fa-user"></i> 245</li>
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="nursing.html"><i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- Popular Courses Section End -->
        
            <div class="row section-wrap"></div>
            <!-- CTA Section Start -->
            <div class="rs-cta section-wrap gray-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-part">
                              <img src="{{ asset('assets/frontend/images/cta/home2.png') }}" alt="Image">
                        </div>
                    </div>  
                     <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="content">
                            <div class="sec-title mb-40 ">
                                <h2 class="title">Admissions Open </h2>
                                <div class="desc">Feel free to contact us any time by phone, email or through our social media platforms for more information on how to get addmitted</div>
                            </div>
                            <div class="btn-part">
                                <a class="readon banner-style uppercase" href="https://docs.google.com/forms/d/e/1FAIpQLSew5o5TV6xKQyVTgYFfiSwWbrwDpgs_oi_EMRpXIV_mC0HMyw/viewform">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 

            <!-- Faq Section Start -->
            <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class="main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">Why Coose us ?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                              Look at some of these Frequently asked Questions, for some answers
                                              </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Recognition & Reputation</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                Is IPI a recognized / Registered institution ?
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What are the Requirements to Join ?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 What are the minimun qualifications for any course at IPI
                                              </div>
                                          </div>
                                      </div>     
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">Any Branches?</a>
                                          </div>
                                          <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                 Does IPI have other Branches ?
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon">
                                <!-- <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI"> -->
                                    
                                <a class="popup-videos" href="#">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- faq Section Start -->

            <!-- Team Section Start -->
            <!-- <div id="rs-team" class="rs-team style1 gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30">
                        <div class="sub-title primary">Instructor</div>
                        <h2 class="title mb-0">Expert Teachers</h2>
                    </div>
                    <div class="rs-carousel owl-carousel nav-style2" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                        <div class="team-item">
                            <img src="assets/frontend/images/team/1.jpg" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">Jhon Pedrocas</a></h4>
                                <span class="designation">Professor</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item">
                            <img src="assets/frontend/images/team/2.jpg" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">Jesika Albenian</a></h4>
                                <span class="designation">Professor</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-item">
                            <img src="assets/frontend/images/team/3.jpg" alt="">
                            <div class="content-part">
                                <h4 class="name"><a href="team-single.html">Alex Anthony</a></h4>
                                <span class="designation">Professor</span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Team Section End -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial home-style1 pt-100 pb-100 md-pt-70 md-pb-70" id="rs-testimonial">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30 text-center">
                        <div class="sub-title primary">Testimonial</div>
                        <h2 class="title mb-0">What Students are Saying</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="2" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="2" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="1" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="false">
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">I work as a pharmacy assistant at Central Pharmacy in Kawempe after aquiring skills from IPI. Thank you IPI for giving me the best</div>
                                <div class="author-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">kisakye mariam</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">At IPI i learnt practical skills in medical laboratory having completed my Diploma in Medical Laboratory. Our Library was full of the best reading materials and e-books that i used. And the laboratory was easily accessible</div>
                                <div class="author-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">ssentamu andrew</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ asset('assets/frontend/images/testimonial/style5/') }}" alt="">Having completed my Certificate in Nursing, i was immediately employed at True Homes Childrens Clinic as a nurse. I thank my teachers at IPI for giving me a comprehensive nursing training and life skills that have enabled me succeed at my work place.
                                 Our Clients.</div>
                                <div class="author-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/style5/3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">nansubuga rhona</a>
                                <span class="designation">Former Student</span>
                            </div>
                        </div>   
                        <div class="testi-item">
                            <div class="author-desc">                                
                                <div class="desc"><img class="quote" src="{{ asset('assets/frontend/images/testimonial/style5/quote2000.png') }}" alt="">More testimonials here ...</div>
                                <div class="author-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/style5/1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Mahadi Monsura</a>
                                <span class="designation">Student</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ asset('assets/frontend/images/testimonial/style5/quote20000.png') }}" alt="">More testimonials here ...</div>
                                <div class="author-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/style5/2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Alex Fenando</a>
                                <span class="designation">English Teacher</span>
                            </div>
                        </div>
                        <div class="testi-item">
                            <div class="author-desc">
                                <div class="desc"><img class="quote" src="{{ asset('assets/frontend/images/testimonial/style5/quote24444.png') }}" alt="">More testimonials here ...</div>
                                <div class="author-img">
                                    <img src="{{ asset('assets/frontend/images/testimonial/style5/3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="author-part">
                                <a class="name" href="#">Losis Dcosta</a>
                                <span class="designation">Math Teacher</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Section bg Wrap 2 start -->
            <!-- <div class="bg2"> -->
                <!-- Blog Section Start -->
                <!-- <div id="rs-blog" class="rs-blog style1 pt-94 pb-100 md-pt-64 md-pb-70">
                    <div class="container">
                        <div class="sec-title mb-60 md-mb-30 text-center">
                            <div class="sub-title primary">News Update </div>
                            <h2 class="title mb-0">Latest News & Events</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-12 pr-75 md-pr-15 md-mb-50">
                                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="assets/frontend/images/blog/1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                            </ul>
                                            <h3 class="title"><a href="#">University while the lovely valley team work </a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center no-gutter white-bg blog-item mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="assets/frontend/images/blog/2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                            </ul>
                                            <h3 class="title"><a href="#">While The Lovely Valley Team Work</a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center no-gutter white-bg blog-item wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <div class="col-md-6">
                                        <div class="image-part">
                                            <a href="#"><img src="assets/frontend/images/blog/3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li><i class="fa fa-user-o"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i>June 15, 2019</li>
                                            </ul>
                                            <h3 class="title"><a href="#">Modern School The Lovely Valley Team Work</a></h3>
                                            <div class="btn-part">
                                                <a class="readon-arrow" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 lg-pl-0">
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">20</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">21</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short mb-30 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">22</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                                <div class="events-short wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="date-part">
                                        <span class="month">June</span>
                                        <div class="date">23</div>
                                    </div>
                                    <div class="content-part">
                                        <div class="categorie">
                                            <a href="#">Math</a> & <a href="#">English</a>
                                        </div>
                                        <h4 class="title mb-0"><a href="#">Educational Technology and Mobile Learning</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- Blog Section End -->

                <!-- Newsletter section start -->
                <div class="rs-newsletter style1 mb--124 sm-mb-0 sm-pb-70">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-md-6 sm-mb-30">
                                    <div class="sec-title">
                                        <div class="sub-title white-color">Newsletter</div>
                                        <h2 class="title mb-0 white-color">Want to be part   <br> of our institute today ?</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form class="newsletter-form">
                                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                                        <button type="submit">Contact Us</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section end -->
            </div>
            <!-- Section bg Wrap 2 End -->

@endsection