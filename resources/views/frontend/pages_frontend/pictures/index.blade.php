@extends('frontend.layouts_frontend.master')
@section('title')
    Photo Gallery
@endsection
@section('content')
   <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/frontend/images/breadcrumbs/4.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">IPI Photo Gallery</h1>
                    <ul>
                        <li>
                            <a class="active" href="index2.html">IPI</a>
                        </li>
                        <li>Enjoy some our school activities</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            
            <!-- Events Section Start -->
            <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row margin-0">
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/frontend/images/gallery/1.jpg"><img src="assets/frontend/images/gallery/1.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">
                                <a class="image-popup" href="assets/frontend/images/gallery/2.jpg"><img src="assets/frontend/images/gallery/2.jpg" alt=""></a>
                            </div>
                       </div>
                       <div class="col-lg-4 mb-0 padding-0 col-md-6">
                            <div class="gallery-img">                                
                                <a class="image-popup" href="assets/frontend/images/gallery/3.jpg"><img src="assets/frontend/images/gallery/3.jpg" alt=""></a>
                            </div>
                       </div>
                   </div>
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->  
@endsection
