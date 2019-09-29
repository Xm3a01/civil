@extends('admin.main')

@section('content')

<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 offset-md-3" style="margin-top:100px;">
        <div class="panel panel-default">
             <a href="{{route('users.edit',$user->id)}}" class="pull-right"><i class="fa fa-edit"></i></a>
            <div class="panel-heading">Your Profile</div>
            <div class="panel-wrapper collapse in">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection