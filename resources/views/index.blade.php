@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')


<section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="banner_content">
                    <h2>
                        Growing up your <br>
                        children with our most <br>
                        smart monitization <br>
                    </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <a class="primary-btn text-uppercase" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    </div>

    <section class="features_area section_gap">
        <div class="container">
            <div class="row">
                <!-- single feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="img/features/icon1.png" alt="">
                            <h4>Emergency Services</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Call Us: 215 - 3695 - 9584</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="img/features/icon2.png" alt="">
                            <h4>Doctors Schedule</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="img/features/icon3.png" alt="">
                            <h4>Online Appointment</h4>
                        </div>
                        <div class="feature_content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Get Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ Start About Area =================-->
    <section class="about_area lite_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5">
                    <div class="about_details lite_bg">
                        <h2>Result Management System</h2>
                        <p>The system offers:</p>
                        <ul class="list_wrap">
                            <li class="about_lists">The application will manage the information about various students enrolled in this course in different years.</li>
                            <li class="about_lists">the subjects offered during different years of the course,the marks obtained by the various subjects in different years.
                                .</li>
                            <li class="about_lists">The application will greatly simplify and speed up the result preparation and management process
                                .</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1">
                    <div class="about_right overlay">
                        <div class="about_inner">
                            <h4>We should follow these proverbs:</h4>
                            <p>Time and Tide wait for none</p>
                            <p>No pains no gains</p>

                            <p>All's well that ends well</p>
                            <p>Art is long, life is short</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="about_bg overlay"></div>
        </div>
    </section>
    <!--================ End About Area =================-->
    <!--================ Start Features Area =================-->
    <section class="features_area section_gap">
        <div class="container">
            <div class="row">
                <!-- single feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="{{asset('index/img/features/icon1.png')}}">
                            <h4>About Website</h4>
                        </div>
                        <div class="feature_content">
                            <p>The application will manage the information about various students enrolled in this course in different years.The application will greatly simplify and speed up the result preparation and management process
                            </p>
                            <div class="feature_btn">
                                <a href="#" class="f_btn">Call Us: 215 - 3695 - 9584</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="{{asset('index/img/features/icon2.png')}}" alt="">
                            <h4>About Users</h4>
                        </div>
                        <div class="feature_content">
                            <p>There are two kinds of users one is Administrator whose have control of the software.
                                And Another is The normal users such as students only view their result from this software
                                after login.
                            <div class="feature_btn">
                                <a href="#" class="f_btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single feature -->
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="feature_head">
                            <img src="{{asset('index/about.blade.php:1')}}" alt="">
                            <h4>About Authentication</h4>
                        </div>
                        <div class="feature_content">
                            <p>Before use this website, user must need to fill up a registration form.
                                After registration, he will be able to access this website. One administrator have control over the website.
                            <div class="feature_btn">
                                <a href="#" class="f_btn"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Features Area =================-->


    <!--
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">

                    </div>
                    <h2>Result Management System</h2>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--================End Home Banner Area =================-->



@include('layout.afterMain')

