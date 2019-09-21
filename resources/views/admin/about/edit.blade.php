@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> Edit Profile</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li class="active">Edit Profile</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Basic Information</h3>
            <form class="form-material form-horizontal" method="POST" action="{{ route('abouts.update',$about->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                        <label class="col-md-12" for="profile">Profile</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="mymce" name="profile" rows="4">{{$about->profile}}</textarea>
                        </div>
                    </div>
                    <div class="form-group" style="text-align:right;">
                        <label class="col-md-12" for="ar_profile">نبــــذه</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="mymce" name="ar_profile">{{$about->ar_profile}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-12">Address</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="address" id="" placeholder="Address" value="{{$about->address}}">
                        </div>
                    </div>
                    <div class="form-group" style="text-align:right;">
                            <label for="ar_address" class="col-md-12">العنوان</label>
                            <div class="col-md-12">
                                <input class="form-control" style="text-align:right" type="text" name="ar_address" id="" placeholder="العنوان" value="{{$about->ar_address}}">
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="phone" class="col-md-12">Phone</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="phone" id="" placeholder="Tel-Phone" value="{{$about->tel}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-12">E-mail</label>
                        <div class="col-md-12">
                            <input class="form-control" type="text" name="email" id="" placeholder="E-mail" value="{{$about->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                   <label class="col-sm-12" for="num1">Number</label>
                                   <input type="number" name="num1" id="" class="form-control"> 
                                </div>
                                <div class="col-md-3">
                                  <label class="col-sm-12" for="img">Number</label>
                                  <input type="number" name="num2" id="" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-sm-12" for="img">Number</label>
                                    <input type="number" name="num3" id="" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-sm-12" for="img">Number</label>
                                    <input type="number" name="num4" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="#" alt="" width="200" height="100">
                                </div>
                                <div class="col-md-8">
        
                                    <label class="col-sm-12" for="img">Upload Article image</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control form-control-line" data-trigger="fileinput">
                                               <i class="glyphicon glyphicon-file fileinput-exists"></i> 
                                               <span class="fileinput-filename"></span>
                                            </div> 
                                            <span class="input-group-addon btn btn-default btn-file"> 
                                                <span class="fileinput-new">Select file</span> 
                                                <span class="fileinput-exists">Change</span>
                                            <input type="hidden" name="img">
                                            <input type="file" name="img"> 
                                        </span> 
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                         </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <a href="{{route('abouts.index')}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
            </form>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
        $(document).ready(function() {
            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                });
            }
        });
        </script>
@endsection