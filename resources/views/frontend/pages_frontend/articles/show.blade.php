@extends('frontend.layouts_frontend.master')

@section('title')
    Post Details
@endsection

@section('content')
 <div class="main-content">
           <div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="{{ asset('assets/frontend/images/breadcrumbs/2.jpg') }}" alt="Breadcrumbs Image">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Post Details</h1>
							<ul>
								<li>
									<a class="active" href="index-2.html">Home</a>
								</li>
								<li>Post</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->
            
           <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">
                        <div class="bs-img">
                            <a href="#"><img src="{{ asset($post->post_photo) }}" alt=""></a>
                        </div>
                       <div class="blog-full">
                           <ul class="single-post-meta">
                               <li>
                                   <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{ $post->created_at }} </span>
                               </li> 
                               <li>
                                   <span class="p-date"> <i class="fa fa-user-o"></i> {{ $post->post_created_by }}  </span>
                               </li> 
                               <li class="Post-cate">
                                   <div class="tag-line">
                                       <i class="fa fa-book"></i>
                                       <a href="#">{{ $post->post_category_r->post_category_name }}</a>
                                   </div>
                               </li>
                           </ul>
                           <h2>{{ $post->post_title }}</h2>
                           <div class="blog-desc">
                               <p>
                                {{ $post->post_description}}    
                                 </p>
                           </div>
                         
                         
                       </div>
                   </div>
                   
                   {{-- <div class="comment-area">
                      <div class="comment-full">
                          <h3 class="reply-title">Leave a Reply</h3>
                            <p>
                              <span>Your email address will not be published. Required fields are marked </span>
                            </p>
                            <form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name*</label>
                                            <input type="text" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email*</label>
                                            <input type="email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 mb-35">
                                        <div class="form-group">
                                            <label>Your comment here...</label>
                                            <textarea cols="40" rows="10" class="textarea form-control" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="submit-btn">
                                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                            </div>
                      </div>
                   </div> --}}
                </div>
            </div>
            <!-- Blog Section End -->  
            
        </div> 
@endsection
