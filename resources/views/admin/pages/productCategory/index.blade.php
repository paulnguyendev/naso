@extends('admin.admin')
@section('navbar_title',"Quản lý danh mục sản phẩm")
@section('navbar-right')
    <li>
        <a href="{{route('productCategory/form')}}" style="padding:5px 5px">
            <button class="btn bg-info heading-btn" type="button">Tạo danh mục sản phẩm</button>
        </a>
    </li>
@endsection
@section('content')
    <div class="panel panel-flat">
        <table class="table table-xlg datatable-ajax" data-source="{{ url('public/data/product-category.json') }}"
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
