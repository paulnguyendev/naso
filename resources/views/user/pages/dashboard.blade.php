<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="shortcut icon" type="image/png" href="https://media.loveitopcdn.com/itop.website/favicon.png" />
    <base href="https://dainghiagroup.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700&amp;amp;subset=vietnamese"
        rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://static.loveitopcdn.com/backend/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://static.loveitopcdn.com/backend/dist/css/plugin.css?id=a8f96327b6c3773821a1">
    <link rel="stylesheet" href="https://static.loveitopcdn.com/backend/dist/css/style.css?id=fca89b87486ea1f07891">
    <link media="all" type="text/css" rel="stylesheet"
        href="https://static.loveitopcdn.com/backend/css/custom_new.css?v=1.0.2">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://static.loveitopcdn.com/backend/dist/js/loading.js?id=7e97bd818d6bd28c3dc8"></script>
    <style>
        .language-switch {
            display: none !important;
        }
        @media (min-width: 1024px) and (max-width: 1350px) {
            .hiden_1024_1350 {
                display: none;
            }
        }
        @media (min-width: 768px) and (max-width: 1023px) {
            .hiden_768_1023 {
                display: none !important;
            }
        }
        .media-preview {
            max-height: 50px;
            width: 83px;
        }
    </style>
    <script>
        var _token = 'NN2qLcQhx0Cv4lMh5Wl8yaKE7XXEdhqtl2VyI22q';
        var base_domain = 'https://dainghiagroup.com';
        var assets_url = 'https://static.loveitopcdn.com';
        var cke_conf_path = assets_url + '/backend/plugins/ckeditor';
        var default_currency = '??';
        var default_weight_unit = "kg";
        var storage_url = 'https://media.loveitopcdn.com/34798/';
    </script>
