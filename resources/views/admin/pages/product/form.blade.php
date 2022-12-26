@extends('admin.admin')
@section('navbar_title', 'Quản lý sản phẩm / Tạo mới')
@section('navbar-right')
    <li>
        <a href="{{ route('product/index') }}" style="padding:5px 0px 5px 5px">
            <button class="btn btn-default heading-btn" type="button">Hủy</button>
        </a>
    </li>
    <li>
        <div style="padding:5px 0px 5px 5px">
            <button type="button" class="heading-btn btn btn-info btn-ladda btn-ladda-spinner" onclick="nav_submit_form(this)"
                data-style="zoom-in" data-form="post-form"><span class="ladda-label">Lưu</span></button>
        </div>
    </li>
@endsection
@section('script_table')
    <script>
        $('#lfm_thumbnail').mlibready({
            returnto: '#thumbnail',
            maxselect: 1,
            runfunction: 'fillImage',
            maxFilesize: 5
        });
        $('#lfm_gallery').mlibready({
            returnto: '#gallery',
            runfunction: 'fillGallery',
            maxFilesize: 5
        });
        $(function() {
            // Sortable rows
            $("#holder_gallery").sortable({
                stop: function(event, ui) {
                    WBForm.updateValueGallery($('.wrap-media'));
                }
            });
        })
    </script>
