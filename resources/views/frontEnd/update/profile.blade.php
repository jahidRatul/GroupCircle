@extends('frontEnd.master')
@section("Titel")
    Basic update
@endsection()
@section("MainContent")
    <section  id="main-content">
        <section class="wrapper">
            <div class="">
                <div class="agil-info-calendar">
                    <h1 class="text-center text-success">{{Session ::get('message')}}</h1>
                    <div class="w3-card-4 w3-small col-md-4 agile-calendar">

                        <div class=""><div class="row">

                                <div class="w3-white w3-text-grey w3-card-4">
                                    <div class="w3-display-container">
                                        <img src="{{asset('frontEnd/images/a.png')}}" style=" width:100%" alt="Avatar">
                                        <div class="w3-display-bottomleft w3-container w3-text-black">
                                            <h2><b>{{$userInfo->name}}</b></h2>
                                        </div>
                                    </div>
                                    <div class="w3-container">
                                        <br>
                                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b>{{$userInfo->name}}</b></p>
                                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><b>{{$userInfo->gender}}</b></p>
                                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b>{{$userInfo->email}}</b></p>
                                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b>{{$userInfo->phone}}</b></p>
                                         <hr>
                                        <div class="w3-card-4 w3-medium w3-bar w3-border w3-black">

                                            <a style="width: 25%" href="#" class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white"><i class="fa fa-photo"></i> photo</a>
                                            <a style="width: 25%"  href="#" class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white"><i class="fa fa-video-camera"></i> video</a>
                                            <a style="width: 25%"  href="#" class="w3-bar-item w3-button w3-hover-none w3-text-grey w3-hover-text-white"><i class="fa fa-connectdevelop"></i> posts</a>
                                            <div style="width: 25%" class="w3-dropdown-hover">
                                                <button class="w3-hover-none w3-button w3-text-grey w3-hover-text-white"><i class="fa fa-align-left"></i></button>
                                                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                                                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-comments-o"></i> chat</a>
                                                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-group"></i> Friend</a>
                                                    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-music"></i> Music</a>
                                                </div>
                                            </div>
                                        </div><br>
                                        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Skills</h2>
                                        <div class="w3-container">
                                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Professional Skills</h6>
                                            <p><b>{{$eduinfo->professionalSkills}}</b></p>
                                            <hr>
                                        </div><div class="w3-container">
                                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Personal Skills</h6>
                                            <p><b>{{$eduinfo->personalSkills}}</b></p>
                                            <hr>
                                        </div><div class="w3-container">
                                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Technical Skills</h6>
                                            <p><b>{{$eduinfo->technicalSkills}}</b></p>
                                            <hr>
                                        </div><div class="w3-container">
                                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Achievement</h6>
                                            <p><b>{{$eduinfo->achievement}}</b></p>
                                            <hr>
                                        </div>

                                        <br>
                                    </div>
                                </div><br>

                                <!-- End Left Column -->
                            </div>

                        </div>
                    </div>
                    <!-- //calendar -->
                    <div class="w3-card-4 w3-small col-md-6 w3agile-notifications">

                        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Personal Information</h2>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Gender</h6>
                                <p><b>{{$userInfo->gender}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Date Of Birth</h6>
                                <p><b>{{$userInfo->dateOfBirth}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>LivingIn</h6>
                                <p><b>{{$basicinfo->livingIn}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Language</h6>
                                <p><b>{{$basicinfo->language}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Birthday Place</h6>
                                <p><b>{{$basicinfo->birthdayPlace}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Status</h6>
                                <p><b>{{$basicinfo->status}}</b></p>
                                <hr>
                            </div><div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Religion</h6>
                                <p><b>{{$basicinfo->	religion}}</b></p>
                                <hr>
                            </div><div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Blood Group</h6>
                                <p><b>{{$basicinfo->	bloodGroup}}</b></p>
                                <hr>
                            </div><div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Social Network</h6>
                                <p><b>{{$basicinfo->socialNetwork}}</b></p>
                                <hr>
                            </div><div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Address</h6>
                                <p><b>{{$basicinfo->	address}}</b></p>
                                <hr>
                            </div>
                        </div>

                        <div class="w3-container w3-card-2 w3-white">
                            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Schools</h6>
                                <p><b>{{$eduinfo->schools}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>College</h6>
                                <p><b>{{$eduinfo->college}}</b></p>
                                <hr>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>High Schools</h6>
                                <p><b>{{$eduinfo->highSchools}}</b></p><br>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>University</h6>
                                <p><b>{{$eduinfo->university}}</b></p><br>
                            </div>
                            <div class="w3-container">

                                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Others</h6>
                                <p><b>{{$eduinfo->others}}</b></p><br>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
            </div>
        </section>

    </section>
@endsection()