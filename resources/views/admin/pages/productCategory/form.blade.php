@extends('admin.admin')
@section('navbar_title', 'Quản lý danh mục sản phẩm / Tạo mới')
@section('navbar-right')
    <li>
        <a href="{{ route('productCategory/index') }}" style="padding:5px 0px 5px 5px">
            <button class="btn btn-default heading-btn" type="button">Hủy</button>
        </a>
    </li>
    <li>
        <div style="padding:5px 0px 5px 5px">
            <button type="button" class="heading-btn btn btn-info btn-ladda btn-ladda-spinner" onclick="nav_submit_form(this)"
                data-style="zoom-in" data-form="post-form"><span class="ladda-label">Lưu</span></button>
        </div>
    </li>
@endsection
@section('content')
    <form method="POST" action="{{route('productCategory/save')}}" accept-charset="UTF-8" id="post-form">
        <input name="_token" type="hidden" value="lGm8QXeWUIPrvDtkFZJbmCCGxuAhg8IudqnIWf5Z">
        <style type="text/css">
            #cke_wbcke_1531780663 {
                display: none;
            }
        </style>
        <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <label>Tên thể loại (*)
                        </label>
                        <input class="form-control" data-seo="title" name="name" type="text">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label>Mô tả ngắn
                        </label>
                        <textarea class="form-control" rows="5" data-seo="heading_description" name="description" cols="50"></textarea>
                        <span class="help-block"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">Phân loại</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse" class=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="Thể loại cha">Thể Loại Cha</label>
                        @include('admin.pages.productCategory.select',['categories' => $categories])
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">Hình đại diện</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse" class=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="single-media text-center">
                        <input id="thumbnail" name="thumbnail" type="hidden">
                        <div class="media-item">
                            <img class="img-thumbnail" data-no-image="https://via.placeholder.com/150x120&amp;text=No+Image"
                                src="https://via.placeholder.com/150x120&amp;text=No+Image" width="150px" height="120px"
                                id="holder_thumbnail" style="max-height: 100%">
                        </div>
                        <div class="clearfix"></div>
                        <a style="margin-top: 5px;margin-bottom: 3px" data-input="thumbnail" data-type="single"
                            data-preview="holder_thumbnail" id="lfm_thumbnail" class="btn ;btn-sm btn-default"
                            bs-type="filemanager">
                            Chọn hình
                        </a>
                    </div>
                </div>
            </div>
            <input name="taxonomy" type="hidden" value="product_cat">
        </div>
    </form>
@endsection
