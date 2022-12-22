@extends('admin.admin')
@section('navbar-right')
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="icon-bubbles4"></i> <span class="hiden_1024_1350">Thông báo</span>
        </a>
    </li>
    <li><a href="{{ route('admin_profile/index') }}"><i class="icon-user"></i> <span class="hiden_1024_1350">Tài
                khoản</span></a>
    </li>
    <li><a href="{{ route('admin_auth/logout') }}"><i class="icon-switch2"></i> <span
                class="hiden_1024_1350">Thoát</span></a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body panel-body-accent">
                <a class="media no-margin" href="https://dainghiagroup.com/admin/post">
                    <div class="media-left media-middle">
                        <i class="icon-magazine icon-3x text-success-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">14</h3>
                        <span class="text-uppercase text-size-mini text-muted">Bài viết</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="https://dainghiagroup.com/admin/product">
                    <div class="media-left media-middle">
                        <i class="icon-price-tag2 icon-3x text-indigo-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">3</h3>
                        <span class="text-uppercase text-size-mini text-muted">Sản phẩm</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="https://dainghiagroup.com/admin/post/category">
                    <div class="media-body">
                        <h3 class="no-margin text-semibold">6</h3>
                        <span class="text-uppercase text-size-mini text-muted">Thể loại bài viết</span>
                    </div>
                    <div class="media-right media-middle">
                        <i class="icon-notebook icon-3x text-danger-400"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="https://dainghiagroup.com/admin/product/category">
                    <div class="media-body">
                        <h3 class="no-margin text-semibold">14</h3>
                        <span class="text-uppercase text-size-mini text-muted">Thể loại sản phẩm</span>
                    </div>
                    <div class="media-right media-middle">
                        <i class="icon-folder3 icon-3x text-blue-400"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="icon-menu3 position-left"></i> QUẢN LÝ SẢN PHẨM</h5>
                </div>
                <div class="panel-body">
                    <a style="font-size: 16px" href="#">
                        <i class="icon-arrow-right6"></i>
                        Click vào đây để quản lý sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="icon-cog3 position-left"></i> QUẢN LÝ BÀI VIẾT</h5>
                </div>
                <div class="panel-body">
                    <a style="font-size: 16px" href="#">
                        <i class="icon-arrow-right6"></i> Click vào đây để quản lý bài viết</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title text-uppercase">Đơn hàng mới</h6>
                    <div class="heading-elements">
                        <span class="heading-text">
                            <a href="#">Xem tất cả</a></span>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Khách hàng</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
