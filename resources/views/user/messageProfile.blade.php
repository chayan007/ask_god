@extends('user.layout.user')
@section('title', $user->name)
    @section('content')
        <div class="panel panel-primary" style="margin: 40px">
            <div class="panel-heading">
                <h3 class="panel-title" align="center">{{ $user->name }}</h3>
            </div>
            <div class="panel-body" align="center">
                <img src="@if($user->image) {{ $user->image }} @else {{ asset('images/admin.png') }}@endif" class="img-thumbnail" alt="" height="200px" width="200px">
                <form action="/user/sendMessage/{{ $user->username }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea class="form-control" name="message" rows="4" style="outline: 1px solid blue;"></textarea>
                    </div>
                    <label class="checkbox-inline" style="">
                        <input type="radio" name="is_anonymous" value="1">Anonymous
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" name="is_anonymous" value="0">Not Anonymous
                    </label>
                    <div class="submit" style="margin: 30px">
                        <button type="submit" class="btn btn-common btn-block">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection