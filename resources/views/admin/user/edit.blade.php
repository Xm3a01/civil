@extends('admin.main')

@section('content')
<div class="white-box">
        <h3 class="box-title m-b-0">Edit user</h3>
        <p class="text-muted m-b-30 font-13">This field for edit user  </p>
        <form class="form-horizontal" method="POST" action="{{route('users.update' , $user->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="col-md-12"> User <span class="help">Name</span></label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12" for="email">Email <span class="help"> Eamil </span></label>
                <div class="col-md-12">
                    <input type="email" id="example-email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input type="password" class="form-control" name="pasword" value="" placeholder="Password">
                </div>
            </div>
            <button class="btn btn-info" type="submit">Save</button>
        </form>
    </div>
@endsection