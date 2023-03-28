@extends('layouts.master')

@section('content')

<section class="section section-search">
    <div class="container">
        <div class="banner-wrapper m-auto text-center aos" data-aos="fade-up">
            <div class="banner-header">
                <h1>Search Teacher in <span>Mentoring Appointment</span></h1>
                <p>Discover the best Mentors & institutions the city nearest to you.</p>
            </div>
             
            <!-- Search -->
            <div class="search-box">
                <form action="search.html">
                    <div class="form-group search-location">
                        <input type="text" class="form-control" placeholder="Search Location">
                    </div>
                    <div class="form-group search-info">
                        <input type="text" class="form-control" placeholder="Search School, Online educational centers, etc">
                    </div>
                    <button type="submit" class="btn btn-primary search-btn"><i><img src="assets/img/search-submit.png" alt=""></i> <span>Search</span></button>
                </form>
            </div>
            <!-- /Search -->
            
        </div>
    </div>
</section>
<!-- /Home Banner -->


<!-- Blog Section -->
<section class="section section-blogs">
    <div class="container">
    
        <!-- Section Header -->
        <div class="section-header text-center aos" data-aos="fade-up">
            <span>Lorem ipsum dolor</span>
            <h2>The Blogs & News</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <!-- /Section Header -->
        
        <div class="row blog-grid-row">
            <div class="col-md-6 col-lg-3 col-sm-12">
            
                <!-- Blog Post -->
                <div class="blog grid-blog aos" data-aos="fade-up">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="blog-details.html"><span>Tyrone Roberts</span></a>
                                </div>
                            </li>
                            <li><i class="far fa-clock"></i> 4 Dec 2019</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">What is Lorem Ipsum? Lorem Ipsum is simply</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
            
                <!-- Blog Post -->
                <div class="blog grid-blog aos" data-aos="fade-up">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="blog-details.html"><span>Brittany Garcia</span></a>
                                </div>
                            </li>
                            <li><i class="far fa-clock"></i> 3 Dec 2019</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">Contrary to popular belief, Lorem Ipsum is</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
            
                <!-- Blog Post -->
                <div class="blog grid-blog aos" data-aos="fade-up">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="blog-details.html"><span>Allen Davis</span></a>
                                </div>
                            </li>
                            <li><i class="far fa-clock"></i> 3 Dec 2019</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">The standard chunk of Lorem Ipsum used</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
            <div class="col-md-6 col-lg-3 col-sm-12">
            
                <!-- Blog Post -->
                <div class="blog grid-blog aos" data-aos="fade-up">
                    <div class="blog-image">
                        <a href="blog-details.html"><img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt="Post Image"></a>
                    </div>
                    <div class="blog-content">
                        <ul class="entry-meta meta-item">
                            <li>
                                <div class="post-author">
                                    <a href="blog-details.html"><span>William Lawrence</span></a>
                                </div>
                            </li>
                            <li><i class="far fa-clock"></i> 2 Dec 2019</li>
                        </ul>
                        <h3 class="blog-title"><a href="blog-details.html">The standard Lorem Ipsum passage, used</a></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <!-- /Blog Post -->
                
            </div>
        </div>
        <div class="view-all text-center aos" data-aos="fade-up"> 
            <a href="blog-list.html" class="btn btn-primary">View All</a>
        </div>
    </div>
</section>
<!-- /Blog Section -->	

<!-- Statistics Section -->
<section class="section statistics-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="statistics-list text-center aos" data-aos="fade-up">
                    <span>500+</span>
                    <h3>Happy Clients</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="statistics-list text-center aos" data-aos="fade-up">
                    <span>120+</span>
                    <h3>Online Appointments</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="statistics-list text-center aos" data-aos="fade-up">
                    <span>100%</span>
                    <h3>Job Satisfaction</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Statistics Section -->	

@endsection