</head>
<body class="navbar-top has-detached-right pace-done " data-env="production">
    <!-- Main navbar -->
    <div class="navbar navbar-default navbar-fixed-top header-highlight">
        <div class="navbar-header">
            <a class="navbar-brand" target="_blank" href="https://dainghiagroup.com"><img
                    src="{{ asset('obn-dashboard/img/logo.png') }}" alt=""></a>
            <a class="navbar-brand quick-view-icon" target="_blank" href="https://dainghiagroup.com"><i
                    class="icon-square-up-right"></i></a>
            <ul class="nav navbar-nav visible-xs-block">
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>
        <div id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav hidden-xs">
                <li>
                    <h5 class="hiden_1024_1350 hiden_768_1023">Qu???n l?? chung</h5>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right text-sm-right pr-sm-20 pl-sm-20">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="icon-bubbles4"></i> <span class="hiden_1024_1350">Th??ng b??o</span>
                    </a>
                </li>
                <li><a href="{{ route('user_profile/index') }}"><i class="icon-user"></i> <span
                            class="hiden_1024_1350">T??i kho???n</span></a>
                </li>
                <li><a href="{{ route('auth/logout') }}"><i class="icon-switch2"></i> <span
                            class="hiden_1024_1350">Tho??t</span></a></li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <div class="page-container">
        <div class="page-content">
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">
                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <li data-label="Qu???n L?? Chung">
                                    <a href="{{ route('user/index') }}">
                                        <i class="icon-home4"></i>
                                        <span>Qu???n L?? Chung</span>
                                    </a>
                                </li>
                                <li data-label="Qu???n L?? B??i Vi???t">
                                    <a href="javascript:void(0)">
                                        <i class="icon-price-tag2"></i>
                                        <span>S???n ph???m</span>
                                    </a>
                                    <ul class="second-menu-level">
                                        <li>
                                            <a href="https://dainghiagroup.com/admin/post/create">
                                                <span>T???o B??i Vi???t</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://dainghiagroup.com/admin/post">
                                                <span>T???t c??? B??i Vi???t</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://dainghiagroup.com/admin/post/category">
                                                <span>Th??? lo???i B??i Vi???t</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://dainghiagroup.com/admin/post/group">
                                                <span>Nh??m B??i Vi???t</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://dainghiagroup.com/admin/post/navigate">
                                                <span>??i???u h?????ng b??i vi???t</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-label="Qu???n L?? Chung">
                                    <a href="#">
                                        <i class="icon-cart5"></i>
                                        <span>????n h??ng</span>
                                    </a>
                                </li>
                                <li data-label="Qu???n L?? Chung">
                                    <a href="#">
                                        <i class="icon-cart5"></i>
                                        <span>Kh??ch h??ng</span>
                                    </a>
                                </li>
                                <li data-label="Qu???n L?? B??i Vi???t">
                                    <a href="javascript:void(0)">
                                        <i class="icon-price-tag2"></i>
                                        <span>T??i ch??nh</span>
                                    </a>
                                    <ul class="second-menu-level">
                                        <li>
                                            <a href="#">
                                                <span>Doanh thu</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span>L???ch s??? thanh to??n</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li data-label="T??i kho???n">
                                    <a href="{{ route('user_profile/index') }}">
                                        <i class="icon-info3"></i>
                                        <span>T??i kho???n</span>
                                    </a>
                                </li>
                                <li data-label="????ng xu???t">
                                    <a href="{{ route('auth/logout') }}">
                                        <i class="icon-switch2"></i>
                                        <span>????ng xu???t</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <div class="panel panel-body panel-body-accent">
                                <a class="media no-margin" href="https://dainghiagroup.com/admin/post">
                                    <div class="media-left media-middle">
                                        <i class="icon-magazine icon-3x text-success-400"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 class="no-margin text-semibold">14</h3>
                                        <span class="text-uppercase text-size-mini text-muted">B??i vi???t</span>
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
                                        <span class="text-uppercase text-size-mini text-muted">S???n ph???m</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="panel panel-body">
                                <a class="media no-margin" href="https://dainghiagroup.com/admin/post/category">
                                    <div class="media-body">
                                        <h3 class="no-margin text-semibold">6</h3>
                                        <span class="text-uppercase text-size-mini text-muted">Th??? lo???i b??i vi???t</span>
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
                                        <span class="text-uppercase text-size-mini text-muted">Th??? lo???i s???n ph???m</span>
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
                                    <h5 class="panel-title"><i class="icon-menu3 position-left"></i> QU???N L?? MENU</h5>
                                </div>
                                <div class="panel-body">
                                    <a style="font-size: 16px" href="https://dainghiagroup.com/admin/menu"><i
                                            class="icon-arrow-right6"></i>
                                        Click v??o ????y ????? qu???n l?? menu
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><i class="icon-cog3 position-left"></i> QU???N L?? C???U H??NH
                                        WEBSITE</h5>
                                </div>
                                <div class="panel-body">
                                    <a style="font-size: 16px"
                                        href="https://dainghiagroup.com/admin/setting/website"><i
                                            class="icon-arrow-right6"></i> Click v??o ????y ????? qu???n l?? c???u h??nh
                                        website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-uppercase">????n h??ng m???i</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><a href="https://dainghiagroup.com/admin/order">Xem
                                                t???t c???</a></span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>????n h??ng</th>
                                                <th>Ng??y ?????t</th>
                                                <th>Kh??ch h??ng</th>
                                                <th>T???ng ti???n</th>
                                                <th>Tr???ng th??i</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-uppercase">S???n ph???m g???n nh???t</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><a
                                                href="https://dainghiagroup.com/admin/product">Xem t???t c???</a></span>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/product/29/edit">
                                                                <img src="/jahi-central-home-loc-an.jpg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/product/29/edit">Khu
                                                                d??n c?? Jahi-Central Home L???c An</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>08/07/2021 09:06</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/product/28/edit">
                                                                <img src="/84-nen-lien-dam.jpg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/product/28/edit">Ph??n
                                                                L?? 84 n???n Li??n ?????m, Di Linh, L??m ?????ng</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>08/07/2021 09:05</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/product/27/edit">
                                                                <img src="/fbbd00e42ffde1a3b8ec.jpg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/product/27/edit">D???
                                                                ??n Tani Villa - L???c T??n, L??m ?????ng</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>08/07/2021 09:04</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest posts -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-uppercase">B??i vi???t g???n nh???t</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><a href="https://dainghiagroup.com/admin/post">Xem
                                                t???t c???</a></span>
                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/post/19/edit">
                                                                <img src="/223522-302701193-113169774855604-8260449722808231292-n.jpg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/post/19/edit">D???ch
                                                                v??? ch??nh marketing obn</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>17/12/2022 09:07</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/post/18/edit">
                                                                <img src="/dat-tho-cu-la-gi.jpg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/post/18/edit">?????t
                                                                th??? c?? l?? g?? &amp; ??i???u ki???n ????? l??n ?????t th??? c??</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>24/04/2022 10:50</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/post/17/edit">
                                                                <img src="/pho-di-bo-da-lat-4.jpg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/post/17/edit">????
                                                                L???t t??nh l??m ph??? ??i b??? ??? th???ng c???nh h??? Xu??n H????ng</a>
                                                        </h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>18/04/2022 15:45</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/post/16/edit">
                                                                <img src="/luu-y-khi-dat-coc-nha-dat-8.jpeg"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/post/16/edit">7
                                                                l??u ?? khi ?????T C???C mua ?????t ????? H???N CH??? g???p r???i ro</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>15/04/2022 15:09</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12">
                                            <ul class="media-list content-group">
                                                <li class="media stack-media-on-mobile">
                                                    <div class="media-left">
                                                        <div class="thumb">
                                                            <a href="https://dainghiagroup.com/admin/post/15/edit">
                                                                <img src="/khac-nhau-giua-so-do-va-so-hong-2.png"
                                                                    class="img-responsive img-rounded media-preview"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><a
                                                                href="https://dainghiagroup.com/admin/post/15/edit">C??ch
                                                                KI???M TRA s??? ????? v?? s??? h???ng KHI giao d???ch mua b??n</a></h6>
                                                        <ul class="list-inline list-inline-separate text-muted mb-5">
                                                            <li>15/04/2022 10:44</li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title text-uppercase">C?? th??? b???n quan t??m</h6>
                                    <div class="heading-elements">
                                        <span class="heading-text"><a href="https://itop.website/huong-dan-su-dung/"
                                                target="_blank">Xem t???t c???</a></span>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row lasted_blog">
                                        <div style="display: none" class="lasted_blog_item">
                                            <div class="col-lg-12">
                                                <ul class="media-list content-group">
                                                    <li class="media stack-media-on-mobile">
                                                        <div class="media-left">
                                                            <div class="thumb">
                                                                <a href="#url" target="_blank">
                                                                    <img src="#thumbnail"
                                                                        class="img-responsive img-rounded media-preview"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading"><a href="#url"
                                                                    target="_blank">#title</a></h6>
                                                            <ul
                                                                class="list-inline list-inline-separate text-muted mb-5">
                                                                <li>#category_name</li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /latest posts -->
                        </div>
                    </div>
                    <div class="footer text-muted">
                        &copy; 2017. X??y d???ng b???i <a href="http://imgroup.vn" target="_blank">IM GROUP</a>
                    </div>
                    <div class="zalo-chat-widget" data-oaid="1396501067994544259"
                        data-welcome-message="R???t vui khi ???????c h??? tr??? b???n!" data-autopopup="0" data-width="350"
                        data-height="420"></div>
                    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
                </div>
            </div>
        </div>
    </div>
    <script>
        var loadimg = function() {}
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://static.loveitopcdn.com/backend/plugins/ckeditor/ckeditor.js?v=1.3"></script>
    <script src="https://static.loveitopcdn.com/backend/dist/js/plugin.js?id=1fc69adbc9342466a0a6"></script>
    <script src="https://static.loveitopcdn.com/backend/js/jquery.dirrty.js"></script>
    <script src="https://static.loveitopcdn.com/backend/js/notice.js?v=1.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/media.js?v=1.2.3"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.datatables.js?v=1.5.7"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.form.js?v=1.7.5.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.checkSeo.js?v=1.5"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.seo.js?v=1.6"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.applyTable.js?v=1.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.js?v=1.5.6"></script>
    <script type="text/javascript">
        var itop_url = "https://itop.website";
        $.ajax({
                url: itop_url + '/api/blog/lastest/?token=' + _token,
                type: 'GET',
                dataType: 'json',
            })
            .done(function(data) {
                var lasted_blog_item = $('.lasted_blog_item').clone();
                $.each(data, function(index, val) {
                    $('.lasted_blog').append(lasted_blog_item.html().replace("#thumbnail", val.thumbnail)
                        .replace("#category_name", val.category_name).replace("#title", val.title)
                        .replaceAll("#url", val.url));
                });
            })
            .fail(function() {
                console.log("error");
            })
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(loadimg, 1000);
        });
        $(document).find('body').on('click', function() {
            loadimg();
        });
    </script>
</body>
</html>
