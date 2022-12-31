<!DOCTYPE html>
<html lang="vi">

<head>
    @include('frontend.elements.head')
</head>

<body class="navbar-top has-detached-right pace-done sidebar-xs " data-env="production">
    <!-- Main navbar -->
    <div class="navbar navbar-default navbar-fixed-top header-highlight">
        @include('frontend.elements.navbar')
    </div>
    <!-- /main navbar -->
    <div class="page-container">
        <div class="page-content">

            <div class="content-wrapper">
                <div class="content">
                    @yield('content')

                </div>
            </div>

        </div>
        <footer>
            <div class="footer-main">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-policy-item">
                            <img src="{{ asset('home/images/footer_policy_img_1.png') }}" alt=""
                                class='img-responsive'>
                            <span>Đặt online giao tận nhà đúng giờ </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-policy-item">
                            <img src="{{ asset('home/images/footer_policy_img_2.png') }}" alt=""
                                class='img-responsive'>
                            <span>Đổi trả sản phẩm trong 7 ngày
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-policy-item">
                            <img src="{{ asset('home/images/footer_policy_img_3.png') }}" alt=""
                                class='img-responsive'>
                            <span>Sản phẩm sạch
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 footer-logo">
                        <img width="238" height="42"
                            src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-logo.png?1669091428969"
                            data-src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-logo.png?1669091428969"
                            alt="MANDALAMART" class="lazy logo-footer loaded" data-was-processed="true">
                        <div class="footer-address">
                            <img width="24" height="24"
                                src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-address.png?1669091428969"
                                data-src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-address.png?1669091428969"
                                alt="MANDALAMART" class="lazy loaded" data-was-processed="true">

                            Số 78, Đường Song Hành, Quốc Lộ 1A, KĐTM Hồng Loan 5C, Phường Hưng Thạnh, Quận Cái Răng,
                            Thành phố Cần Thơ

                        </div>
                        <div class="footer-time">
                            Thứ 2 - Thứ 6: 8:00-17:00<br>
                            Thứ 7: 8:00 – 12:00
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-hotline">
                        <h4 class="footer-title">Hỗ trợ khách hàng</h4>
                        <div class="footer-phone">
                            <img width="24" height="24"
                                src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-phone.png?1669091428969"
                                data-src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-phone.png?1669091428969"
                                alt="MANDALAMART" class="lazy loaded" data-was-processed="true">
                            <div class="footer-phone-content">

                                <a href="tel:0939183232" title="0939183232">0939183232</a>

                                <span>Thứ 2 - Thứ 7: 8:00 - 21:30</span>
                            </div>
                        </div>
                        <div class="footer-email">
                            <img width="24" height="24"
                                src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-email.png?1669091428969"
                                data-src="//bizweb.dktcdn.net/100/470/160/themes/883870/assets/footer-email.png?1669091428969"
                                alt="MANDALAMART" class="lazy loaded" data-was-processed="true">

                            <a href="mailto:mandalamart.vn@gmail.com"
                                title="mandalamart.vn@gmail.com">mandalamart.vn@gmail.com</a>

                        </div>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/mandalamart.com.vn" target="_blank" aria-label="Facebook"
                                title="Theo dõi MANDALAMART trên Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="25px" height="25px" viewBox="0 0 96.124 96.123"
                                    style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
                                    <path
                                        d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"
                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                        fill="#EBE7E7"></path>
                                </svg>
                            </a>
                            <a href="#" target="_blank" aria-label="Twitter"
                                title="Theo dõi MANDALAMART trên Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                    xml:space="preserve" width="25px" height="25px">
                                    <path
                                        d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568    C480.224,136.96,497.728,118.496,512,97.248z"
                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                        fill="#EBE7E7"></path>
                                </svg>
                            </a>
                            <a href="" target="_blank" aria-label="Youtube"
                                title="Theo dõi MANDALAMART trên Youtube">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path
                                        d="M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80
                                             c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904
                                             C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728
                                             c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816
                                             c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096
                                             C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#" target="_blank" aria-label="Instagram"
                                title="Theo dõi MANDALAMART trên Instagram">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m75 512h362c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-362c-24.8125 0-45-20.1875-45-45zm0 0">
                                    </path>
                                    <path
                                        d="m256 391c74.4375 0 135-60.5625 135-135s-60.5625-135-135-135-135 60.5625-135 135 60.5625 135 135 135zm0-240c57.898438 0 105 47.101562 105 105s-47.101562 105-105 105-105-47.101562-105-105 47.101562-105 105-105zm0 0">
                                    </path>
                                    <path
                                        d="m406 151c24.8125 0 45-20.1875 45-45s-20.1875-45-45-45-45 20.1875-45 45 20.1875 45 45 45zm0-60c8.269531 0 15 6.730469 15 15s-6.730469 15-15 15-15-6.730469-15-15 6.730469-15 15-15zm0 0">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-menu">
                        <h4 class="footer-title">Danh mục</h4>
                        <div class="footer-list-menu">

                            <a href="#" title="Chính sách bảo mật" rel="nofollow">Chính sách bảo mật</a>

                            <a href="#" title="Chính sách vận chuyển" rel="nofollow">Chính sách vận
                                chuyển</a>

                            <a href="#" title="Chính sách đổi trả" rel="nofollow">Chính sách đổi trả</a>

                            <a href="#" title="Quy định sử dụng" rel="nofollow">Quy định sử dụng</a>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 footer-menu">
                        <h4 class="footer-title">Menu</h4>
                        <div class="footer-list-menu">

                            <a href="/" title="Trang chủ" rel="nofollow">Trang chủ</a>

                            <a href="#" title="Giới thiệu" rel="nofollow">Giới thiệu</a>

                            <a href="#" title="Sản phẩm" rel="nofollow">Sản phẩm</a>

                            <a href="#" title="Tin tức" rel="nofollow">Tin tức</a>

                            <a href="#" title="Liên hệ" rel="nofollow">Liên hệ</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="text-muted text-center copyright">
                &copy; 2022. Xây dựng bởi <a href="http://obn.marketing" target="_blank">OBN MARKETING</a>
            </div>
        </footer>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://static.loveitopcdn.com/backend/plugins/ckeditor/ckeditor.js?v=1.3"></script>
    <script src="https://static.loveitopcdn.com/backend/dist/js/plugin.js?id=1fc69adbc9342466a0a6"></script>
    <script src="{{ asset('obn-dashboard/plugin/slick.min.js') }}"></script>
    <script src="{{ asset('obn-dashboard/plugin/fancybox.umd.js') }}"></script>
    <script src="{{ asset('obn-dashboard/js/obn.js') }}"></script>
    <script src="https://static.loveitopcdn.com/backend/js/jquery.dirrty.js"></script>
    <script src="https://static.loveitopcdn.com/backend/js/notice.js?v=1.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/media.js?v=1.2.3"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.datatables.js?v=1.5.7"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.form.js?v=1.7.5.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.checkSeo.js?v=1.5"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.seo.js?v=1.6"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.applyTable.js?v=1.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.js?v=1.5.6"></script>
    <script src="https://static.loveitopcdn.com/backend/js/stepy.min.js"></script>
    <script src="https://static.loveitopcdn.com/backend/js/validate.min.js"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wizard_stepy.js"></script>

    <script>
        var loadimg = function() {}
    </script>
    <script>
        $(document).ready(function() {
            setTimeout(loadimg, 1000);
        });
        $(document).find('body').on('click', function() {
            loadimg();
        });
    </script>
    @yield('custom_srcipt')
</body>

</html>
