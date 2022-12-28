@extends('user.main')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body panel-body-accent">
                <a class="media no-margin" href="#">
                    <div class="media-left media-middle">
                        <i class="icon-magazine icon-3x text-success-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">14</h3>
                        <span class="text-uppercase text-size-mini text-muted">THU NHẬP DỰ KIẾN</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="#">
                    <div class="media-left media-middle">
                        <i class="icon-price-tag2 icon-3x text-indigo-400"></i>
                    </div>
                    <div class="media-body text-right">
                        <h3 class="no-margin text-semibold">3</h3>
                        <span class="text-uppercase text-size-mini text-muted">THU NHẬP THỰC TẾ</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="#">
                    <div class="media-body">
                        <h3 class="no-margin text-semibold">6</h3>
                        <span class="text-uppercase text-size-mini text-muted">SỐ ĐƠN HÀNG</span>
                    </div>
                    <div class="media-right media-middle">
                        <i class="icon-notebook icon-3x text-danger-400"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-3">
            <div class="panel panel-body">
                <a class="media no-margin" href="#">
                    <div class="media-body">
                        <h3 class="no-margin text-semibold">14</h3>
                        <span class="text-uppercase text-size-mini text-muted">ĐƠN HÀNG THÀNH CÔNG</span>
                    </div>
                    <div class="media-right media-middle">
                        <i class="icon-folder3 icon-3x text-blue-400"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-body">
                <div class="dashboard-slide">
                    <div class="dashboard-slide-item">
                        <img src="{{ asset('obn-dashboard/img/slide-1.png') }}" alt="Dashboard slide 1"
                            class="img-responsive">
                    </div>
                    <div class="dashboard-slide-item">
                        <img src="{{ asset('obn-dashboard/img/slide-1.png') }}" alt="Dashboard slide 1"
                            class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title text-uppercase">Đơn hàng mới</h6>
                    <div class="heading-elements">
                        <span class="heading-text"><a href="#">Xem
                                tất cả</a></span>
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
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">SẢN PHẨM MỚI VỀ</h6>
                </div>
                <div class="panel-body">
                    <div class="row row-5">
                        <div class="col-md-2">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <img class="img-responsive" src="{{ asset('obn-dashboard/img/product-1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="product-text">
                                    <h4 class="product-title">
                                        <a href="#">Saffron JAHAN 1Gr – Trải nghiệm...</a>
                                    </h4>
                                    <p class="product-price">350.000 đ</p>
                                    <div class="product-price-discount">
                                        <div class="product-price-discount-item">
                                            <span>Đại lý</span>
                                            <span class="text-feature">(35%)</span>
                                            <span>122,500₫</span>

                                        </div>
                                        <div class="product-price-discount-item">
                                            <span>Đại lý</span>
                                            <span class="text-feature">(35%)</span>
                                            <span>122,500₫</span>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection
@section('custom_srcipt')
    <script>
        $('.dashboard-slide').slick({
            dots: false,
            infinite: true,
            speed: 500,
            prevArrow: '<button class="slick-prev slide-btn"> < </button>',
            nextArrow: '<button class="slick-next slide-btn"> > </button>',
        });
    </script>
@endsection
