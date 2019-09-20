@extends('admin.main') @section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">All Students</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li class="active">All Articles</li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Articles Table</h3>
                <div class="table-responsive">
                    <table id="articles-table" class="table table-striped dataTable no-footer" role="grid" aria-describedby="myTable_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                    style="width: 180px;">#</th>
                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 285px;">Body</th>
                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 285px;">Arabic</th>
                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 285px;">Image</th>
                                <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending"
                                style="width: 285px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr role="row" class="odd">
                                <th class="sorting_1">{{$article->id}}</th>
                                <td>{!! str_limit($article->body, $limit=20 , $end='<a href='.route('events.index').'> ... Read more </a>') !!}</td>
                                <td>{!! str_limit($article->ar_body, $limit=20 , $end='<a href='.route('events.index').'> ... Read more </a>') !!}</td>
                                <td><img src="{{Storage::url($article->img)}}" width="60" height="60" alt="logo"></td>
                                <td class="text-nowrap">
                                    <a href="{{route('articles.edit',$article->id)}}" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fa fa-pencil text-inverse m-r-10"></i>
                                    </a>
                                    <a href="{{route('articles.destroy', 1)}}" data-toggle="confirmation" data-original-title="Delete">
                                        <i class="fa fa-close text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
<script>
$(document).ready( function () {
    $('#articles-table').DataTable();
} );
</script>
@endsection
