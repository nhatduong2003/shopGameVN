@extends('layout')
@section('content')
<div class="c-layout-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-info box-text showtext" role="alert">
                    <h1 class="alert-heading" style="color:#000">Liên quân</h1>
                    <p></p>
                    <table align="center" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td><span style="color:#000000"><span style="font-size:16px">✅&nbsp;<strong>Mua acc Liên Quân giá rẻ</strong></span></span></td>
                                <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐&nbsp;Giá rẻ nhất thị trường chỉ từ 1k, 7k, 9k. Cho phép trả góp</strong></span></span></td>
                            </tr>
                            <tr>
                                <td><span style="color:#000000"><span style="font-size:16px">✅&nbsp;<strong>Mua nick Liên Quân uy tín</strong></span></span></td>
                                <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐&nbsp;Acc 100% đúng mật khẩu, đúng như hình, 1 đổi 1&nbsp;nick sai</strong></span></span></td>
                            </tr>
                            <tr>
                                <td><span style="color:#000000"><span style="font-size:16px">✅&nbsp;<strong>Mua acc Liên Quân nhanh</strong></span></span></td>
                                <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐ Giao dịch và check tự động, nhận acc sau 30s</strong></span></span></td>
                            </tr>
                            <tr>
                                <td><span style="color:#000000"><span style="font-size:16px">✅&nbsp;<strong>Nick Liên Quân&nbsp;đa dạng</strong></span></span></td>
                                <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐ Nhiều lựa chọn acc đa dạng: mệnh gíá, tướng, trang phục,...</strong></span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <p><span style="font-size:16px"><strong><a href="https://nick.vn/garena/lien-quan" target="_blank">Web mua bán nick Liên Quân Mobile UY TÍN - GIÁ RẺ</a></strong>. <strong>Shop bán acc<strong> </strong>Liên Quân</strong> - <strong>Tài khoản Liên Quân Vip</strong>, <strong>Nick Liên quân có đá quý.</strong>&nbsp;</span></p>
                    <p><span style="font-size:16px"><span style="color:#000000">Ngoài mua&nbsp;bán nick liên quân&nbsp;website còn</span> <strong><a href="https://nick.vn/mua-the" target="_blank"><span style="color:#c0392b">bán thẻ Garena</span></a></strong>,&nbsp;<a href="https://nick.vn/dich-vu/nap-quan-huy" target="_blank"><span style="color:#e67e22"><strong>mua bán quân huy giá rẻ</strong></span></a>,<a href="https://nick.vn/garena/lien-quan-random-so-cap" target="_blank"> <strong>bán acc liên quân<strong> </strong>random</strong></a>, <strong><a href="https://nick.vn/dich-vu/cay-thue-lien-quan">Cày thuê LQ</a> </strong>và rất nhiều dịch vụ khác về <strong>game LQM</strong></span></p>
                    <p></p>
                </div>
                <div style="text-align: center;margin: 15px 0">
                    <span class="viewless">« Thu gọn</span>
                </div>
            </div>
        </div>
        <div class="row  hidden-xs hidden-sm" style="margin-bottom: 15px">
            <div class="m-l-10 m-r-10">
                <form class="form-inline m-b-10" role="form" method="get" data-hs-cf-bound="true">
                    <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Tìm kiếm</span>
                            <input type="text" class="form-control c-square" value="" placeholder="Tìm kiếm" name="find">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Mã số</span>
                            <input type="text" class="form-control c-square" value="" placeholder="Mã số" name="id">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Giá tiền</span>
                            <select style="" class="form-control c-square" name="price">
                                <option value="">Chọn giá tiền</option>
                                <option value="duoi-50k">Dưới 50K</option>
                                <option value="tu-50k-200k">Từ 50K - 200K</option>
                                <option value="tu-200k-500k">Từ 200K - 500K</option>
                                <option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
                                <option value="tren-1-trieu">Trên 1 Triệu</option>
                                <option value="tren-5-trieu">Trên 5 Triệu</option>
                                <option value="tren-10-trieu">Trên 10 Triệu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Trạng thái</span>
                            <select style="" class="form-control c-square" name="status">
                                <option value="1" selected="">Chưa bán</option>
                                <option value="0">Đã bán</option>
                                <option value="3">Đã đặt cọc</option>
                                <option value="-999">Tất cả</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Rank</span>
                            <select name="attribute_id_593" class="form-control c-square" title="-- Không chọn --">
                                <option value="">-- Không chọn --</option>
                                <option value="596">Đồng</option>
                                <option value="597">Bạc</option>
                                <option value="598">Vàng</option>
                                <option value="599">Bạch Kim</option>
                                <option value="600">Kim Cương</option>
                                <option value="601">Cao Thủ</option>
                                <option value="602">Thách Đấu</option>
                                <option value="981">Tinh Anh</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Ngọc 90</span>
                            <select name="attribute_id_657" class="form-control c-square" title="-- Không chọn --">
                                <option value="">-- Không chọn --</option>
                                <option value="658">Không</option>
                                <option value="659">Có</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Nick có tướng trong đá quý</span>
                            <select name="attribute_id_1173" class="form-control c-square" title="-- Không chọn --">
                                <option value="">-- Không chọn --</option>
                                <option value="1175">Không</option>
                                <option value="1176">Có</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                        <div class="input-group c-square">
                            <span class="input-group-addon">Nick có trang phục trong đá quý</span>
                            <select name="attribute_id_1174" class="form-control c-square" title="-- Không chọn --">
                                <option value="">-- Không chọn --</option>
                                <option value="1177">Không</option>
                                <option value="1178">Có</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 p-5 no-radius">
                        <button type="submit" class="btn c-square c-theme c-btn-green">Tìm kiếm</button>
                        <a class="btn c-square m-l-0 btn-danger" href="https://nick.vn/garena/lien-quan">Tất cả</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="filter-product-mobile hidden-md hidden-lg">
            <div class="filter-left form-group">
            </div>
            <div class="filter-right form-group">
                <a class="btn btn-success" style="display: block">
                    <i class="fa fa-filter"></i> Tìm kiếm
                </a>
            </div>
            <div id="togger-filter"></div>
        </div>
        <div class="form-filter-right hidden-md hidden-lg">
            <div class="form-filter-content-mobile">
                <div class="list-product-left">
                    <div class="category-left">
                        <div class="title-product mb-4">
                            <span class="c-theme-link close-popup">×</span>
                            <h2 style="font-size: 16px;text-align: center">Tìm kiếm </h2>
                        </div>
                        <div class="category-list-product">
                        </div>
                    </div>
                    <hr>
                    <div class="search-list-product">
                        <form class="form-inline m-b-10" role="form" method="get" data-hs-cf-bound="true">
                            <div class="col-md-3 col-sm-4 p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Tìm kiếm</span>
                                    <input type="text" class="form-control c-square" value="" placeholder="Tìm kiếm" name="find">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Mã số</span>
                                    <input type="text" class="form-control c-square" value="" placeholder="Mã số" name="id">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Giá tiền</span>
                                    <select style="" class="form-control c-square" name="price">
                                        <option value="">Chọn giá tiền</option>
                                        <option value="duoi-50k">Dưới 50K</option>
                                        <option value="tu-50k-200k">Từ 50K - 200K</option>
                                        <option value="tu-200k-500k">Từ 200K - 500K</option>
                                        <option value="tu-500k-1-trieu">Từ 500K - 1 Triệu</option>
                                        <option value="tren-1-trieu">Trên 1 Triệu</option>
                                        <option value="tren-5-trieu">Trên 5 Triệu</option>
                                        <option value="tren-10-trieu">Trên 10 Triệu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Trạng thái</span>
                                    <select style="" class="form-control c-square" name="status">
                                        <option value="1" selected="">Chưa bán</option>
                                        <!--<option value="0" >Đã bán</option>
                              <option value="3" >Đã đặt cọc</option>-->
                                        <option value="-999">Tất cả</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Rank</span>
                                    <select name="attribute_id_593" class="form-control c-square" title="-- Không chọn --">
                                        <option value="">-- Không chọn --</option>
                                        <option value="596">Đồng</option>
                                        <option value="597">Bạc</option>
                                        <option value="598">Vàng</option>
                                        <option value="599">Bạch Kim</option>
                                        <option value="600">Kim Cương</option>
                                        <option value="601">Cao Thủ</option>
                                        <option value="602">Thách Đấu</option>
                                        <option value="981">Tinh Anh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Ngọc 90</span>
                                    <select name="attribute_id_657" class="form-control c-square" title="-- Không chọn --">
                                        <option value="">-- Không chọn --</option>
                                        <option value="658">Không</option>
                                        <option value="659">Có</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Nick có tướng trong đá quý</span>
                                    <select name="attribute_id_1173" class="form-control c-square" title="-- Không chọn --">
                                        <option value="">-- Không chọn --</option>
                                        <option value="1175">Không</option>
                                        <option value="1176">Có</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12  p-5 field-search">
                                <div class="input-group c-square">
                                    <span class="input-group-addon">Nick có trang phục trong đá quý</span>
                                    <select name="attribute_id_1174" class="form-control c-square" title="-- Không chọn --">
                                        <option value="">-- Không chọn --</option>
                                        <option value="1177">Không</option>
                                        <option value="1178">Có</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 p-5 no-radius">
                                <button type="submit" class="btn c-square c-theme c-btn-green" style="margin-right: 15px;margin-top: 15px">Tìm kiếm</button>
                                <a class="btn c-square m-l-0 btn-danger" href="https://nick.vn/garena/lien-quan" style="margin-top: 15px">Tất cả</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .form-filter-right {
                position: fixed;
                top: 0;
                right: -300px;
                width: 300px;
                height: 100%;
                background: #fff;
                color: #444;
                z-index: 10;
                transition: 400ms ease;
                overflow-y: scroll;
                transform: translateX(0px);
                z-index: 10000;
            }

            .form-filter-right.open {
                display: unset;
                height: 100%;
                transform: translateX(-300px);
            }

            #togger-filter {
                visibility: hidden;
                background-color: #000000bf;
                z-index: 1;
                height: 100%;
                width: 100%;
                left: 0;
                top: 0;
                overflow: hidden;
                position: fixed;
                z-index: 9999;
            }

            #togger-filter.active {
                transition: 0.4s;
                visibility: visible;
                cursor: pointer;
            }

            .form-filter-content-mobile {
                padding: 15px;
            }

            .close-popup {
                color: #818e9a;
                font-size: 36px;
                left: 11px;
                top: 7px;
                position: absolute;
                font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            }
        </style>
        <script>
            $('.filter-right').click(function() {
                $('.form-filter-right').toggleClass('open');
                $("#togger-filter").toggleClass("active");
            });
            $('#togger-filter').click(function(e) {
                $("#togger-filter").removeClass("active");
                $('.form-filter-right').removeClass('open');
            });

            $('#togger-filter').click(function(e) {
                $("#togger-filter").removeClass("active");
                $('.form-filter-right').removeClass('open');
            });
            $('.form-filter-right .close-popup').click(function(e) {
                $("#togger-filter").removeClass("active");
                $('.form-filter-right').removeClass('open');
            });
        </script>
        <div class="row row-flex  item-list">
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/acc/518480">
                            <!-- <a href="/acc/518480"> -->
                            <img src="{{asset('frontend/images/3RcdbTs582_1650188706.jpg')}}" alt="png-image">
                            <span class="ms">MS: 518480</span>
                        </a>
                    </div>
                    <div class="description">
                        Ngộ Không Nhóc Tì Bá Đạo IV, Ryoma...
                    </div>
                    <div class="attribute_info">
                        <div class="row">
                            <div class="col-xs-6 a_att">
                                Rank: <b>Cao Thủ</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Tướng: <b>54</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Trang Phục: <b>56</b>
                            </div>
                            <div class="col-xs-6 a_att">
                                Ngọc 90: <b>Có</b>
                            </div>
                        </div>
                    </div>
                    <div class="a-more">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="price_item">
                                    1,300,000đ
                                </div>
                            </div>
                            <div class="col-xs-6 ">
                                <div class="view">
                                    <a href="/acc/518480">Chi tiết</a>
                                    <!-- <a href="/acc/518480">Chi tiết</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
            <ul class="pagination pagination-sm">
                <li class="page-item disabled"><span class="page-link">«</span></li>
                <li class="page-item active"><span class="page-link">1</span></li>
                <li class="page-item"><a class="page-link" href="https://nick.vn/garena/lien-quan?page=2">2</a></li>
                <li class="page-item"><a class="page-link" href="https://nick.vn/garena/lien-quan?page=3">3</a></li>
                <li class="page-item disabled hidden-xs"><span class="page-link">...</span></li>
                <li class="page-item hidden-xs"><a class="page-link" href="https://nick.vn/garena/lien-quan?page=24">24</a></li>
                <li class="page-item"><a class="page-link" href="https://nick.vn/garena/lien-quan?page=2" rel="next">»</a></li>
            </ul>
        </div>
        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
            <input style="padding: 5px" type="number" min="1" id="page">
            <input style="padding: 5px" type="button" id="search" value="Chuyển trang">
        </div>
        <script type="text/javascript">
            $('#search').click(function() {
                var page = $('a[rel=next]').parent().prev().find('.page-link').text();
                if ($('#page').val() <= page) {
                    page = $('#page').val();
                }
                if ($('#page').val() == 0) {
                    page = 1;
                }
                if ($('#page').val() != "") {
                    location.href = 'https://nick.vn' + '/lien-quan?page=' + page;
                }
            })
        </script>
        <div class="tab-vertical tutorial_area">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="">Dịch vụ game khác <i class="glyphicon glyphicon-flag"></i></a>
                        </h5>
                    </div>
                    <div id="tab1" class="panel-collapse collapse in" aria-expanded="true" style="">
                        <div class="panel-body">
                            <p><strong>Lưu ý : <span style="color:#e74c3c">Mục tìm nick theo đá quý là :&nbsp;Đá quý và các món trong khó báu như tướng và skin hiếm có&nbsp;trong kho báu</span></strong></p>
                            <p>Ngoài&nbsp; <strong>shop bán acc liên quân</strong>&nbsp;Shop còn có các dịch vụ khác như <strong><a href="https://nick.vn/dich-vu/ban-quan-huy" target="_blank">mua bán quân huy giá rẻ</a></strong>, <strong><a href="https://nick.vn/mua-ban-nick-game-random" target="_blank">bán nick liên quân&nbsp;</a></strong><strong><a href="https://nick.vn/mua-ban-nick-game-random" target="_blank">random</a>&nbsp;,<span style="color:#e74c3c">bán thẻ garena giá&nbsp; rẻ và hơn 40 dịch vụ game khác</span></strong> tại&nbsp;<strong><a href="https://nick.vn/dich-vu" target="_blank">https://nick.vn/dich-vu</a>&nbsp;(<a href="https://nick.vn/dich-vu" target="_blank">click</a>)</strong></p>
                            <p><strong>Link bán quân huy</strong> :&nbsp;<strong><a href="https://nick.vn/dich-vu/lien-quan" target="_blank">https://nick.vn/dich-vu/lien-quan</a>&nbsp;(<a href="https://nick.vn/dich-vu/lien-quan" target="_blank">click</a>)</strong></p>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="">Group - fanpage cộng đồng <i class="glyphicon glyphicon-flag"></i></a>
                        </h5>
                    </div>
                    <div id="tab1" class="panel-collapse collapse in" aria-expanded="true" style="">
                        <div class="panel-body">
                            <p>Mình có tạo group về liên quân&nbsp;để anh em giao lưu. Ae ấn tham gia group và like page nhé</p>
                            <p>Group :&nbsp;Quanplay - Cộng Đồng Liên Quân Mobile</p>
                            <p>Link : <strong><a href="https://www.facebook.com/groups/lienquan.9/" target="_blank">https://www.facebook.com/groups/lienquan.9/</a></strong></p>
                            <p>Group :&nbsp;Hội Con Gái Chơi Liên Quân Mobile</p>
                            <p>Link :&nbsp;<a href="https://www.facebook.com/groups/lienquanmobile.girl/" target="_blank">https://www.facebook.com/groups/lienquanmobile.girl/</a></p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection