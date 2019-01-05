@extends('god.layout.admin')
@section('page', 'Dashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Admin</strong> Details
    </div>
    <div class="card-body card-block">
        <form action="" method="post" class="form">
            <div class="form-group">
                <label for="exampleInputName2" class="pr-1  form-control-label">Name</label>
                <input type="text" name="name" id="exampleInputName2" placeholder="{{ Auth::user()->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2" class="px-1  form-control-label">Email</label>
                <input type="email" name="email" id="exampleInputEmail2" readonly="True" placeholder="{{ Auth::user()->email }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2" class="px-1  form-control-label">Password</label>
                <input type="password" name="password" id="exampleInputPassword2" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2" class="px-1  form-control-label">Confirm Password</label>
                <input type="password" name="password" id="exampleInputPassword2" class="form-control">
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
    </div>
</div>
@endsection