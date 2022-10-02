@extends('frontend.layouts_frontend.master')

@section('title')
    Nursing
@endsection

@section('content')
 <div class="main-content">
           <div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{ asset('assets/frontend/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Course Details</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>Nursing</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->
            
            <!-- Profile Section -->
            <section class="profile-section orange-color pt-100 pb-100 md-pt-70 md-pb-70"> 
                <div class="container">                   
                    <div class="row clearfix">
                        <!-- Image Section -->
                        <div class="image-column col-lg-5 md-mb-50">
                            <div class="inner-column mb-50 md-mb-0">
                                <div class="image">
                                    <img src="{{ asset('assets/frontend/images/banner/home7/nursing.png') }}" alt="" />
                                </div>
                                <!-- <div class="team-content text-center">
                                    <h3>Nursing</h3>
                                    <div class="text">Chief Instructor</div>
                                    <ul class="personal-info">
                                        <li class="email">
                                            <span><i class="glyph-icon flaticon-email"> </i> </span>
                                            <a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a>
                                        </li>
                                        <li class="phone">
                                            <span><i class="glyph-icon flaticon-call"></i></span>
                                            <a href="tel:+088-589-8745">(+088) 589-8745</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-box">
                                    <a href="#" class="fa fa-facebook-square"></a>
                                    <a href="#" class="fa fa-twitter-square"></a>
                                    <a href="#" class="fa fa-linkedin-square"></a>
                                    <a href="#" class="fa fa-github"></a>
                                </div> -->
                            </div>
                        </div>                      
                        <!-- Content Section -->
                        <div class="content-column col-lg-7 pl-60 pt-50 md-pl-15 md-pt-0">
                            <div class="inner-column">
                                <h2>Nursing School</h2>
                                <h4>Category: Nursing and Midwifery</h4>
                                <!-- Student List -->
                                <ul class="student-list">
                                    <li>Duration: 3 years</li>
                                    <li>Course Level: Diploma</li>
                                </ul>
                                <h5>Course Description</h5>
                                <p>This course equips students with the necessary skills to work as nurses and midwives in hopitals, health centres and clinics</p>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            
        </div> 
@endsection
