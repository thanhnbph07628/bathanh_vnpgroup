@extends('frontend.layout.base')
@section('content')
<section class="banner">
            <img src="image/nhan-vien-kienlongbank-3.jpg" />
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
        <section class="career">
            <div class="container">
                <div class="group-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#home" aria-controls="home" class="active show" role="tab" data-toggle="tab">Vị trí tuyển dụng</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sinh viên thực tập</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="career-block">
                                    <img src="image/nv-nu-hoi-so-(resize).jpg" alt="">
                                    <div class="career-content">
                                        <p class="hot">Hot</p>
                                        <div class="career-title">
                                            <h5>Nhân viên Xử lý nợ - Tp.HCM</h5>
                                        </div>
                                        <div class="career-hover">
                                            <h5>Nhân viên xử lý nợ - TP>HCM</h5>
                                            <p><i class="fa fa-map-marker"></i>Nhân viên tại Hội sở</p>
                                            <p><i class="fa fa-history"></i><a href="{{route('recruitment')}}">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="career-block">
                                    <img src="image/nv-nu-hoi-so-(resize).jpg" alt="">
                                    <div class="career-content">
                                        <p class="hot">Hot</p>
                                        <div class="career-title">
                                            <h5>Nhân viên Xử lý nợ - Tp.HCM</h5>
                                        </div>
                                        <div class="career-hover">
                                            <h5>Nhân viên xử lý nợ - TP>HCM</h5>
                                            <p><i class="fa fa-map-marker"></i>Nhân viên tại Hội sở</p>
                                            <p><i class="fa fa-history"></i><a href="{{route('recruitment')}}">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="career-block">
                                    <img src="image/nv-nu-hoi-so-(resize).jpg" alt="">
                                    <div class="career-content">
                                        <p class="hot">Hot</p>
                                        <div class="career-title">
                                            <h5>Nhân viên Xử lý nợ - Tp.HCM</h5>
                                        </div>
                                        <div class="career-hover">
                                            <h5>Nhân viên xử lý nợ - TP>HCM</h5>
                                            <p><i class="fa fa-map-marker"></i>Nhân viên tại Hội sở</p>
                                            <p><i class="fa fa-history"></i><a href="{{route('recruitment')}}">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px">
                                <div class="career-block">
                                    <img src="image/nv-nu-hoi-so-(resize).jpg" alt="">
                                    <div class="career-content">
                                        <p class="hot">Hot</p>
                                        <div class="career-title">
                                            <h5>Nhân viên Xử lý nợ - Tp.HCM</h5>
                                        </div>
                                        <div class="career-hover">
                                            <h5>Nhân viên xử lý nợ - TP>HCM</h5>
                                            <p><i class="fa fa-map-marker"></i>Nhân viên tại Hội sở</p>
                                            <p><i class="fa fa-history"></i><a href="{{route('recruitment')}}">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px">
                                <div class="career-block">
                                    <img src="image/nv-nu-hoi-so-(resize).jpg" alt="">
                                    <div class="career-content">
                                        <p class="hot">Hot</p>
                                        <div class="career-title">
                                            <h5>Nhân viên Xử lý nợ - Tp.HCM</h5>
                                        </div>
                                        <div class="career-hover">
                                            <h5>Nhân viên xử lý nợ - TP>HCM</h5>
                                            <p><i class="fa fa-map-marker"></i>Nhân viên tại Hội sở</p>
                                            <p><i class="fa fa-history"></i><a href="{{route('recruitment')}}">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top: 20px">
                                <div class="career-block">
                                    <img src="image/nv-nu-hoi-so-(resize).jpg" alt="">
                                    <div class="career-content">
                                        <p class="hot">Hot</p>
                                        <div class="career-title">
                                            <h5>Nhân viên Xử lý nợ - Tp.HCM</h5>
                                        </div>
                                        <div class="career-hover">
                                            <h5>Nhân viên xử lý nợ - TP>HCM</h5>
                                            <p><i class="fa fa-map-marker"></i>Nhân viên tại Hội sở</p>
                                            <p><i class="fa fa-history"></i><a href="{{route('recruitment')}}">Xem chi tiết</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                                <a href="#" class="view-more">XEM THÊM</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="row">
                            <div class="text-center">
                                <a href="#" class="view-more">XEM THÊM</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="education">
            <div class="container">
                <div class="row education-title">
                    <div class="text-center">
                        <h2>Hướng dẫn dự tuyển</h2>
                        <p>Ứng viên thực hiện theo hướng dẫn sau</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-step">
                            <div class="block-step-image">
                                <img src="image/home_reg_1.png" alt=""/>
                            </div>
                            <div class="blog-step-content">
                                <h3 style="color:#0f848d">Cách 1</h3>
                                <div class="text-center">
                                    Click vào nút <span class="text-lightcolor" style="color:#0f848d">“Ứng tuyển”</span> tại màn hình chi tiết của vị trí tuyển dụng
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-step">
                            <div class="block-step-image">
                                <img src="image/home_reg_2.png" alt=""/>
                            </div>
                            <div class="blog-step-content">
                                <h3 style="color:#0f848d">Cách 2</h3>
                                <div class="text-center">
                                    Tải <span class="text-lightcolor" style="color:#0f848d">Thông tin ứng viên</span> và gửi về <a href="mailto:tuyendung@kienlongbank.com">tuyendung@kienlongbank.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-step">
                            <div class="block-step-image">
                                <img src="image/home_reg_3.png" alt=""/>
                            </div>
                            <div class="blog-step-content">
                                <h3 style="color:#0f848d">Cách 3</h3>
                                <div class="text-center">
                                    <span class="text-lightcolor" style="color:#0f848d">Nộp hồ sơ trực tiếp</span> tại địa chỉ 98-108A Cách Mạng Tháng Tám, P.7, Q.3, TP.HCM
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row education-title">
                    <div class="text-center">
                        <h2>Quy trình tuyển dụng</h2>
                        <p>Kienlongbank sẽ liên hệ các ứng viên phù hợp với tiêu chí tuyển dụng</p>
                    </div>
                </div>
                <div class="row">
                    <div class="list-item">
                        <div class="item">
                            <div class="item-title">
                                <img src="./image/1.png" alt="">
                                <span>Tham gia ứng tuyển</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-title">
                                <img src="./image/2.png" alt="">
                                <span>Tiếp nhận và sàng lọc hồ sơ</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-title">
                                <img src="./image/3.png" alt="">
                                <span>Tham gia phỏng vấn</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-title">
                                <img src="./image/4.png" alt="">
                                <span>Thông báo quyết định tuyển dụng</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-title">
                                <img src="./image/5.png" alt="">
                                <span>Hoàn thiện hồ sơ sau khi tuyển dụng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recruitment">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>Chia sẻ của nhân viên Kienlongbank</h2>
                    </div>
                </div>
                <div class="owl-carousel">
                    <div class="item">
                        <div class="recruitment-image">
                            <img src="image/tran-thi-thanh-kienlongbank-truyen-thong-marketing-1.jpg" alt="" />
                        </div>
                        <div class="recruitment-content">
                            <h5 class="name">Trần Thị Thanh</h5>
                            <p class="position">Trưởng bộ phận Truyền thông</p>
                            <p class="quote">Tôi cảm nhận được khi làm việc tại nơi này đó chính là sự thân thiện của các cấp Lãnh đạo cư xử với nhau như một gia đình.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="recruitment-image">
                            <img src="image/tran-thi-thanh-kienlongbank-truyen-thong-marketing-1.jpg" alt="" />
                        </div>
                        <div class="recruitment-content">
                            <h5 class="name">Trần Thị Thanh</h5>
                            <p class="position">Trưởng bộ phận Truyền thông</p>
                            <p class="quote">Tôi cảm nhận được khi làm việc tại nơi này đó chính là sự thân thiện của các cấp Lãnh đạo cư xử với nhau như một gia đình.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="recruitment-image">
                            <img src="image/tran-thi-thanh-kienlongbank-truyen-thong-marketing-1.jpg" alt="" />
                        </div>
                        <div class="recruitment-content">
                            <h5 class="name">Trần Thị Thanh</h5>
                            <p class="position">Trưởng bộ phận Truyền thông</p>
                            <p class="quote">Tôi cảm nhận được khi làm việc tại nơi này đó chính là sự thân thiện của các cấp Lãnh đạo cư xử với nhau như một gia đình.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="recruitment-image">
                            <img src="image/tran-thi-thanh-kienlongbank-truyen-thong-marketing-1.jpg" alt="" />
                        </div>
                        <div class="recruitment-content">
                            <h5 class="name">Trần Thị Thanh</h5>
                            <p class="position">Trưởng bộ phận Truyền thông</p>
                            <p class="quote">Tôi cảm nhận được khi làm việc tại nơi này đó chính là sự thân thiện của các cấp Lãnh đạo cư xử với nhau như một gia đình.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2>Tin tuyển dụng</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="#" class="blog-image"><img src="image/chuong-trinh-dao-tao-boi-duong-nang-cao-nang-luc-quan-ly.jpg" alt="" /></a>
                        <div class="blog-title"><a href="#">Kienlongbank tổ chức Lớp “Bồi dưỡng nâng cao năng lực quản lý”</a></div>
                        <div class="time">14.07.2020</div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="#" class="blog-image"><img src="image/chuong-trinh-office-tour-11.jpg" alt="" /></a>
                        <div class="blog-title"><a href="#">Kienlongbank: Hơn 200 sinh viên Đại học Tôn Đức Thắng tham gia chương trình Office Tour</a></div>
                        <div class="time">12.06.2020</div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="#" class="blog-image"><img src="image/ban-lanh-dao-chup-luu-niem-cung-hoc-vien-1.jpg" alt="" /></a>
                        <div class="blog-title"><a href="#">Kienlongbank khai mạc khóa đào tạo, huấn luyện theo chức danh K.24</a></div>
                        <div class="time">17.09.2019</div>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center">
                        <a href="#" class="view-more">XEM THÊM</a>
                    </div>
                </div>
            </div>
        </section>
@endsection