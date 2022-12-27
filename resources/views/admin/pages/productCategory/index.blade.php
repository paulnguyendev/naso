@extends('admin.admin')
@section('navbar_title', 'Quản lý danh mục sản phẩm')
@section('navbar-right')
    <li>
        <a href="{{ route('productCategory/form') }}" style="padding:5px 5px">
            <button class="btn bg-info heading-btn" type="button">Tạo danh mục sản phẩm</button>
        </a>
    </li>
@endsection
@section('content')
    <div class="panel panel-flat">
        <table class="table table-xlg datatable-ajax" data-source="{{ route('productCategory/dataList') }}"
            data-destroymulti="https://dainghiagroup.com/admin/product/category/destroy-multi">
            <thead>
                <tr>
                    <th class="text-center" width="50"><input type="checkbox" bs-type="checkbox" value="all"
                            id="inputCheckAll"></th>
                    <th class="text-center" width="100">Hình ảnh</th>
                    <th>Tên</th>
                    <th>Đường dẫn</th>
                    <th width="70px" class="text-center">Sắp xếp</th>
                    <th data-orderable="false" width="100px"></th>
                </tr>
            </thead>
        </table>
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
                    return WBDatatables.showThumbnail(data.thumbnail);
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return WBDatatables.showTitle(data.description.title, data.route_edit, data.is_published, data
                        .published_at, ('<span class="tree-icon">¦––</span> ').repeat(data.depth));
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return (!data.seo.slug) ? '' : data.seo.slug;
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return WBDatatables.renderSortOrderColumn({
                        up: data.move_up,
                        down: data.move_down,
                        top: data.move_top,
                        bottom: data.move_bottom,
                    });
                },
                orderable: false,
                searchable: false
            },
            {
                data: null,
                render: function(data) {
                    return WBDatatables.showRemoveIcon(data.route_remove,
                        'Menu liên kết với trang này sẽ bị xóa theo, bạn có chắc muốn xóa không?');
                },
                orderable: false,
                searchable: false
            },
        ];
        WBDatatables.init('.datatable-ajax', columnDatas, {
            "ordering": false,
            "paging": false
        });
        WBDatatables.showAction();
    </script>
@endsection
