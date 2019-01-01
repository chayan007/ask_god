@extends('user.layout.user')
@section('title','Profile')
    @section('content')
            @if(session('success'))
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
            <div class="panel panel-warning" align="center">
                <div class="panel-heading" style="font-family: 'Britannic Bold'; font-style: italic; font-weight: bolder;">{{ $user->name }}</div>
                <div class="panel-body">
                    <form action="/user/profile" method="POST" enctype="multipart/form-data">
                        @csrf
                        <img src="@if($user->image != NULL ) {{ $user->image }} @else {{ asset('images/robot.png') }} @endif" class="img-circle" alt="Display Pic" height="200px" width="300px">
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="face" aria-describedby="fileHelpId" style="margin: 10px">
                            <p class="form-text text-muted">
                                Image must show your proper face for accurate astrology results.
                            </p>
                        </div>
                        <img src="@if($user->image != NULL ) {{ $user->palm }} @else {{ asset('images/hand.jpg') }} @endif" class="img-circle" alt="Display Pic" height="200px" width="300px">
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="palm" aria-describedby="fileHelpId" style="margin: 10px">
                            <p class="form-text text-muted">
                                Image must show your proper palm for accurate palmistry results.
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" style="text-align: center; outline: 1px solid deepskyblue;" value="{{ $user->name }}" aria-describedby="helpId" placeholder="Enter your name..">
                            <p class="form-text text-muted">
                                Use your actual name. Numerology results depends on it.
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" style="text-align: center; outline: 1px solid deepskyblue;" value="{{ $user->username }}" aria-describedby="helpId" placeholder="Enter your username.." readonly="true">
                            <p class="form-text text-muted">
                                Sorry ! You cannot change this field.
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" style="text-align: center; outline: 1px solid deepskyblue;" value="{{ $user->email }}" aria-describedby="helpId" placeholder="Enter your email.." readonly="true">
                            <p class="form-text text-muted">
                                Sorry ! You cannot change this field.
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password1" id="" style="text-align: center; outline: 1px solid deepskyblue;" aria-describedby="helpId" placeholder="">
                            <p class="form-text text-muted">
                                Enter the new password once.
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="password2" id="" style="text-align: center; outline: 1px solid deepskyblue;" aria-describedby="helpId" placeholder="">
                            <p class="form-text text-muted">
                                Enter the new password again.
                            </p>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender" style="text-align: center; outline: 1px solid deepskyblue;">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                            <p class="form-text text-muted">
                                The gender shows innumerable ways of future possibilities.
                            </p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="bio" style="text-align: center; outline: 1px solid deepskyblue;" value="{{ $user->bio }}" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="religion" style="text-align: center; outline: 1px solid deepskyblue;" aria-describedby="helpId"
                                   placeholder="Enter religion.." value="{{ $user->religion }}">
                            <p class="form-text text-muted">
                                Your religion is needed to connect you to the best Gods. Not mandatory.
                            </p>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="verification" aria-describedby="fileHelpId" style="margin: 10px">
                            <p class="form-text text-muted">
                                Image or PDF of Govt. issued ID cards makes you premium member of this site for free.
                            </p>
                        </div>
                        <button type="submit" class="btn btn-common btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection