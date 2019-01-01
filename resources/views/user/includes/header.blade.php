<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
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

                <a class="navbar-brand" href="index.html">
                    <h1><img src="{{ asset('images/logo.png') }}" alt="logo"></h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    @auth
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
                            <li><a href="/people/username">Share Link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Profile <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="/user/profile">Edit Profile</a></li>
                            <li><a href="/user/logout">Logout</a></li>
                        </ul>
                    </li>
                    <li class=""><a href="/user/gods">Supernaturals</a></li>
                    @endauth
                    @guest
                    <li><a href="/user/login">Sign In</a></li>
                    <li><a href="/user/register">Sing Up</a></li>
                    @endguest
                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!--/#header-->