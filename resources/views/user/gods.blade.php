@extends('user.layout.user')
@section('title', 'Gods')

@section('content')
    <center>
        <div class="dropdown">
        <button class="dropbtn btn btn-block">Category</button>
        <div class="dropdown-content">
            <a href="/gods/">All</a>
            <a href="/godSort/God">Gods</a>
            <a href="/godSort/Angel">Angels</a>
            <a href="/godSort/DemiGod">DemiGods</a>
            <a href="/godSort/Supernatural">Supernaturals</a>
            <a href="/godSort/Demon">Demons</a>
            <a href="/godSort/Devil">Devil</a>
        </div>
        </div>
        <style>
            /* Dropdown Button */
            .dropbtn {
                background-color: #2f6ee0;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                display: block;
                width: 100%;
                margin: 10px;
                border: 2px groove darkblue;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #ddd;}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {display: block;}

            /* Change the background color of the dropdown button when the dropdown content is shown */
            .dropdown:hover .dropbtn {background-color: #3e8e41;}
        </style>
    </center>
    <div class="row" style="text-align: center">
        @foreach($lords as $lord)
            <div class="col-sm-6 col-lg-2" style="margin: 5px; height: 400px;">
                <div class="thumbnail">
                    <img src="{{ Storage::url($lord->image) }}" width="100px" height="100px" class="img-circle">
                    <div class="caption">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ substr($lord->description,0,50) }} . . .</p>
                            <footer class="blockquote-footer"> <cite title="Source Title">{{ $lord->name }}, {{ $lord->category }}</cite></footer>
                        </blockquote>
                        <p>
                            <a href="/gods/{{ $lord->slug }}" class="btn btn-common btn-block" role="button">See More</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <center>
        {{ $lords->links() }}
    </center>
@endsection