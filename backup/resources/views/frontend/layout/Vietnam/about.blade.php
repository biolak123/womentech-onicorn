<!-- /*
 * Author: Le Trung Hieu
 * Date: 24/9/2021
*/ -->
@extends('frontend.about-master-VN')

@section('title', 'About')

@section('content')

        <div class="title">
            <div class="container">
                <h1>Về chúng tôi</h1>
                <div class="text-left">

                </div>
            </div>
        </div>
    </header>


    <div class="main">
        <div class="container">
            <div class="top-main">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="content">
                            <p>WomenTech Singapore ra đời là Quỹ khởi nghiệp sáng tạo với sứ mệnh hỗ trợ, kiến tạo đồng hành cùng phụ nữ khởi nghiệp và các nữ doanh chủ trong kỷ nguyên số. <br><br>WomenTech với tầm nhìn trở thành đầu tàu dẫn dắt và đồng
                                hành cùng những doanh nghiệp, những nữ doanh chủ khát vọng, đổi mới, sáng tạo. <br><br>Sau nhiều năm tạo tiền đề và xây dựng nền tảng hệ sinh thái, WomenTech đã chính thức phát hành WTA Token dựa trên nền tảng công nghệ
                                Blockchain dành cho các cá nhân, doanh chủ và doanh nghiệp cho việc phát triển, quản lý chuỗi cung ứng qua các hợp đồng thông minh. Đồng thời WTA Token là tài sản số chính thức của Quỹ khởi nghiệp sáng tạo dành cho phụ
                                nữ toàn cầu, được phát triển bởi đội ngũ chuyên gia và cố vấn tại nhiều nơi trên thế giới. <br><br>WTA với lộ trình được đề ra trong vòng 5 năm tới, sẽ hỗ trợ hàng triệu người trên thế giới và hàng ngàn doanh nghiệp khởi
                                nghiệp sáng tạo, xây dựng nền tảng và hệ sinh thái doanh nghiệp bền vững.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wta">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-wta">
                            <h1>WTA</h1>
                            <h1>sẽ được ứng dụng với các nhiệm vụ:</h1>
                        </div>
                    </div>
                </div>
                <!-- mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box-left box">
                                <img src="{{url('public/frontend/images/Vector (3).svg')}}" alt="">
                                <h1>Quản trị</h1>
                                <p>Thực hiện và đầu tư các dự án công khai minh bạch</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box-right box">
                                <img src="{{url('public/frontend/images/Vector (4).svg')}}" alt="">
                                <h1>Tài chính</h1>
                                <p>Làm bản vị cho các giao thức tài chính trên hệ thống và hệ sinh thái</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box-left box">
                                <img src="{{url('public/frontend/images/Group 875.svg')}}" alt="">
                                <h1>Tài sản</h1>
                                <p>Ứng dụng là tài sản số, tài sản thế chấp, các dịch vụ cho vay ngang hàng</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box-right box">
                                <img src="{{url('public/frontend/images/Vector (5).svg')}}" alt="">
                                <h1>Văn hóa & Nghệ thuật</h1>
                                <p>Số hóa các tài sản vật thể và phi vật thể qua công nghệ NFT</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pc -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-left box">
                            <img src="{{url('public/frontend/images/Vector (3).svg')}}" alt="">
                            <h1>Quản trị</h1>
                            <p>Thực hiện và đầu tư các dự án công khai minh bạch</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-right box">
                            <img src="{{url('public/frontend/images/Vector (4).svg')}}" alt="">
                            <h1>Tài chính</h1>
                            <p>Làm bản vị cho các giao thức tài chính trên hệ thống và hệ sinh thái</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-left box">
                            <img src="{{url('public/frontend/images/Group 875.svg')}}" alt="">
                            <h1>Tài sản</h1>
                            <p>Ứng dụng là tài sản số, tài sản thế chấp, các dịch vụ cho vay ngang hàng</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-right box">
                            <img src="{{url('public/frontend/images/Vector (5).svg')}}" alt="">
                            <h1>Văn hóa & Nghệ thuật</h1>
                            <p>Số hóa các tài sản vật thể và phi vật thể qua công nghệ NFT</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="wta-bottom">
                        <p>Và hơn hết, WTA được sử dụng trong hệ sinh thái WomenTech để trao đổi các dịch vụ đời sống như: Thương mại điện tử, nền tảng học trực tuyến, các nhà hàng, khách sạn, bất động sản, và ứng dụng trong hệ sinh thái.<br><br> Với mục
                            tiêu và sứ mệnh hướng đến cộng đồng, đặc biệt là phụ nữ trong thời đại số, WTA chính là tài sản đầu tư gắn liền với sự phát triển lớn mạnh của hệ sinh thái qua tính ứng dụng thực tế vào cuộc sống và các giá trị nhân văn.
                        </p>
                    </div>
                </div>
            </div>
            <div class="team">
                <div class="title-team">
                    <h1>Đội ngũ</h1>
                </div>
                <!-- mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 7.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">ThS. Phạm Thị Thúy</p>
                                    <p id="position">Founder - COB </p>
                                    <ul id="infor">
                                        <li>Chủ tịch Bách Gia Trăm Họ Việt Nam</li>
                                        <li>Nhà đầu tư giáo dục, nhà quản lý trường học</li>
                                        <li>Nhà giáo, Nhà nghiên cứu giáo dục thời 4.0</li>
                                        <li>Set up vận hành các hệ thống trường liên cấp Hoàng Diệu Victoria tại Hà Nội, Bình Dương và Pleiku</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 2.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">TS. Nguyễn Dũng Thương </p>
                                    <p id="position">CEO </p>
                                    <ul id="infor">
                                        <li>Chủ tịch kiêm Viện trưởng Viện Nghiên Cứu Tài Chính, Đầu tư và Hợp tác Thương mại Đông Nam Á</li>
                                        <li>Tác giả và chủ nhiệm dự án Edutech - Trường học trực tuyến số 1 Việt Nam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 3.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Ông. Trịnh Văn Sao </p>
                                    <p id="position">CFO</p>
                                    <ul id="infor">
                                        <li>Cử Nhân QTKD Tổng Hợp Đại Học Kinh Tế Quốc Dân.</li>
                                        <li>10 Năm Viên Chức Trong Nghành Y Tế Việt Nam.</li>
                                        <li>10 Năm Kinh Nghiệm Xây Dựng Phát Triển Hệ Thống Con người. </li>
                                        <li>5 Năm Kinh Nghiệm Trong Thị Trường Crypto.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 4.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Ông. Bùi Quang Huy </p>
                                    <p id="position">CMO</p>
                                    <ul id="infor">
                                        <li>Founder & CEO Công ty cổ phần truyền thông Onicorn</li>
                                        <li>Thành viên của JCI Vietnam Thành viên của liên đoàn lãnh đạo trẻ và doanh nhân thế giới</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 5.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Bà. Lê Phương Linh </p>
                                    <p id="position">CHRO</p>
                                    <ul id="infor">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 6.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Bà. Vũ Thị Hà </p>
                                    <p id="position">CAO</p>
                                    <ul id="infor">
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 13.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Ông. Hồ Phước Thật</p>
                                    <p id="position">CTO</p>
                                    <ul id="infor">
                                        <li>Founder & CEO Công ty cổ phần Corevestor</li>
                                        <li>3 năm kinh nghiệm triển khai và ứng dụng công nghệ Blockchain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- pc -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 7.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">ThS. Phạm Thị Thúy</p>
                                <p id="position">Founder - COB </p>
                                <ul id="infor">
                                    <li>Chủ tịch Bách Gia Trăm Họ Việt Nam</li>
                                    <li>Nhà đầu tư giáo dục, nhà quản lý trường học</li>
                                    <li>Nhà giáo, Nhà nghiên cứu giáo dục thời 4.0</li>
                                    <li>Set up vận hành các hệ thống trường liên cấp Hoàng Diệu Victoria tại Hà Nội, Bình Dương và Pleiku</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 2.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">TS. Nguyễn Dũng Thương </p>
                                <p id="position">CEO </p>
                                <ul id="infor">
                                    <li>Chủ tịch kiêm Viện trưởng Viện Nghiên Cứu Tài Chính, Đầu tư và Hợp tác Thương mại Đông Nam Á</li>
                                    <li>Tác giả và chủ nhiệm dự án Edutech - Trường học trực tuyến số 1 Việt Nam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 3.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Ông. Trịnh Văn Sao </p>
                                <p id="position">CFO</p>
                                <ul id="infor">
                                    <li>Cử Nhân QTKD Tổng Hợp Đại Học Kinh Tế Quốc Dân.</li>
                                    <li>10 Năm Viên Chức Trong Nghành Y Tế Việt Nam.</li>
                                    <li>10 Năm Kinh Nghiệm Xây Dựng Phát Triển Hệ Thống Con người. </li>
                                    <li>5 Năm Kinh Nghiệm Trong Thị Trường Crypto.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 4.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Ông. Bùi Quang Huy </p>
                                <p id="position">CMO</p>
                                <ul id="infor">
                                    <li>Founder & CEO Công ty cổ phần truyền thông Onicorn</li>
                                    <li>Thành viên của JCI Vietnam Thành viên của liên đoàn lãnh đạo trẻ và doanh nhân thế giới</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{('public/frontend/images/01 5.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Bà. Lê Phương Linh </p>
                                <p id="position">CHRO</p>
                                <ul id="infor">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 6.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Bà. Vũ Thị Hà </p>
                                <p id="position">CAO</p>
                                <ul id="infor">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 13.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Ông. Hồ Phước Thật</p>
                                <p id="position">CTO</p>
                                <ul id="infor">
                                    <li>Founder & CEO Công ty cổ phần Corevestor</li>
                                    <li>3 năm kinh nghiệm triển khai và ứng dụng công nghệ Blockchain</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>

            <div class="adviser">
                <div class="title-adviser">
                    <h1>Ban cố vấn</h1>
                </div>
                <!-- mobile -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 4 (1).jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">PGS-TS. Vũ Dương Thụy </p>
                                    <ul id="infor">
                                        <li>Nguyên Tổng biên tập Nhà Xuất bản Giáo dục Việt Nam</li>
                                        <li>Viện trưởng Viện nghiên cứu và Phát triển Tiềm Năng Việt</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 5 (1).jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">TS. Lê Doãn Hợp </p>
                                    <ul id="infor">
                                        <li>Nguyên Bộ trưởng Bộ truyền thông và Thông tin Việt Nam</li>
                                        <li>Chủ tịch danh dự Hội Truyền thông số Việt Nam</li>
                                        <li>Chủ tịch Hội đồng hương Nghệ An</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 6 (1).jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">TS. Bùi Quang Ngọc</p>
                                    <ul id="infor">
                                        <li>Phó Chủ tịch HĐQT kiêm Tổng giám đốc FPT</li>
                                        <li>Thành viên HĐQT FPT Telecom</li>
                                        <li>Giám đốc Công ty TNHH Đầu tư FPT</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 7 (1).jpg ')}}" alt="">
                                <div class="box-name">
                                    <p id="name">GS-TS. Hồ Trọng Ngũ </p>
                                    <ul id="infor">
                                        <li>Nguyên Phó chủ nhiệm Ủy ban Quốc phòng – An ninh Quốc hội nước CHXHCN Việt Nam</li>
                                        <li>Nguyên Phó Giám đốc Học viện Cảnh sát Nhân dân</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 8.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">TS. Bùi Đình Vụ </p>
                                    <ul id="infor">
                                        <li>Phó chủ tịch Hội đồng các dòng họ Việt Nam</li>
                                        <li>Nguyên chuyên viên cao cấp ban Thanh Tra Chính Phủ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 9.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Darren Wong</p>
                                    <ul id="infor">
                                        <li>Director of MREGIS TRADING PTE. LTD. Singapore</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="layer"></div>
                                <img src="{{url('public/frontend/images/01 10.jpg')}}" alt="">
                                <div class="box-name">
                                    <p id="name">Tan Yung Tjien Andrew </p>
                                    <ul id="infor">
                                        <li>Cluster Finance Manager</li>
                                        <li>Shell Specialities at Shell Eastern Petroleum Pte Ltd</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pc -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 4 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">PGS-TS. Vũ Dương Thụy </p>
                                <ul id="infor">
                                    <li>Nguyên Tổng biên tập Nhà Xuất bản Giáo dục Việt Nam</li>
                                    <li>Viện trưởng Viện nghiên cứu và Phát triển Tiềm Năng Việt</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 5 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">TS. Lê Doãn Hợp </p>
                                <ul id="infor">
                                    <li>Nguyên Bộ trưởng Bộ truyền thông và Thông tin Việt Nam</li>
                                    <li>Chủ tịch danh dự Hội Truyền thông số Việt Nam</li>
                                    <li>Chủ tịch Hội đồng hương Nghệ An</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 6 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">TS. Bùi Quang Ngọc</p>
                                <ul id="infor">
                                    <li>Phó Chủ tịch HĐQT kiêm Tổng giám đốc FPT</li>
                                    <li>Thành viên HĐQT FPT Telecom</li>
                                    <li>Giám đốc Công ty TNHH Đầu tư FPT</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 7 (1).jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">GS-TS. Hồ Trọng Ngũ </p>
                                <ul id="infor">
                                    <li>Nguyên Phó chủ nhiệm Ủy ban Quốc phòng – An ninh Quốc hội nước CHXHCN Việt Nam</li>
                                    <li>Nguyên Phó Giám đốc Học viện Cảnh sát Nhân dân</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 8.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">TS. Bùi Đình Vụ </p>
                                <ul id="infor">
                                    <li>Phó chủ tịch Hội đồng các dòng họ Việt Nam</li>
                                    <li>Nguyên chuyên viên cao cấp ban Thanh Tra Chính Phủ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 9.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Darren Wong</p>
                                <ul id="infor">
                                    <li>Director of MREGIS TRADING PTE. LTD. Singapore</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="layer"></div>
                            <img src="{{url('public/frontend/images/01 10.jpg')}}" alt="">
                            <div class="box-name">
                                <p id="name">Tan Yung Tjien Andrew </p>
                                <ul id="infor">
                                    <li>Cluster Finance Manager</li>
                                    <li>Shell Specialities at Shell Eastern Petroleum Pte Ltd</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="partner">
        <div class="container">
            <h1>Đối tác</h1>
            <div class="container">
                <section class="customer-logos slider">
                <div class="slide"><img src="{{url('public/frontend/images/Group 635.svg')}}" alt="logo"></div>
                <div class="slide"><img src="{{url('public/frontend/images/Group 636.svg')}}" alt="logo"></div>
                <div class="slide"><img src="{{url('public/frontend/images/Group 639.svg')}}" alt="logo"></div>
                <div class="slide"><img src="{{url('public/frontend/images/Group 638.svg')}}" alt="logo"></div>
                <div class="slide"><img src="{{url('public/frontend/images/Group 634.svg')}}" alt="logo"></div>
                <div class="slide"><img src="{{url('public/frontend/images/Group 632.svg')}}" alt="logo"></div>
                <div class="slide"><img src="{{url('public/frontend/images/Group 637.svg')}}" alt="logo"></div>
                </section>
            </div>
        </div>
    </div>

    @endsection