@extends('god.layout.admin')
@section('page', 'Users')
@section('content')
    @if(session('update'))
        <div class="alert alert-success" role="alert">
            <strong>{{ session('update') }}</strong>
        </div>
    @endif
    @if(session('delete'))
        <div class="alert alert-danger" role="alert">
            <strong>{{ session('delete') }}</strong>
        </div>
    @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">List of Users</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Bio</th>
                        <th>Face</th>
                        <th>Username</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->bio }}</td>
                            <td><img src="{{ Storage::url($user->face) }}"
                                     class="img-thumbnail" height="50px" width="100px"
                                     alt="User"></td>
                            <td>{{ $user->username }}</td>
                            <td><!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                                        data-target="#modelId{{ $user->id }}">
                                    Update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modelId{{ $user->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="modelTitleId">Update {{ $user->name }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/updateProduct/{{ $user->id }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                    @csrf
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Product </label></div>
                                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Product" class="form-control"><small class="form-text text-muted">Just the Product Name</small></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price </label></div>
                                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="price" placeholder="Price" class="form-control"><small class="form-text text-muted">Enter 0 for 'Contact for Price'</small></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Description</label></div>
                                                        <div class="col-12 col-md-9"><textarea name="description" id="textarea-input" rows="9" placeholder="Describe Product..." class="form-control"></textarea></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Category</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                                <option value="#">Please select</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="selectLg" class=" form-control-label">Company</label></div>
                                                        <div class="col-12 col-md-9">
                                                            <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                                                <option value="#">Please select</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image1" class="form-control-file"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image2" class="form-control-file"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="image3" class="form-control-file"></div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Brochure</label></div>
                                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="brochure" class="form-control-file"></div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-block">
                                                        Submit
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><a id="deletebtn" class="btn btn-outline-danger btn-sm" href="/deleteLord/{{ $user->id }}" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection