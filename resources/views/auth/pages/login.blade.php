<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập hệ thống</title>
    <meta name="robots" content="noindex, nofollow">
    <link media="all" type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="{{asset('obn-dashboard/css/plugin.css')}}?id={{time()}}">
    <link rel="stylesheet" href="{{asset('obn-dashboard/css/style.css')}}?id={{time()}}">
    <link rel="stylesheet" href="{{asset('obn-dashboard/css/obn.css')}}?id={{time()}}">
</head>
<body class="login-container">
    
    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="https://obn.marketing/" target="_blank"><img
                    src="{{asset('obn-dashboard/img/logo.png')}}" alt=""></a>
            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
        </div>
        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('home/index')}}">
                        <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right">
                            Website</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page container -->
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Content area -->
                <div class="content">
                    <!-- Simple login form -->
                    <form method="POST">
                        <input type="hidden" name="_token" value="NN2qLcQhx0Cv4lMh5Wl8yaKE7XXEdhqtl2VyI22q">
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                                </div>
                                <h5 class="content-group">Đăng nhập hệ thống thành viên</h5>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" name="email" required class="form-control" placeholder="Email"
                                    value="">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" name="password" required class="form-control"
                                    placeholder="Mật khẩu" value="">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>
                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" name="remember" value="1"> Nhớ
                                            mật khẩu
                                        </label>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="/admin/password/reset">Quên mật khẩu?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Đăng nhập
                                    <i class="icon-circle-right2 position-right"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- /simple login form -->
                    <!-- Footer -->
                    <div class="footer text-muted text-center">
                        &copy; 2022. Xây dựng bởi <a href="https://obn.marketing/" target="_blank">OBN MARKETING</a>
                    </div>
                    <!-- /footer -->
                </div>
                <!-- /content area -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->
    </div>
    <!-- /page container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://static.loveitopcdn.com/backend/plugins/ckeditor/ckeditor.js"></script>
    <script src="https://static.loveitopcdn.com/backend/dist/js/plugin.js?id=1fc69adbc9342466a0a6"></script>
    <script src="https://static.loveitopcdn.com/backend/js/notice.js"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.form.js?v=1.7.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/wb.js?v=1.5.1"></script>
    <script src="https://static.loveitopcdn.com/backend/js/pages/login.js"></script>
</body>
</html>
