@php
    use App\Helpers\Template\Product;
    use App\Helpers\Link\ProductLink;
    $suppliers = Product::getListSupplier();
@endphp
<div class="category-content no-padding">
    <ul class="navigation navigation-main navigation-accordion">
        <li data-label="Quản Lý Chung">
            <a href="{{ route('user/index') }}">
                <i class="icon-home4"></i>
                <span>Quản Lý Chung</span>
            </a>
        </li>
        <li data-label="Quản Lý Bài Viết">
            <a href="javascript:void(0)">
                <i class="icon-price-tag2"></i>
                <span>Sản phẩm</span>
            </a>
            <ul class="second-menu-level">
                @foreach ($suppliers as $supplier)
                    @php
                        $supplier_link = ProductLink::getSupplierLink($supplier['id']);
                    @endphp
                    <li>
                        <a href="{{$supplier_link}}">
                            <span>{{$supplier['name']}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li data-label="Quản Lý Chung">
            <a href="{{route('cart/index')}}">
                <i class="icon-cart5"></i>
                <span>Giỏ hàng</span>
            </a>
        </li>
        <li data-label="Quản Lý Chung">
            <a href="{{route('user_order/index')}}">
                <i class="icon-cart5"></i>
                <span>Đơn hàng</span>
            </a>
        </li>
        <li data-label="Quản Lý Chung">
            <a href="{{route('user_order/customer')}}">
                <i class="icon-user"></i>
                <span>Khách hàng</span>
            </a>
        </li>
        <li data-label="Quản Lý Bài Viết">
            <a href="javascript:void(0)">
                <i class="icon-price-tag2"></i>
                <span>Tài chính</span>
            </a>
            <ul class="second-menu-level">
                <li>
                    <a href="{{route('user_order/income')}}">
                        <span>Doanh thu</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="#">
                        <span>Lịch sử thanh toán</span>
                    </a>
                </li> --}}
            </ul>
        </li>
        <li data-label="Tài khoản">
            <a href="{{ route('user_profile/form') }}">
                <i class="icon-info3"></i>
                <span>Tài khoản</span>
            </a>
        </li>
        <li data-label="Đăng xuất">
            <a href="{{ route('auth/logout') }}">
                <i class="icon-switch2"></i>
                <span>Đăng xuất</span>
            </a>
        </li>
    </ul>
</div>
