<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
	<title>NASO | NỀN TẢNG KINH DOANH 0 ĐỒNG</title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"><![endif]-->
	<!-- favicon -->
	<link rel="shortcut icon" href="favicon.png" sizes="16x16" />
	<!-- include Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- include Fontawesome icons css -->
	<link rel="stylesheet" href="{{asset('home/css/fontawesome-all.min.css')}}" />
	<!-- include Bootstrap css -->
	<link rel="stylesheet" href="{{asset('home')}}/css/bootstrap.min.css" />
    <!-- include fatNav css -->
    <link rel="stylesheet" href="{{asset('home')}}/css/jquery.fatNav.css" />
    <!-- include animate css -->
    <link rel="stylesheet" href="{{asset('home')}}/css/animate.css" />
    <!-- include chart css -->
    <link rel="stylesheet" href="{{asset('home')}}/css/chart.css" />
	<!-- include app main.css -->
    <link rel="stylesheet" href="{{asset('home')}}/css/main.css" />
	<!-- include app responsive css -->
	<link rel="stylesheet" href="{{asset('home')}}/css/responsive.css" />
	
</head>
<body>
    <!--[if lt IE 10]>
        <p class="browserupgrade alert alert-danger" role="alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- start app preloader -->
    {{-- <div class="unicrypt-pre-con">
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute"><img src="{{asset('home')}}/images/loader.svg" alt="" /></div>
            </div>
        </div>
    </div> --}}
    <!-- //end app preloader -->
    <!-- start wrapper -->
    <div id="wrapper" class="overflow-hidden">
        <div class="fat-nav"></div>
        <!-- start header-container -->
        <header class="header-container position-absolute">
        	<div class="container">
        		<div class="row header-area justify-content-between pt-50 pb-20">
    				<div class="logo">
                        <a href="{{route('home/index')}}"><img src="{{asset('home')}}/images/logo.png" alt="" width="216" height="39" /></a>
                    </div>
    				<div class="menu-area d-flex flex-wrap">
    					<nav class="main-menu">
    						<ul class="nav">
    							<li class="current-menu-item menu-item-has-children"><a href="index.html">Trang chủ</a>  </li>
                                <li><a href="#gioithieu">Giới thiệu</a></li>
                                <li><a href="#cacbuoc"> Bán hàng    </a></li>
                                <li><a href="#camket"> Cam kết      </a></li>
                                <li><a href="#hoidap"> Hỏi đáp     </a></li>
                                <li><a href="#daily">  Đại lý  </a></li>
    						</ul>
    					</nav>
                        <div class="header-right">
                            <div class="device-btn"><a href="#lienhe">Liên hệ </a></div>
                        </div>
    				</div>
        		</div>
    		</div>
        </header>
        <!-- //end .header-container -->
        <!-- start banner-container -->
        <div class="banner-container">
            <div class="container">
    			<div class="row banner-content-area justify-content-between">
                    <div class="col-12 col-md-10 col-lg-6 banner-content">
                        <div class="banner-cont-info text-white wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <h5 class="text-white">NASO - Nền tảng kinh doanh online 0 đồng</h5>
                            <h1 class="text-white">BÁN HÀNG ONLINE KHÔNG CẦN BỎ VỐN</h1>
                            <p class="text-white">Bạn không cần bỏ vốn vẫn có thể tiếp cận hơn 300 mặt hàng uy tín, chất lượng với mức chiết khấu lên đến 50%. Thu nhập không giới hạn, kiếm tiền mọi lúc mọi nơi.</p>
                            <div class="unc-btn-area d-flex flex-wrap">
                                <a class="unc-btn text-white" href="{{route('auth/login')}}">Tham gia ngay</a>
                                <div class="inv-social">
                                  
                                    <a target="_blank" href="{{route('auth/login')}}"><i class="fab fa-windows"></i></a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn-scroll skip_swing" href="#section0"><span></span></a>
            </div>
        </div>
        <!-- //end .banner-container -->
        <!-- start three-col-container -->
        <div class="three-col-container">
            <div class="container">
    			<div class="row three-col-area">
                    <div class="col-12 col-md-12 col-lg-4 mb-40 three-col wow zoomIn" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="three-col-info pt-60 pb-50 mobile-pb-30 mobile-pt-40">
                            <div class="three-col-icon">
                                <img src="{{asset('home')}}/images/col-icon1.png" alt="" width="108" height="120" />
                            </div>
                            <div class="three-col-cont">
                                <h3>SẢN PHẨM ĐA DẠNG, UY TÍN, CHẤT LƯỢNG</h3>
                                <p>NASO hiện đang cung cấp hơn 300 mặt hàng uy tín, chất lượng từ các thương hiệu nổi tiếng trong và ngoài nước. Có giấy tờ kiểm định, xuất xứ rõ ràng</p>
                                <a class="more-btn" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 mb-40 three-col wow zoomIn" data-wow-duration="1s">
                        <div class="three-col-info pt-60 pb-50 mobile-pb-30 mobile-pt-40">
                            <div class="three-col-icon">
                                <img src="{{asset('home')}}/images/col-icon2.png" alt="" width="118" height="120" />
                            </div>
                            <div class="three-col-cont">
                                <h3>MÔ HÌNH KINH DOANH 5K ĐỘC ĐÁO</h3>
                                <p>NASO là mô hình kinh doanh online với tiêu chí 5K: Không vốn, không ôm hàng, không giao hàng, không đơn độc, không áp lực doanh số</p>
                                <a class="more-btn" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 mb-40 three-col wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="three-col-info pt-60 pb-50 mobile-pb-30 mobile-pt-40">
                            <div class="three-col-icon">
                                <img src="{{asset('home')}}/images/col-icon3.png" alt="" width="116" height="120" />
                            </div>
                            <div class="three-col-cont">
                                <h3>CUNG CẤP CÁC GIẢI PHÁP MARKETING</h3>
                                <p>NASO cung cấp sẵn kho tư liệu về hình ảnh, bài viết, video về sản phẩm đa dạng, chi tiết, đào tạo kĩ năng bán hàng, tư vấn và chăm sóc khách hàng</p>
                                <a class="more-btn" href="#"></a>
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
        </div>
        <!-- //end .three-col-container -->
        <!-- start invented-container -->
        <div id="section0" class="invented-container overflow-hidden">
            <div class="container"  id='gioi_thieu'>
                <div class="row invented-area pt-70 pb-40 mobile-pt-45 justify-content-between">
                    <div class="col-12 col-md-6 col-lg-6 invented-left">
                        <div class="invented-img wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <img src="{{asset('home')}}/images/hero-img.png" alt="" width="626" height="556" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 invented-cont wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <h3>Giới thiệu về NASO</h3>
                        <h2>NASO - Nền tảng kinh doanh 0 đồng</h2>
                        <p>NASO là cầu nối tuyệt vời giúp các đại lý có cơ hội kiếm thêm thu nhập tốt hơn. Đồng thời giúp nhà cung cấp có được đơn vị bán hàng hiệu quả hơn, tăng doanh thu bán hàng mà không cần bỏ ra nhiều chi phí. So với việc kinh doanh kiểu truyền thống thì mô hình kinh doanh mà NASO đưa ra giúp giải quyết được vấn đề kinh doanh như hiện nay.</p>
                        <p>Đối với khách hàng khi sử dụng sản phẩm mà đại lý cung cấp có thể yên tâm. Bởi nhà cung cấp của NASO cam kết hàng chuẩn, chất lượng cao, giá thành hợp lý. NASO đảm bảo những quyền lợi tốt nhất dành cho nhà cung cấp cũng như đại lý bán hàng. </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end .invented-container -->
        <!-- start unc-inventment-container -->
        <section class="unc-inventment-container overflow-hidden">
            <div class="container">
                <div class="row pt-20 pb-90 mobile-pb-20">
                    <div class="col-12 col-md-12 col-lg-8 mobile-pb-0">
                        <div class="unc-inventment-content pt-110 mobile-pt-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                            <h3>NASO VỚI ĐẠI LÝ</h3>
                            <h2>Bán hàng online cực kì dễ dàng</h2>
                            <p>Chỉ cần 1 lần đăng ký, bạn đã trở thành đối tác chính thức của NASO. Là cầu nối trung gian quan trọng, giúp các nhà bán hàng đơn giản hóa trong hoạt động kinh doanh trực tuyến.</p>
                            <div class="unc-inv-col-area">
                                <div class="unc-inv-col">
                                    <div class="unc-inv-col-row">
                                        <div class="unc-inv-col-img">
                                            <img src="{{asset('home')}}/images/inv-col-img1.png" alt="" width="60" height="60" />
                                        </div>
                                        <div class="unc-inv-col-cont">
                                            <h4>KHÔNG MẤT VỐN</h4>
                                            <p>Bạn không cần bỏ vốn nhập hàng vẫn tiếp cận hàng trăm sản phẩm kèm theo mức chiết khấu cao khi là đại lý của NASO.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="unc-inv-col">
                                    <div class="unc-inv-col-row">
                                        <div class="unc-inv-col-img">
                                            <img src="{{asset('home')}}/images/inv-col-img2.png" alt="" width="60" height="60" />
                                        </div>
                                        <div class="unc-inv-col-cont">
                                            <h4>KHÔNG GIAO HÀNG</h4>
                                            <p>Tạo đơn hàng trên ứng dụng, NASO sẽ giúp bạn vận chuyển đến khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="unc-inv-col">
                                    <div class="unc-inv-col-row">
                                        <div class="unc-inv-col-img">
                                            <img src="{{asset('home')}}/images/inv-col-img3.png" alt="" width="60" height="60" />
                                        </div>
                                        <div class="unc-inv-col-cont">
                                            <h4>KHÔNG ÔM HÀNG</h4>
                                            <p>Hợp tác cùng NASO không ôm hàng, không lo hàng tồn kho. Hạn chế được những rủi ro, khó khăn trong việc tự kinh doanh. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="unc-inv-col">
                                    <div class="unc-inv-col-row">
                                        <div class="unc-inv-col-img">
                                            <img src="{{asset('home')}}/images/inv-col-img4.png" alt="" width="60" height="60" />
                                        </div>
                                        <div class="unc-inv-col-cont">
                                            <h4>CUNG CẤP CÁC GIẢI PHÁP MARKETING</h4>
                                            <p>NASO cung cấp sẵn kho tư liệu bài viết, hình ảnh, video sản phẩm, hỗ trợ đào tạo bán hàng, chăm sóc khách hàng. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //end .unc-inventment-container -->
        <!-- start features-bns-container -->
        <div class="features-bns-container overflow-hidden">
            <div class="container">
                <div class="row justify-content-between pt-110 pb-70 mobile-pt-50 mobile-pb-30">
                    <div class="col-12 col-md-5 features-bns-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{asset('home')}}/images/features-bns-img.png" alt="" width="600" height="768" />
                    </div>
                    <div class="col-12 col-md-6 features-bns-right mobile-pt-10 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <div class="features-bns-cont">
                            <h3>NASO VỚI NHÀ CUNG CẤP</h3>
                            <h2></h2>
                            <p>NASO sẽ giúp nhà cung cấp gia tăng doanh thu từ các đơn hàng của đại lý, đồng thời giảm thiểu các chi phí kinh doanh đáng kể</p>
                            <div class="features-bns-area">
                                <div class="features-bns-col-row">
                                    <div class="features-bns-col-img">
                                        <img src="{{asset('home')}}/images/features-bns-icon1.png" alt="" width="60" height="60" />
                                    </div>
                                    <div class="features-bns-col-cont">
                                        <h4>GIẢM CHI PHÍ VẬN HÀNH DOANH NGHIỆP</h4>
                                        <p>Phát triển thị trường, quảng cáo và marketing chuyên nghiệp từ NASO giúp doanh nghiệp thu hút được khách hàng mới, cải thiện, duy trì số lượng khách hàng và gia tăng doanh thu.</p>
                                    </div>
                                </div>
                                <div class="features-bns-col-row">
                                    <div class="features-bns-col-img">
                                        <img src="{{asset('home')}}/images/features-bns-icon2.png" alt="" width="62" height="62" />
                                    </div>
                                    <div class="features-bns-col-cont">
                                        <h4>CUNG CẤP GIẢI PHÁP CÔNG NGHỆ</h4>
                                        <p>Hỗ trợ phần mềm đa nền tảng giúp thuận tiện trong việc tra cứu hàng hóa, theo dõi quản lý kho, tra cứu dòng tiền, hỗ trợ chăm sóc khách hàng đa kênh, theo dõi vận đơn chi tiết…</p>
                                    </div>
                                </div>
                                <div class="features-bns-col-row">
                                    <div class="features-bns-col-img">
                                        <img src="{{asset('home')}}/images/features-bns-icon3.png" alt="" width="60" height="60" />
                                    </div>
                                    <div class="features-bns-col-cont">
                                        <h4>KẾT NỐI ĐƠN VỊ VẬN CHUYỂN</h4>
                                        <p>Nhận được nhiều ưu đãi từ các đơn vị vận chuyển và giúp giữ chân khách hàng với các chiến dịch miễn phí ship hoặc tạo phí ship cố định.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end .features-bns-container -->
        <!-- start benefits-container -->
        <div class="benefits-container overflow-hidden">
            <div class="container" id='cacbuoc'>
                <div class="row pt-110 mobile-pt-60">
                    <div class="col-12 big-title white-text text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h3>BÁN HÀNG VỚI NASO VÔ CÙNG DỄ DÀNG</h3>
                        <h2>HƯỚNG DẪN BÁN HÀNG TẠI NASO</h2>
                    </div>
                </div>
                <div class="row justify-content-between benefits-content pt-40 pb-80 mobile-pt-10 mobile-pb-40">
                    <div class="col-12 col-md-6 benefits-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <img src="{{asset('home')}}/images/mgm-img.png" alt="" width="736" height="464" />
                    </div>
                    <div class="col-12 col-md-6 benefits-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                        <div class="benefits-cont">
                            <p>Sau khi đăng ký tài khoản và tải APP NASO, đại lý có thể lựa chọn sản phẩm để kinh doanh với hơn 300 mặt hàng uy tín, chất lượng.</p>
                            <div class="bnf-area pt-30 mt-2 mobile-mt-0">
                                <div class="bnf-col-row pb-20 mobile-pb-10">
                                    <div class="bnf-col-img">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="bnf-col-cont">
                                        <p>Đăng bán sản phẩm qua mạng xã hội hoặc gửi cho khách hàng tiềm năng của bạn.</p>
                                    </div>
                                </div>
                                <div class="bnf-col-row pb-20 mobile-pb-10">
                                    <div class="bnf-col-img">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="bnf-col-cont">
                                        <p>Tạo đơn hàng trên ứng dụng. NASO sẽ giúp bạn vận chuyển đến khách hàng.</p>
                                    </div>
                                </div>
                                <div class="bnf-col-row pb-20 mobile-pb-10">
                                    <div class="bnf-col-img">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="bnf-col-cont">
                                        <p>Nhận hoa hồng và rút tiền về tài khoản ngân hàng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end .benefits-container -->
        <!-- start roadmap-container -->
        <div class="roadmap-container">
            <div class="container pt-110 pb-80 mobile-pt-60 mobile-pb-25" id='camket'>
                <div class="row">
                    <div class="col-12 big-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <h3>Giải pháp kinh doanh online 4.0</h3>
                        <h2>NASO CAM KẾT VỚI ĐẠI LÝ</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="road-map-timeline">
                        <ul class="road-map-tl-event list-unstyled">
                            <li class="road-map-row">
                                <div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                    <div class="content">
                                        <h3>MÔ HÌNH KINH DOANH 5K</h3>
                                        <div class="timeline-cont-info">
                                            <h5>Kinh doanh online dễ dàng</h5>
                                            <p>Bạn chỉ cần lên đơn, mọi việc có NASO lo. Không mất vốn, không ôm hàng, không giao hàng, không đơn độc, không áp doanh số.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="road-map-row">
                                <div class="road-map-event event wow bounceInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                    <div class="content">
                                        <h3>CHẤT LƯỢNG SẢN PHẨM</h3>
                                        <div class="timeline-cont-info">
                                            <h5>Sản phẩm chất lượng, đa dạng</h5>
                                            <p>Sản phẩm có điểm độc đáo, có đội nghiên cứu phát triển sản phẩm. Giấy tờ kiểm tra chất lượng, nguồn gốc xuất xứ rõ ràng.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="road-map-row">
                                <div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                    <div class="content">
                                        <h3>LỢI NHUẬN</h3>
                                        <div class="timeline-cont-info">
                                            <h5>Chiết khấu hấp dẫn lên đến 50%</h5>
                                            <p>Cơ chế chiết khấu lợi nhuận rõ ràng, minh bạch. Thanh toán hoa hồng hàng tháng với những phần thưởng hấp dẫn cho đại lý xuất sắc.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="road-map-row circle-row">
                                <div class="road-map-event event wow bounceInRight" data-wow-duration="1s" data-wow-delay=".5s">
                                    <div class="content">
                                        <h3>PHẦN MỀM HỖ TRỢ</h3>
                                        <div class="timeline-cont-info">
                                            <h5>Theo dõi, kiểm soát đơn hàng nhanh chóng</h5>
                                            <p>Đại lý được cung cấp các giải pháp và nền tảng công nghệ tiên tiến thế giới nhằm hỗ trợ 1 cách toàn diện cho mọi nhu cầu kinh doanh.
