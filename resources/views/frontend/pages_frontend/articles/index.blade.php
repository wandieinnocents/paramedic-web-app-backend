@extends('frontend.layouts_frontend.master')

@section('title')
    Blogs
@endsection

@section('content')
   
   <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/frontend/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Blog</h1>
                    <ul>
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		  <!-- Blog Section Start -->
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <h3 class="widget-title">Recent Posts</h3>
                                    <ul>
                                        <li><a href="#">Covid Reponse</a></li>
                                        <li><a href="#">NCD's in the Village</a></li>
                                        <li><a href="#">World Cancer Day</a></li>
                                        <li><a href="#">Community Outreach</a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div>
                                 
                               
                            </div>
                        </div>
                        <div class="col-lg-8 pr-50">
                            <div class="row">
                            {{-- start news --}}
                            @foreach($posts as $post)
                                
                            
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            <a href="#"><img src="{{ asset($post->post_photo) }}" alt=""></a>
                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title"><a href="#">{{ $post->post_title }}</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> {{ $post->created_at }}                                                       
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> {{ $post->post_created_by }}  
                                                        </div>
                                                    </li>   
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="#">{{ $post->post_category_r->post_category_name }}</a> 
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">   
                                                Being a medical training institution we train offer an all round practical feel to our students making them ...                                     
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="#">Continue Reading</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- end news --}}
                             
                             
                             
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
@endsection
