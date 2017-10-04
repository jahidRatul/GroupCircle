@extends('frontEnd.master')
@section("Titel")
    Home
@endsection()
@section("MainContent")
    <section  id="main-content">
        <section class="wrapper">


            <div class="agil-info-calendar">
                <!-- calendar -->
                <div class="col-md-7 agile-calendar">
                    <!--<div style="width: 50%" class="agile-calendar">-->
                    <div class="row">
                        @foreach($statusDataAlls as $statusDataAll)
                        <div style="padding: 5px;border: 1px solid #DDA2A4" class="w3-card-4 col-sm-12">
                            <div style="padding: 2px;border:1px solid #F4511E" class="panel panel-default text-left">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="{{asset('FrontEnd/images/a.png')}}" class="media-object"
                                                         style="width:60px">
                                                </div>
                                                <div class="media-body">
                                                    <h3 style="color: #F4511E" class="media-heading">{{$statusDataAll->name}}</h3><span class="glyphicon glyphicon-time"></span>
                                                    <small><i>Posted on <b> {{$statusDataAll->post_time}}</b></i></small><br><span class="glyphicon glyphicon-time"></span>
                                                    <small><i>Posted by <b> {{$statusDataAll->anonymous =='on' ? 'Anonymous Post':$statusDataAll->name }}</b></i></small><br><span class="glyphicon glyphicon-time"></span>
                                                    <small><i>Post type<b> {{$statusDataAll->option}}</b></i></small><br><span class="glyphicon glyphicon-time"></span>
                                                    <small><i>Share type<b> {{$statusDataAll->whoSee}}</b></i></small>
                                                    <div class="w3-row-padding" style="padding-top: 3%;padding-bottom: 3%">

                                                            <img class="w3-card-4  w3-image w3-col s10 "  src="{{asset($statusDataAll->upload_photo)}}"
                                                                 style="height: 60%;margin-bottom: 5px" alt=""
                                                                 >

                                                       {{-- <img class="w3-image w3-col s10 "  src="{{asset($statusDataAll->upload_photo)}}"
                                                             style="height: 60%" alt=""
                                                        >--}}
                                                        {{--<div class="w3-half">
                                                            <img width='240px' height='240px' src="{{asset($statusDataAll->upload_photo)}}"
                                                                 style="width:100%" alt="Nature"
                                                                 class="w3-margin-bottom">
                                                        </div>--}}
                                                    </div>
                                             {{--       <div class="w3-row-padding" style="margin:0 -16px">

                                                        <div class="">
                                                            <video width="100%" controls>
                                                                <source src="{{asset('FrontEnd/video/1.MP4')}}"
                                                                        type="video/mp4">

                                                                Your browser does not support HTML5 video.
                                                            </video>
                                                        </div>
                                                    </div>--}}
                                                    <div style="border: 1px solid #ff7122" class="well well-lg">{!! $statusDataAll->status !!}</div>

                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <span class="glyphicon glyphicon-thumbs-up"></span> <kbd>7</kbd>
                                        <!--<span class="badge">7</span>-->
                                    </button>

                                    <button type="button" class="btn btn-default btn-sm">
                                        <span class="glyphicon glyphicon-thumbs-down"></span> <kbd>7</kbd>

                                    </button>


                                    <button data-toggle="collapse" data-target="#{{$statusDataAll->id}}" type="button"
                                            class="btn btn-default btn-sm ">
                                        <span class="glyphicon glyphicon-comment"></span> <kbd>7</kbd>

                                    </button>

                                    <button type="button" class="btn btn-default btn-sm">
                                        <span class="glyphicon glyphicon-share-alt"></span>

                                    </button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span></button>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a onclick="return confirm('Are you sure to delete')"  href="{{url('/status/delete/'.$statusDataAll->id)}}">Delete</a>
                                            </li>
                                            <li><a href="{{url('/status/edit/'.$statusDataAll->id)}}">Eidt</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="{{$statusDataAll->id}}" class="collapse">

                                    <form action="/action_page.php">
                                        <div style="margin: 15px" class="input-group">
                                            <input type="text" class="form-control" placeholder="Comment" name="search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i
                                                            class="glyphicon glyphicon-hand-down"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div style="margin: 15px ; border: 1px solid #09A416" class="well well-sm">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{asset('frontEnd/images/a.png')}}" class="media-object"
                                                     style="width:60px">
                                            </div>
                                            <div class="media-body">
                                                <h3 style="color: #F4511E" class="media-heading">Moniruzzaman
                                                    ShadhiN</h3><span class="glyphicon glyphicon-time"></span>
                                                <small><i>Posted on February 19, 2016</i></small>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-thumbs-up"></span> <kbd>7</kbd>
                                            <!--<span class="badge">7</span>-->
                                        </button>

                                        <button type="button" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-thumbs-down"></span> <kbd>7</kbd>

                                        </button>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <span class="caret"></span></button>

                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Delete</a>
                                                </li>
                                                <li><a href="#">Smartphone</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                            @endforeach
                    </div>
                </div>
                <!-- //calendar -->
                <div class="col-md-5 w3agile-notifications">
                    <div class="w3-card-4 notifications">
                        <!--notification start-->

                        <header class="panel-heading">
                            Notification
                        </header>
                        <div class="notify-w3ls w3-small">
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a
                                                        href="#">Jonathan Smith</a></span> send you a mail
                                        </li>
                                        <li class="pull-right notification-time">1 min ago</li>
                                    </ul>
                                    <p w3-small>
                                        Urgent meeting for next proposal
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-danger">
                                <span class="alert-icon"><i class="fa fa-facebook"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a
                                                        href="#">Jonathan Smith</a></span> mentioned you in a post
                                        </li>
                                        <li class="pull-right notification-time">7 Hours Ago</li>
                                    </ul>
                                    <p>
                                        Very cool photo jack
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-success ">
                                <span class="alert-icon"><i class="fa fa-comments-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender">You have 5 message unread</li>
                                        <li class="pull-right notification-time">1 min ago</li>
                                    </ul>
                                    <p>
                                        <a href="#">Anjelina Mewlo, Jack Flip</a> and <a href="#">3 others</a>
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-warning ">
                                <span class="alert-icon"><i class="fa fa-bell-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender">Domain Renew Deadline 7 days ahead
                                        </li>
                                        <li class="pull-right notification-time">5 Days Ago</li>
                                    </ul>
                                    <p>
                                        Next 5 July Thursday is the last day
                                    </p>
                                </div>
                            </div>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                                <div class="notification-info">
                                    <ul class="clearfix notification-meta">
                                        <li class="pull-left notification-sender"><span><a
                                                        href="#">Jonathan Smith</a></span> send you a mail
                                        </li>
                                        <li class="pull-right notification-time">1 min ago</li>
                                    </ul>
                                    <p>
                                        Urgent meeting for next proposal
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!--notification end-->
                    </div>
                </div>


                <div class="clearfix"></div>
            </div>
            <!-- tasks -->

            <!-- //tasks -->
        </section>
        <!-- footer -->


        <!-- / footer -->
    </section>
@endsection()