@endsection
@section('content')
    <form method="POST" action="https://dainghiagroup.com/admin/product" accept-charset="UTF-8" id="post-form"
        class="data-dirty" enctype="multipart/form-data"><input name="_token" type="hidden"
            value="0qqxfiMGdlXD652HGg1pHO06ngLznO3tEibMRTev">
        <div class="col-xs-12 col-sm-12 col-md-9 admin-product">
            <div class="order-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <label>Tên sản phẩm (*)
                            </label>
                            <input class="form-control" data-seo="title" name="title" type="text">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group text-editor">
                            <label class="">Mô tả</label>
                            <small class="help-block no-margin"></small>
                            <textarea class="ckeditor-basic" id="wbcke_1366359631" data-seo="description" name="description" cols="50"
                                rows="10"></textarea>
                            <span class="help-block"></span>
                        </div>


                        <div class="form-group text-editor">
                            <label class="">Nội dung</label>
                            <small class="help-block no-margin"></small>
                            <textarea class="form-control ckeditor-full ckeditor" id="wbcke_200072389" data-seo="content" name="content"
                                cols="50" rows="10"></textarea>
                            <span class="help-block"></span>
                        </div>

                        <span class="recommended-keyword-appear-time-label"></span>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-4 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Hình đại diện <small>(600x600)</small></h6>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse" class=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="single-media text-center">
                                        <input id="thumbnail" name="thumbnail" type="hidden">
                                        <div class="media-item">
                                            <img class="img-thumbnail"
                                                data-no-image="https://via.placeholder.com/150x120&amp;text=No+Image"
                                                src="https://via.placeholder.com/150x120&amp;text=No+Image" width="150px"
                                                height="120px" id="holder_thumbnail" style="max-height: 100%">
                                        </div>
                                        <div class="clearfix"></div>
                                        <a style="margin-top: 5px;margin-bottom: 3px" data-input="thumbnail"
                                            data-type="single" data-preview="holder_thumbnail" id="lfm_thumbnail"
                                            class="btn ;btn-sm btn-default" bs-type="filemanager">
                                            Chọn hình
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Bộ sưu tập hình ảnh</h6>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse" class=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="text-center wrap-media">
                                        <input id="gallery" type="hidden" name="gallery" value="">
                                        <div class="row media-container" id="holder_gallery"></div>
                                        <a style="margin-top: 5px" data-input="gallery" data-type="multiple"
                                            data-preview="holder_gallery" id="lfm_gallery" class="btn btn-sm btn-default"
                                            bs-type="filemanager">
                                            Chọn hình
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <legend class="text-bold">Giá sản phẩm</legend>
                            <div class="form-group">
                                <div class="col-md-5 col-xs-12">
                                    <label>Giá bán (đ) </label>
                                    <input type="text" class="form-control format-number" data-value="price"
                                        value="" />
                                    <input class="hidden" name="price" type="number">
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <label>Giảm giá (%) </label>
                                    <input type="text" class="form-control format-number" data-value="percent"
                                        value="0" />
                                    <input class="hidden" name="percent" type="number" value="0">
                                    <span class="help-block"></span>
                                </div>
                                <div class="col-md-5 col-xs-8">
                                    <div class="row form-group mb-10">
                                        <div class="col-xs-12">
                                            <label>Giá khuyến mãi (giá bán còn lại) (đ) </label>
                                            <input type="text" class="form-control format-number"
                                                data-value="price_sale" value="" />
                                            <input class="hidden" name="price_sale" type="number" value="">
                                            <span class="help-block"></span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="order-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <legend class="text-bold">Tồn kho</legend>
                            <div class="col-xs-6 col-md-3">
                                <div class="form-group mb-0">
                                    <label for="Mã sản phẩm">M&atilde; Sản Phẩm</label>
                                    <input class="form-control" name="code" type="text" value="">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="form-group">
                                    <label for="Tình trạng kho">T&igrave;nh Trạng Kho</label>
                                    <select class="form-control" name="in_stock">
                                        <option value="1" selected="selected">Còn Hàng</option>
                                        <option value="0">Hết hàng</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                      
                    </div>
                </div>
              
            </div>
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">Trạng thái</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse" class=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input bs-type="checkbox" checked="checked" name="is_published" type="checkbox"
                                value="1">
                            Hiện
                        </label>
                        <a href="#published_datetime" data-toggle="collapse" class="pull-right"
                            style="font-size: 1.2em"><i class="fa fa-calendar-o"></i></span></a>
                    </div>
                    <div class="row collapse" id="published_datetime">
                        <div class="col-md-10">
                            <input class="form-control" bs-type="singleDatePicker" onkeydown="return false;"
                                name="published_at" type="text" value="2022-12-22 16:48:44">
                        </div>
                        <div class="col-md-2" style="margin-top: 7px;font-size: 1.2em">
                            <a href="#published_datetime" data-toggle="collapse" class="remmove_published_datetime"><i
                                    class="fa fa-remove"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h6 class="panel-title">Phân loại</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse" class=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="Thể loại">Danh mục</label>
                        <select class="form-control" name="cat_id">
                            <option value="297">

                                Dự án
                            </option>
                            <option value="298">
                                <span class="tree-icon">¦– –</span>
                                Nhà đất bán
                            </option>
                            <option value="302">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Bán căn hộ chung cư
                            </option>
                            <option value="303">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Bán nhà riêng
                            </option>
                            <option value="304">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Bán nhà biệt thự, liền kề
                            </option>
                            <option value="305">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Bán nhà mặt phố
                            </option>
                            <option value="299">
                                <span class="tree-icon">¦– –</span>
                                Nhà đất cho thuê
                            </option>
                            <option value="306">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Cho thuê căn hộ chung cư
                            </option>
                            <option value="307">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Cho thuê nhà riêng
                            </option>
                            <option value="308">
                                <span class="tree-icon">¦– –</span> <span class="tree-icon">¦– –</span>
                                Cho thuê nhà mặt phố
                            </option>
                            <option value="300">
                                <span class="tree-icon">¦– –</span>
                                Căn hộ, chung cư
                            </option>
                            <option value="301">
                                <span class="tree-icon">¦– –</span>
                                Cao ốc văn phòng
                            </option>
                            <option value="324">

                                Mua bán nhà đất lào cai
                            </option>
                            <option value="325">

                                Dự án
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Thể loại khác">Danh mục khác</label>
                        <select multiple="multiple" bs-type="multiSelect" class="selectized" name="other_cat_ids[]"
                            placeholder="Chọn Thể loại khác">
                            <option value="297">

                                Dự án
                            </option>
                            <option value="298">
                                <span class="tree-icon">¦––</span>
                                Nhà đất bán
                            </option>
                            <option value="302">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Bán căn hộ chung cư
                            </option>
                            <option value="303">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Bán nhà riêng
                            </option>
                            <option value="304">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Bán nhà biệt thự, liền kề
                            </option>
                            <option value="305">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Bán nhà mặt phố
                            </option>
                            <option value="299">
                                <span class="tree-icon">¦––</span>
                                Nhà đất cho thuê
                            </option>
                            <option value="306">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Cho thuê căn hộ chung cư
                            </option>
                            <option value="307">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Cho thuê nhà riêng
                            </option>
                            <option value="308">
                                <span class="tree-icon">¦––</span> <span class="tree-icon">¦––</span>
                                Cho thuê nhà mặt phố
                            </option>
                            <option value="300">
                                <span class="tree-icon">¦––</span>
                                Căn hộ, chung cư
                            </option>
                            <option value="301">
                                <span class="tree-icon">¦––</span>
                                Cao ốc văn phòng
                            </option>
                            <option value="324">

                                Mua bán nhà đất lào cai
                            </option>
                            <option value="325">

                                Dự án
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nhà cung cấp</label>
                        <select class="form-control" name="manufacturer_id">
                            <option value="0">Chưa có</option>
                        </select>
                        <span class="help-block"></span>
                    </div>
                   

                </div>
            </div>

            <input name="menu_id" type="hidden">
            <input name="taxonomy" type="hidden" value="product">

           



        </div>
    </form>
@endsection
