@extends('frontend.layouts_frontend.master')

@section('title')
    Dental
@endsection

@section('content')
    
               <!-- Banner Section Start -->            
           <div id="rs-banner" class="rs-banner style7">
            <div class="container">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="banner-content">
                             <h1 class="banner-title white-color">Welcome to IPI Dental School</h1>
                             <div class="desc white-color mb-50">
                                 We Train students in Dental Surgery. 
                             </div>
                             <div class="btn-part">
                                 <a class="readon border-less" href="#">Get Started Now</a>
                             </div>
                         </div>
                         <div class="icons one up-down">
                             <img src="assets/frontend/images/banner/home7/icon/2.png" alt="Images">
                         </div> 
                         <div class="icons two left-right">
                             <img src="assets/frontend/images/banner/home7/icon/1.png" alt="Images">
                         </div> 
                         <div class="icons three left-right">
                             <img src="assets/frontend/images/banner/home7/icon/1.png" alt="Images">
                         </div> 
                         <div class="icons four up-down">
                             <img src="assets/frontend/images/banner/home7/icon/2.png" alt="Images">
                         </div>
                     </div>
                     <div class="offset-lg-6"></div>
                 </div>
            </div>
            <div class="img-part">
                <img src="assets/frontend/images/banner/home7/dental.jpg" style="  -webkit-filter: blur(10px);
                -moz-filter: blur(20px);
                -o-filter: blur(20px);
                -ms-filter: blur(20px);
                filter: blur(1px);" alt="Images">
            </div>
        </div>
         <!-- Banner Section End -->

            <!-- Popular Courses Section Start -->
            <div class="rs-latest-couses orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="assets/frontend/images/courses/home6/style1/1.png" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">1,500,000 UGX</span></li>
                                     <!-- <li class="user"><i class="fa fa-user"></i> 245</li> -->
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">
                                            Well Trained Students competent for the Market
                                        </a>
                                    </h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="dental-details.html">View Details<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="course-single.html">
                                      <img src="assets/frontend/images/courses/home6/style1/2.png" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">1,500,000 UGX</span></li>
                                     <!-- <li class="user"><i class="fa fa-user"></i> 245</li> -->
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">Fully furnished training facilities for our students</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <!-- <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="btn-part">
                                            <a href="dental-details.html">View Details<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="assets/images/courses/home6/style1/3.png" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">Learning jQuery Mobile for Beginners</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="assets/images/courses/home6/style1/4.png" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">Become a PHP Master and Make Money</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 md-mb-40">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="assets/images/courses/home6/style1/5.png" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">The Art of Black and White Photography</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="course-item">
                                <div class="course-image">
                                  <a href="#">
                                      <img src="assets/images/courses/home6/style1/6.png" alt="images">
                                  </a>
                                </div>
                                <div class="course-info">
                                 <ul class="meta-part">
                                     <li><span class="price">$55.00</span></li>
                                     <li class="user"><i class="fa fa-user"></i> 245</li>
                                 </ul>
                                    <h3 class="course-title">
                                        <a href="course-single.html">Introduction to Javascript for Beginners</a>
                                    </h3>
                                    <div class="bottom-part">
                                        <div class="info-meta">
                                            <ul>                                                
                                                <li class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    (05)
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-part">
                                            <a href="#">Apply Now<i class="flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
@endsection
