<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="{{asset('index/index.html')}}"><img src="{{asset('index/img/b.jpg')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">

                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Members</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="{{url('personalInfo/Display')}}">Personal Info.</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('professionalInfo/Display')}}">Professional Info.</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contactInfo/Display')}}">Contact Info.</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('nomineeInfo/Display')}}">Nominee Info.</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('photo/Display')}}">Photos</a></li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Reports</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="{{url('report/Display')}}">Pay</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('ntreport/Display')}}">Notification/Task</a></li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Upload </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item "><a class="nav-link" href="{{url('upay/Display')}}">Upload Pay</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('nt/Display')}}">Upload N/Task</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{url('cost/Display')}}">Cost</a></li>

            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="search">
                        <i class="lnr lnr-magnifier" id="search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
</header>
<!--================ End Header Menu Area =================-->


<div class="row justify-content-center">

    <!--=================== side menu ====================-->

    <div class="col-lg-2 col-md-3 col-12 menu_block">

        <!--logo -->
        <div class="logo_box">
            <a href="#">
                <img src="{{asset('/index/assets/img/logo.jpg')}}" alt="SMCRI">
            </a>
        </div>
        <!--logo end-->

        <!--main menu -->
        <div class="side_menu_section">
            <ul class="menu_navCocoon">
                <li class="active">
                    <a href="{{asset('emedical')}}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <!--  $id= $request->user()->id; -->
                    <!--.'?id='.$PersonalInfoModel->user()->id-->
                    <a href="{{url('personalInfoEdit')}}">
                        Profiles
                    </a>
                </li>
                <li>
                    <a href="{{url('notification/display')}}">
                        Notification
                    </a>
                </li>
                <li>
                    <a href="{{url('task/display')}}">
                        Task
                    </a>
                </li>
                <li>
                    @if($userTable->userType==1)

                        <a href="{{url('users')}}">
                            UsersList
                        </a>

                    @endif
                </li>
                <li>
                    @if($userTable->userType==1)

                        <a href="{{url('folder/Display')}}">
                            Folder
                        </a>

                    @endif
                </li>

            </ul>
        </div>
        <!--main menu end -->





    </div>

    <!--=================== side menu End ====================-->

    <div class="col-lg-10 col-md-9 col-12 body_block  align-content-center">

        <!--================Home Banner Area =================-->






