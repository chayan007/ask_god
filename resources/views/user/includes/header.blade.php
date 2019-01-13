<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                {{--  <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>  --}}
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/">
                    <h1><img src="{{ asset('images/askgod.png') }}" alt="Ask God" height="100px" width="300px"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li class="active"><a href="/">Home</a></li>
                    @endguest
                    @auth
                    <li class="active"><a href="/user/">Home</a></li>
                    <li class="dropdown"><a href="#">Guidance<i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="/user/ask">Ask a Question</a></li>
                            <li><a href="/user/answers">See Answers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Complaints <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="/user/addComplaint">Post a Complaint</a></li>
                            <li><a href="/user/myComplaints">My Complaints</a></li>
                            <li><a href="/user/complaints">All Complaints</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Messages <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="/user/getInboxMessages">Check Inbox</a></li>
                            <li><a href="/user/getOutboxMessages">Check Outbox</a></li>
                            <li><a href="/user/{{ Auth::user()->username }}">Confession Page</a></li>
                            <li><a href="/user/share">Share Link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Profile <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="/user/profile">Edit Profile</a></li>
                            <li><a href="/user/logout">Logout</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="/user/help">Help</a></li>
                    <li class=""><a href="/gods">Supernaturals</a></li>
                    @endauth
                    @guest
                    <li class=""><a href="/gods">Supernaturals</a></li>
                    <li class=""><a href="/help">Help</a></li>
                    <li><a href="/user/login">Sign In</a></li>
                    <li><a href="/user/register">Sing Up</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
<!--/#header-->
