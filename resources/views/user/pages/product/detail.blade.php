@extends('user.main')
@section('navbar_title', $item['title'] ?? '-')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ $item['thumbnail'] }}" alt="" class="img-responsive entry-thumbnail">
                        </div>
                        <div class="col-md-7">
                            <div class="entry-top">
                                <h1 class="entry-title">{{ $item['title'] ?? '-' }}</h1>
                                <div class="desc-list">
                                    <div class="desc-item">
                                        <strong>Mã sản phẩm: </strong>
                                        <span>{{ $item['code'] ?? '-' }}</span>
                                    </div>
                                    <div class="desc-item">
                                        <strong>Thương hiệu: </strong>
                                        <span>Bravo</span>
                                    </div>
                                </div>
                                <div class="entry-discount">
                                    <p class="entry-price"><strong>720.000 đ</strong></p>
                                    <div class="discount-list">
                                        <div>
                                            <span>Chiết khấu đại lý</span>
                                            <span>:</span>
                                            <span>201,600₫</span>
                                        </div>
                                        <div>
                                            <span>Chiết khấu CTV</span>
                                            <span>:</span>
                                            <span>201,600₫</span>
                                        </div>
                                        <div>
                                            <span>Giảm giá tối đa</span>
                                            <span>:</span>
                                            <span>36,000 ₫</span>
                                        </div>
                                        <div>
                                            <span>Điểm tích lũy</span>
                                            <span>:</span>
                                            <span>200</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-buttons">
                                    <a href="{{ route('cart/add', ['id' => $item['id']]) }}" class="btn btn-primary"
                                        id="btnAddCart">Thêm vào giỏ</a>
                                    <a href="#" class="btn btn-info">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2>CHI TIẾT SẢN PHẨM</h2>
                            <div class="entry-content">
                                {!! $item_meta['content'] ?? '-' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="entry-supplier">
                        <h4>Bravo</h4>
                        <div class="entry-supplier-meta">
                            <p>0941666637</p>
                            <p>Số 84 Mai Hắc Đế – Phường Hà Huy Tập – Thành Phố Vinh – Nghệ An
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="panel panel-flat">
                <div class="panel-body">
                    <p>hello</p>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
@section('custom_srcipt')
@endsection
