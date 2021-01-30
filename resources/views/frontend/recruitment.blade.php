@extends('frontend.layout.base')
@section('content')
<section class="breadcrumb">
            <div class="container">
                <div class="text-left">
                    <a href="#">Trang chủ</a> >
                    <a href="#">Vị trí tuyển dụng - Sinh viên thực tập</a> >
                    <a href="#">Vị trí tuyển dụng</a>
                </div>
            </div>
        </section>
        <section class="grid">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="grid-box">
                    <img src="image/banner-ctdaotao.png" alt="">
                    <div class="grid-title">
                        <h2>
                            Vị trí <br /> Tuyển dụng
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="grid-box">
                    <img src="image/banner-thuctaptaiklb.png" alt="">
                    <div class="grid-title">
                        <h2>
                            Sinh viên <br /> Thực tập
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="job-search">
            <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <i class="fa fa-briefcase icon"></i>
                    <input type="text" placeholder="Nhập tên kỹ năng, công việc"/>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <i class="fa fa-address-book icon"></i>
                    <select>
                        <option value="" selected="selected">Chọn ngành nghề</option>
                        <option value="">Giao dịch viên</option>
                        <option value="">Giám đốc PGD</option>
                        <option value="">Giám đốc chi nhánh</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <i class="fa fa-map-marker icon"></i>
                    <select>
                        <option value="" selected="selected">Chọn địa điểm làm việc</option>
                        <option value="">Hà Nội</option>
                        <option value="">Hải Phòng</option>
                        <option value="">Hồ Chí Minh</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="#" class="btn-search"><i class="fa fa-search"></i>Tìm kiếm</a>
                    <a href="#" class="btn-download"><i class="fa fa-file"></i>Tải mẫu thông tin ứng viên</a>
                </div>
            </div>
        </section>
        <section class="list-job">
            <div class="container">
                <table class="table">
                    <thead>
                    <tr class="text-center">
                        <th style="width: 40%">Vị trí tuyển dụng</th>
                        <th style="width: 15%">Cấp bậc/Chức vụ</th>
                        <th style="width: 15%">Địa điểm làm việc</th>
                        <th style="width: 15%">Mức lương</th>
                        <th style="width: 15%">Hạn nộp hồ sơ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giao dịch viên - Tp. Bến Tre">Giao dịch viên - Tp. Bến Tre</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bến Tre</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giao dịch viên - Tp. Tây Ninh">Giao dịch viên - Tp. Tây Ninh</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Tây Ninh</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giao dịch viên - Bình Dương (Tp. Thủ Dầu Một, Lái Thiêu)">Giao dịch viên - Bình Dương (Tp. Thủ Dầu Một, Lái Thiêu)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bình Dương</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giao dịch viên - Khánh Hoà (Cam Ranh)">Giao dịch viên - Khánh Hoà (Cam Ranh)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Khánh Hòa</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giao dịch viên - Bà Rịa - Vũng Tàu (Tp. Bà Rịa)">Giao dịch viên - Bà Rịa - Vũng Tàu (Tp. Bà Rịa)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bà Rịa-Vũng Tàu</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Nhân viên Thủ quỹ - Sóc Trăng (Vĩnh Châu)">Nhân viên Thủ quỹ - Sóc Trăng (Vĩnh Châu)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Sóc Trăng</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">10-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Nhân viên Xử lý nợ - Tp.HCM">Nhân viên Xử lý nợ - Tp.HCM</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Hội sở</td>
                        <td style="width: 15%">Xem chi tiết</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Nhân viên Thủ quỹ - Tây Ninh (Trảng Bàng)">Nhân viên Thủ quỹ - Tây Ninh (Trảng Bàng)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Tây Ninh</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Trưởng Phòng Kế toán - Ngân quỹ Chi nhánh Bà Rịa - Vũng Tàu">Trưởng Phòng Kế toán - Ngân quỹ Chi nhánh Bà Rịa - Vũng Tàu</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Quản lý tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bà Rịa-Vũng Tàu</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giám đốc Phòng Giao dịch">Giám đốc Phòng Giao dịch</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Quản lý tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Xem chi tiết</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="{{route('recruitment_detail')}}" target="_self" title="Giao dịch viên - Hậu Giang, An Giang (Tân Châu), Cần Thơ (Ô Môn)">Giao dịch viên - Hậu Giang, An Giang (Tân Châu), Cần Thơ (Ô Môn)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Xem chi tiết</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">05-02-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tu-van-khach-hang-binh-duong-lai-thieu" target="_self" title="Nhân viên Tư vấn khách hàng - Bình Dương (Lái Thiêu)">Nhân viên Tư vấn khách hàng - Bình Dương (Lái Thiêu)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bình Dương</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2020</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tu-van-khach-hang-binh-dinh-hoai-nhon" target="_self" title="Nhân viên Tư vấn khách hàng - Bình Định (Hoài Nhơn)">Nhân viên Tư vấn khách hàng - Bình Định (Hoài Nhơn)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bình Định</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tu-van-khach-hang-vinh-long-tp-vinh-long" target="_self" title="Nhân viên Tư vấn khách hàng - Vĩnh Long (Tp. Vĩnh Long)">Nhân viên Tư vấn khách hàng - Vĩnh Long (Tp. Vĩnh Long)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Vĩnh Long</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/ban-giam-doc-chi-nhanh" target="_self" title="Ban Giám đốc Chi nhánh">Ban Giám đốc Chi nhánh</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Quản lý tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Xem chi tiết</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tin-dung-kien-giang-dong-thap" target="_self" title="Nhân viên Tín dụng - Kiên Giang, Đồng Tháp">Nhân viên Tín dụng - Kiên Giang, Đồng Tháp</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Xem chi tiết</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tin-dung-phu-yen-tuy-an-1" target="_self" title="Nhân viên Tín dụng - Phú Yên (Tuy An)">Nhân viên Tín dụng - Phú Yên (Tuy An)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Phú Yên</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tin-dung-khanh-hoa-nha-trang-cam-ranh" target="_self" title="Nhân viên Tín dụng - Khánh Hoà (Nha Trang, Cam Ranh)">Nhân viên Tín dụng - Khánh Hoà (Nha Trang, Cam Ranh)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Khánh Hòa</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tin-dung-ba-ria-vung-tau-long-dien" target="_self" title="Nhân viên Tín dụng - Bà Rịa - Vũng Tàu (Long Điền)">Nhân viên Tín dụng - Bà Rịa - Vũng Tàu (Long Điền)</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Bà Rịa-Vũng Tàu</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">31-01-2021</td>
                    </tr>
                    <tr>
                        <td style="width: 40%">
                        <a href="https://tuyendung.kienlongbank.com/nhan-vien-tin-dung-da-nng" target="_self" title="Nhân viên Tín dụng - Đà Nẵng">Nhân viên Tín dụng - Đà Nẵng</a>
                        <span>HOT</span>
                        </td>
                        <td style="width: 15%">Nhân viên tại Đơn vị kinh doanh</td>
                        <td style="width: 15%">Đà Nẵng</td>
                        <td style="width: 15%">Thoả thuận</td>
                        <td style="width: 15%">30-01-2021</td>
                    </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <ul>
                        <li class="active">1</li>
                        <li>2</li>
                        <li>></li>
                        <li>>></li>
                    </ul>
                </div>
            </div>
        </section>
@endsection