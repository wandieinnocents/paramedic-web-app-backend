@extends('frontend.layouts_frontend.master')

@section('title')
    Volunteer
@endsection

@section('content')
  
   <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/frontend/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Faq</h1>
                    <ul>
                        <li>
                            <a class="active" href="index-2.html">Home</a>
                        </li>
                        <li>Faq Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

           <section class="register-section pt-100 pb-100">
                <div class="container">
                    <div class="register-box">
                        
                        <div class="sec-title text-center mb-30">
                            <h2 class="title mb-10">Want to Volunteer with us ?</h2>
                            <h6>Register Here</h6>
                        </div>
                        
                        <!-- Login Form -->
                        <div class="styled-form">
                            <div id="form-messages"></div>
                            <form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">                               
                                <div class="row clearfix">                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12 mb-25">
                                        <input type="text" id="Name" name="Full Name" value="" placeholder="Full Name" required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <!-- <div class="form-group col-lg-12">
                                        <input type="text" id="last" name="lname" value="" placeholder="Last Name" required>
                                    </div> -->
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="email" id="email" name="email" value="" placeholder="Email address " required>
                                    </div>
                                    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="number" id="user" name="phone_number" value="" placeholder="Phone Number" required>
                                    </div>    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="text" id="education" name="education_level" value="" placeholder="Education Level" required>
                                    </div>    
                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <input type="date" id="Confirm" name="date_of_birth" value="date" placeholder="Date Of Birth" required>
                                    </div>

                                    <!-- Form Group -->
                                    <div class="form-group col-lg-12">
                                        <h5>Upload Your Photo here</h5>
                                        <input type="file" id="photo" name="photo" value="" placeholder="Volunteer Photo" required>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea id="message" name="message" value="" placeholder="Leave Your message here" required></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="row clearfix">
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-1"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-2"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <div class="radio-box">
                                                    <input type="radio" name="remember-password" id="type-3"> 
                                                </div>
                                            </div>
                                            <!-- Column -->
                                            <div class="column col-lg-12 col-md-12 col-sm-12">
                                                <div class="check-box">
                                                    <input type="checkbox" name="remember-password" id="type-4"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                        <button type="submit" class="readon register-btn" style="background-color: blue;"><span class="txt">Send us your Message Today</span></button>
                                    </div>
                                    
                                    <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="users">Already have an account? <a href="login.html">Sign In</a></div>
                                    </div> -->
                                    
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                   
                </div>
            </section>


@endsection
