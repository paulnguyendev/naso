@php
    use App\Helpers\Obn;
    use App\Helpers\User;
    use App\Helpers\Link\ProductLink;
    use App\Helpers\Template\Product;
@endphp
@extends('frontend.main')
@section('content')
    <div class="row row-banner">
        <div class="col-md-3 vertical-menu">
            <div class="panel panel-body ">
                <ul>
                    @foreach ($categories as $category)
                        @php
                            $link = ProductLink::getLinkProductCategory($category['id']);
                            $thumbnail = Obn::showThumbnail($category['thumbnail']);
                        @endphp
                        <li>
                            <a href="{{ $link }}">
                                <img src="{{ $thumbnail }}" alt="">
                                <span>{{ $category['name'] ?? '-' }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-9 banner-home-center">
            <div class="panel panel-body ">
                <div class="dashboard-slide">
                    <div class="dashboard-slide-item">
                        <img src="{{ asset('obn-dashboard/img/slide-1.png') }}" alt="Dashboard slide 1"
                            class="img-responsive">
                    </div>
                    <div class="dashboard-slide-item">
                        <img src="{{ asset('obn-dashboard/img/slide-2.png') }}" alt="Dashboard slide 1"
                            class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-3 banner-home-right">
            <div class="panel panel-body ">
                <img src="{{ asset('home/images/banner-home-right.png') }}" alt="" class="img-responsive">
            </div>
        </div> --}}
    </div>
    <div class="row row-banner-bottom">
        <div class="col-md-3">
            <img src="{{ asset('home/images/wolf_cate_product_img_1.gif') }}" alt="">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('home/images/wolf_cate_product_img_1.gif') }}" alt="">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('home/images/wolf_cate_product_img_1.gif') }}" alt="">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('home/images/wolf_cate_product_img_1.gif') }}" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="product-wrap">
                <h3>HÀNG MỚI VỀ</h3>
                <div class="product-home-list">
                    @if ($products)
                        @foreach ($products as $product)
                            @php
                                $thumbnail = Obn::showThumbnail($product['thumbnail']);
                                $link = ProductLink::getLinkProductDetail2($product['id']);
                                $price = $product['regular_price'] ?? 0;
                                $price = Product::getPriceProduct($price);
                            @endphp
                            <div class="product-home-item">
                                <a href="{{ $link }}"><img src="{{ $thumbnail }}" alt=""
                                        class="img-responsive product-thumb"></a>
                                <div class="product-home-text">
                                    <h3 class="product-home-title">
                                        <a href="{{ $link }}">{{ $product['title'] ?? '-' }}
                                        </a>
                                    </h3>
                                    <p class="product-home-price">
                                        <strong> {{ $price }}
                                        </strong>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach ($product_groups as $product_group)
                <div class="product-wrap">
                    @php
                        $total_of_group = $product_group->products()->count();
                        $products_of_group = $product_group->products()->get();
                    @endphp
                    @if ($total_of_group > 0)
                        <h3>{{ $product_group['name'] ?? '-' }}</h3>
                        <div class="product-home-list">
                            @foreach ($products_of_group as $product)
                                @php
                                    $thumbnail = Obn::showThumbnail($product['thumbnail']);
                                    $link = ProductLink::getLinkProductDetail2($product['id']);
                                    $price = $product['regular_price'] ?? 0;
                                    $price = Product::getPriceProduct($price);
                                @endphp
                                <div class="product-home-item">
                                    <a href="{{ $link }}"><img src="{{ $thumbnail }}" alt=""
                                            class="img-responsive product-thumb"></a>
                                    <div class="product-home-text">
                                        <h3 class="product-home-title">
                                            <a href="{{ $link }}">{{ $product['title'] ?? '-' }}
                                            </a>
                                        </h3>
                                        <p class="product-home-price">
                                            <strong> {{ $price }}
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <div class="row row-supplier">
        <div class="col-md-12">
            <h3>NHÀ CUNG CẤP </h3>
        </div>
        @foreach ($suppliers as $supplier)
            @php
                $thumbnail = Obn::showThumbnail($supplier['thumbnail']);
                $id = $supplier['id'];
            @endphp
            <div class="col-md-2 supplier-item">
                <a href="{{route('fe_product/supplier',['id' => $id])}}"><img src="{{ $thumbnail }}" alt="" class="img-responsive"></a>
            </div>
        @endforeach

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
