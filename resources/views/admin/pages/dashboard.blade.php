@extends('admin.admin')
@section('navbar-right')
    <li><a href="{{ route('admin_profile/form') }}"><i class="icon-user"></i> <span class="hiden_1024_1350">Tài
                khoản</span></a>
    </li>
    <li><a href="{{ route('admin_auth/logout') }}"><i class="icon-switch2"></i> <span class="hiden_1024_1350">Thoát</span></a>
    </li>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="{{ route('admin/index') }}">
                    <div class="media-left media-middle">
                        <i class="icon-user icon-3x text-blue-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">{{ $totalUser }}</h3>
                        <span class="text-uppercase text-size-mini text-muted">Số lượng thành viên</span>
                    </div>

                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body panel-body-accent">
                <a class="media no-margin" href="{{ route('supplier/index') }}">
                    <div class="media-left media-middle">
                        <i class="icon-profile icon-3x text-success-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">{{ $totalSupplier }}</h3>
                        <span class="text-uppercase text-size-mini text-muted">Nhà cung cấp</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="{{ route('product/index') }}">
                    <div class="media-left media-middle">
                        <i class="icon-price-tag2 icon-3x text-indigo-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">{{ $totalProduct }}</h3>
                        <span class="text-uppercase text-size-mini text-muted">Sản phẩm</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="{{ route('admin_order/index', ['status' => 'new']) }}">
                    <div class="media-left media-middle">
                        <i class="icon-cart icon-3x text-danger-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">{{ $totalOrderNew }}</h3>
                        <span class="text-uppercase text-size-mini text-muted">Đơn hàng mới</span>
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
                    <a style="font-size: 16px" href="{{ route('product/index') }}">
                        <i class="icon-arrow-right6"></i>
                        Click vào đây để quản lý sản phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="icon-cog3 position-left"></i> QUẢN LÝ BÁN HÀNG</h5>
                </div>
                <div class="panel-body">
                    <a style="font-size: 16px" href="{{ route('admin_order/index') }}">
                        <i class="icon-arrow-right6"></i> Click vào đây để quản lý bán hàng</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-flat panel-order-dashboard">
                <div class="panel-heading">
                    <h6 class="panel-title text-uppercase">Đơn hàng mới</h6>
                    <div class="heading-elements">
                        <span class="heading-text"><a href="{{route('admin_order/index')}}">Xem
                                tất cả</a></span>
                    </div>
                </div>
                <table class="table table-xlg datatable-ajax" data-source="{{ route('user_order/dataList') }}"
                    data-destroymulti="{{ route('user_order/destroy-multi') }}">
                    <thead>
                        <tr>
                            <th class="text-center" width="50"><input type="checkbox" bs-type="checkbox" value="all"
                                    id="inputCheckAll"></th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày tạo đơn</th>
                            <th>Đại lý</th>
                            <th>Khách hàng</th>
                            <th>Thanh toán</th>
                            <th>Tổng đơn</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script_table')
    <script type="text/javascript">
        var page_type = 'category';
        var lang_code = 'vi';
        var default_language = 'vi';
        var url_extension = '/';
        var columnDatas = [{
                data: null,
                render: function(data) {
                    return WBDatatables.showSelect(data.id);
                },
                orderable: false,
                searchable: false
            },

            {
                data: null,
                render: function(data) {
                    return WBDatatables.showTitle(data.code, data.route_edit);
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.created_at) ? '' : data.created_at;
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.user.name) ? '' : data.user.name;
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.info_order) ? '' : data.info_order;
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.payment) ? '' : data.payment;
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.total) ? '' : data.total;
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.status) ? '' : data.status;
                },
                orderable: false,
                searchable: false
            },
        ];
        WBDatatables.init('.datatable-ajax', columnDatas, {
            "ordering": false,
            "paging": true
        });
    </script>
@endsection
