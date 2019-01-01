@extends('user.layout.user')
@section('title', 'Complaints')
    @section('content')
        <div class="row" style="text-align: center">
            @foreach($complaints as $complaint)
            <div class="col-sm-6 col-md-4 col-lg-3" style="margin: 10px;">
                <div class="thumbnail">
                        <img src="{{ asset('images/robot.png') }}" width="100px" height="100px" class="img-circle">
                    <div class="caption">
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ substr($complaint->complaint,0,50) }} . . .</p>
                            <footer class="blockquote-footer"> <cite title="Source Title">{{ DB::table('users')->where('id', $complaint->user)->first()->name }}</cite></footer>
                        </blockquote>
                        <p>
                            <a href="/complaint/{{$complaint->slug}}" class="btn btn-common" role="button">See Problem</a>
                            <a href="/complaint/report/{{$complaint->id}}" class="btn btn-common" role="button">Report</a>
                        </p>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    @endsection