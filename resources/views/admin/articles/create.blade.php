@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Add Article</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li class="active">Add Article</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Basic Information</h3>
            <form class="form-material form-horizontal" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                   <label class="col-md-12" for="body">Article title</label>
                    <div class="col-md-12">
                        <input class="form-control" name="title" placeholder="Title">
                    </div>
                </div>
                <div class ="form-group">
                    <label class="col-md-12" for="body">Article body</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="mymce" name="body" rows="4"></textarea>
                    </div>
                </div>
                <div class="form-group"style="direction:rtl; text-align:right">
                   <label class="col-md-12" for="ar_title">العنوان</label>
                    <div class="col-md-12">
                        <input class="form-control" name="ar_title" placeholder=" العنوان">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="ar_body">Article arabic body</label>
                    <div class="col-md-12">
                        <textarea class="form-control" id="mymce" name="ar_body"></textarea>
                    </div>
                </div>
                <div class="form-group">
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
                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                <a href="{{route('articles.index')}}" class="btn btn-inverse waves-effect waves-light">Cancel</a>
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