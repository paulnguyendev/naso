@extends('auth.auth')
@section('content')
    <form method="POST">
        <input type="hidden" name="_token" value="NN2qLcQhx0Cv4lMh5Wl8yaKE7XXEdhqtl2VyI22q">
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                </div>
                <h5 class="content-group">Đăng nhập hệ thống thành viên</h5>
            </div>
            <div class="form-group has-feedback has-feedback-left">
                <input type="email" name="email" required class="form-control" placeholder="Email" value="">
                <div class="form-control-feedback">
                    <i class="icon-user text-muted"></i>
                </div>
            </div>
            <div class="form-group has-feedback has-feedback-left">
                <input type="password" name="password" required class="form-control" placeholder="Mật khẩu" value="">
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
@endsection