</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="road-map-row circle-row2">
                                <div class="road-map-event event wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                    <div class="content">
                                        <h3>CHĂM SÓC KHÁCH HÀNG</h3>
                                        <div class="timeline-cont-info">
                                            <h5>Hỗ trợ giải đáp 24/7</h5>
                                            <p>CSKH tại NASO sẽ hỗ trợ, hướng dẫn chi tiết cách thức bán hàng dành cho đại lý/CTV khi mới tham gia. Có trung tâm chăm sóc khách hàng độc lập, hỗ trợ online sau bán hàng cho từng loại sản phẩm.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end .roadmap-container -->
        <!-- start team -->
        <div class="team overflow-hidden">
            <div class="container" id='daily'>
                <div class="row pt-110 mobile-pt-60 ">
                    <div class="col-12 big-title white-text text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h3>ĐẠI LÝ TIÊU BIỂU</h3>
                        <h2>TOP ĐẠI LÝ XUẤT SẮC TẠI NASO</h2>
                    </div>
                </div>
                <div class="row justify-content-center team-col-area pt-40 pb-60 mobile-pt-10 mobile-pb-20">
                    <div class="col-12 col-md-4 col-lg-3 team-col pb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="team-mem">
                            <div class="team-mem-info">
                                <a href="#"><img src="{{asset('home')}}/images/member-img1.png" alt="" width="197" height="197" /></a>
                            </div>
                        </div>
                        <div class="team-cont">
                            <h3><a href="#">Lê Hải Chi</a></h3>
                            <small>Đạt doanh số TOP 1</small>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 team-col pb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="team-mem">
                            <div class="team-mem-info">
                                <a href="#"><img src="{{asset('home')}}/images/member-img2.png" alt="" width="197" height="197" /></a>
                            </div>
                        </div>
                        <div class="team-cont">
                            <h3><a href="#">Nguyễn Bảo Loan</a></h3>
                            <small>Đại lý xuất sắc Quý 1</small>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 team-col pb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="team-mem">
                            <div class="team-mem-info">
                                <a href="#"><img src="{{asset('home')}}/images/member-img3.png" alt="" width="197" height="197" /></a>
                            </div>
                        </div>
                        <div class="team-cont">
                            <h3><a href="#">Hoàng Thị Linh</a></h3>
                            <small>Đại lý xuất sắc Quý 2</small>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-3 team-col pb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="team-mem">
                            <div class="team-mem-info">
                                <a href="#"><img src="{{asset('home')}}/images/member-img4.png" alt="" width="197" height="197" /></a>
                            </div>
                        </div>
                        <div class="team-cont">
                            <h3><a href="#">Hồ Tùng Mậu</a></h3>
                            <small>Đại lý VIP</small>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //end .team -->
        <!-- start faq -->
        <div class="faq pt-110 mobile-pt-60 mobile-pb-20 overflow-hidden">
            <div class="container" id='hoidap'>
                <div class="row">
                    <div class="col-12 big-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <h3>THÔNG TIN THÊM VỀ NASO</h3>
                        <h2>CÁC CÂU HỎI THƯỜNG GẶP</h2>
                    </div>
                </div>
                <div class="row pb-60 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="horizontal_tab_data">
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li></li>
                            <div class="resp-tabs-container">
                                <div>
                                    <div class="tab_inner">
                                        <div class="d-flex flex-wrap justify-content-between tab_content">
                                            <div class="tab-col">
                                                <h3>NASO có giống các sàn thương mại điện tử khác như Shopee, Tiki không?</h3>
                                                <p>Các sàn thương mại điện tử Shopee, Tiki muốn kinh doanh bạn nhập hàng và mở shop đăng bán sản phẩm trên đó. Với NASO, bạn có thể bắt đầu bán hàng online mà không cần vốn, bạn chỉ cần vào NASO tìm sản phẩm muốn bán sau đó lấy thông tin sản phẩm đăng bán trên mạng xã hội như Facebook, Zalo,... hoặc gửi cho khách hàng tiềm năng của bạn. Sau khi đã có khách hàng muốn mua sản phẩm, bạn tạo đơn trên ứng dụng, NASO sẽ giúp bạn giao tận tay khách hàng.</p>
                                            </div>
                                            <div class="tab-col">
                                                <h3>NASO có phiên bản website không?</h3>
                                                <p>NASO đã có phiên bản website để hỗ trợ Seller bán hàng thêm dễ dàng ngay trên laptop, máy tính để bàn của mình. Bạn có thể đăng ký tài khoản, tìm kiếm, đăng bán sản phẩm, theo dõi tình trạng đơn hàng cũng như yêu cầu rút tiền ngay tại website NASO. Đăng ký tài khoản và trải nghiệm bán hàng cùng NASO ngay nhé!</p>
                                            </div>
                                            <div class="tab-col">
                                                <h3>Mình có thể lấy sản phẩm của NASO bán trên Shopee không ?</h3>
                                                <p>Hiện tại NASO chưa hỗ trợ kết nối hệ thống với Shopee và các sàn thương mại điện tử khác. Trong trường hợp bạn vẫn mong muốn bán hàng của NASO trên các sàn thương mại điện tử khác thì bạn có thể đặt hàng từ ứng dụng NASO về kho của riêng bạn và sau đó đăng bán sản phẩm trên các sàn thương mại điện tử đó.</p>
                                            </div>
                                            <div class="tab-col">
                                                <h3>Cách thức thanh toán hoa hồng như thế nào ?</h3>
                                                <p>Tại mỗi đơn hàng thành công, NASO đã thông báo cho khách hàng sẵn mức hoa hồng nhận được và bạn có thể theo dõi được mức thu nhập trong tháng tại ứng dụng của NASO. Tổng tiền hoa hồng sẽ được cộng dồn trong 1 tháng và được thanh toán vào mồng 5 hàng tháng đến tài khoản ngân hàng của bạn.
