@extends('frontend.layouts_frontend.master')

@section('title')
    Our Team
@endsection

@section('content')

	<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="assets/frontend/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">About Us</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>About Us</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->
			
			<!-- About Section End -->

			<!-- Team Section Start -->
			<!-- <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 gray-bg">
				<div class="container">
					<div class="sec-title mb-50 md-mb-30">
							<div class="sub-title orange">Instructor</div>
							<h2 class="title mb-0">Meet our Team of Expert Teachers</h2>
					</div>
					<div class="rs-carousel owl-carousel nav-style2 orange-color" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
						<div class="team-item">
							<img src="assets/images/team/1.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Dr. Steven S Sseruyange</a></h4>
								<span class="designation">President</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/2.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Dr. Mayanja Mohamed Magala</a></h4>
								<span class="designation">Principal</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/3.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Mr. Mutumba Abraham</a></h4>
								<span class="designation">Academic Registrar</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
                        <div class="team-item">
							<img src="assets/images/team/1.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Nakalema Zakia</a></h4>
								<span class="designation">Head of Administration & Finance</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/2.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Mr. Ssengendo Peter</a></h4>
								<span class="designation">Communications Team Leader</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/3.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Mrs. Nagujja Jackline</a></h4>
								<span class="designation">General Secretary</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
                        <div class="team-item">
							<img src="assets/images/team/2.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Mr. Obua Joel</a></h4>
								<span class="designation">Deput Head Pharmacy</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
                        <div class="team-item">
							<img src="assets/images/team/2.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Mrs. Akiding Caroline</a></h4>
								<span class="designation">Clinical Instructor</span>
								<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="team-item">
							<img src="assets/images/team/3.jpg" alt="">
							<div class="content-part">
								<h4 class="name"><a href="team-single.html">Mr. Kironde Joshua</a></h4>
								<span class="designation">Technician</span>
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
            
            <!-- Team Section Start -->
            <div id="rs-team" class="rs-team style1 orange-color pt-94 pb-100 md-pt-64 md-pb-70 white-bg">
                <div class="container">
                    <div class="sec-title mb-50 md-mb-30">
                        <div class="sub-title blue">Staff</div>
                        <h2 class="title mb-0">Meet our Team of Expert Staff</h2>
                </div>
                    <div class="row">
					{{-- start team loop --}}
					@foreach($teams as $team)
						
					
                        <div class="col-lg-4 col-sm-6 mb-30">

                            <div class="team-item">
                                {{-- <img src="assets/frontend/images/team/1.jpg" alt=""> --}}
								@if ($team->team_photo)
                                        <a href="{!! asset($team->team_photo) !!}" target="_blank">
                                            <img 
                                                
                                                src="{{ asset($team->team_photo) }}" alt="preview"
                                                style="height:350px !important; width:350px !important; margin-left:20px;">
                                        </a>
                                    @else
                                        <p class="text-danger">No Photo</p>
                                    @endif
								
                                <div class="content-part">
                                    <h4 class="name"><a href="javascript::void(0)">{{ $team->team_name }}</a></h4>
								    <span class="designation">{{ $team->team_role }}</span>
                                    {{-- <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>

					@endforeach
					{{-- end team loop --}}
                       
                       
                       
					
                    </div>
                </div>
            </div>
            <!-- Team Section End -->
    
@endsection