</p>
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
        <!-- //end .faq -->
        <!-- start contact-container -->
       <section class="unc-inventment-container2 overflow-hidden">
            <div class="contact-content " id='lienhe'>
                <div class="container">
                    <div class="row justify-content-between mb-2 pt-70 pb-90 mobile-pt-20 mobile-pb-30 contact-content-area">
                        <div class="col-12 col-md-5 contact-info wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class=" unc-inventment-content">
                                <h3>LIÊN HỆ</h3>
                                <h2></h2>
                                <p>Hãy để lại thông tin của bạn cũng như thắc mắc cần NASO giải đáp dưới đây để CSKH NASO tư vấn chi tiết cho bạn nhé</p>
                                <ul class="contact-social ">
                                    <li>
                                       <div class="social-row ">
                                           <a href="tel:88012345678" target="_blank"><span><i class="fas fa-phone"></i></span>
                                           <p>(+84) 866 303 366</p></a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="social-row">
                                           <a  href="mailto:hello@unicrypt.com" target="_blank"><span><i class="far fa-envelope"></i></span>
                                           <p>nasojsc@gmail.com</p></a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="social-row">
                                           <span><a href="#" target="_blank"><i class="fas fa-map-marker-alt"></i></a></span>
                                           <p>Số 519 Kim Mã, P. Ngọc Khánh, Q. Ba Đình, Tp. Hà Nội</p>
                                       </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <form class="contact-form" action="https://bootstrapshaper.com/tmforest/unicrypt/{{asset('home')}}/mail.php" method="POST">
                                <div class="d-flex flex-wrap form-col">
                                    <div class="form-group">
                                        <input class="form-control required" type="text" name="fname" placeholder="Họ và tên" />
                                        <span class="alert-error"></span>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control required" type="email" name="email" placeholder="Email liên hệ" />
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control required" type="text" name="chủ đề" placeholder="Subject" />
                                    <span class="alert-error"></span>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control required" name="message" rows="7" cols="7" placeholder="Nội dung"></textarea>
                                    <span class="alert-error"></span>
                                </div>
                                <div class="submit-col">
                                    <input type="submit" value="Gửi ngay" />
                                </div>
                                <div class="col-12 contact-message"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
         </section>
        <!-- //end .contact-container -->
        <a class="skip_swing backtop" href="#wrapper"><i class="fas fa-chevron-up"></i></a>
    </div>
    <!-- //end #wrapper -->
	<!-- include jquery min -->
    <script src="{{asset('home')}}/vendor/jquery.min.js"></script>
    <!-- include jquery bootstrap -->
    <script src="{{asset('home')}}/vendor/bootstrap.min.js"></script>
    <script src="{{asset('home')}}/vendor/popper.min.js"></script>
    <!-- include jquery fatNav -->
    <script src="{{asset('home')}}/js/jquery.fatNav.js"></script>
    <!-- include jquery responsive tabs -->
    <script src="{{asset('home')}}/js/easy-responsive-tabs.js"></script>
    <!-- include chart js -->
    <script src="{{asset('home')}}/vendor/chart.min.js"></script>
    <!-- include wow animation -->
    <script src="{{asset('home')}}/vendor/wow.min.js"></script>
    <!-- include main javascript file -->
	<script src="{{asset('home')}}/js/main.js"></script>
    <!-- include ajax mail file -->
    <script src="{{asset('home')}}/js/ajax-mail.js"></script>
    <script type="text/javascript">	
		$('a[href^="#"]').click(function(){
		var the_id = $(this).attr("href");
		$('html, body').animate({
			scrollTop:$(the_id).offset().top
		}, 'slow');
		return false;});
	</script>
</body>
</html>