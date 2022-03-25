<!-- /*
 * Author: Le Trung Hieu
 * Date: 24/9/2021
*/ -->
@extends('frontend.home-master-VN')

@section('title', 'Home')

@section('content')

<div class="banner">
    <div class="container">
        <h4>Chào mừng bạn đến với</h4>
        <h1>WomenTech</h1>
        <p>WTA là đồng tiền bản vị của<br> hệ sinh thái WomenTech </p>
        <a href="https://wallet.wta.finance/login.html">
            <button type="submit">Đăng nhập</button>
        </a>
    </div>
</div>
</header>
<div id="popup-giua-man-hinh">
    <div id="popUpBannerBox">
        <div class="popUpBannerInner">
            <div class="popUpBannerContent">
                <p><a href="#" id="closeButton">X</a></p>

                <!-- ==================== CODE HIỂN THỊ QUẢNG CÁO ====================-->

                <a href="https://wallet.wta.finance/login.html" class="image-banner"><img
                        src="https://media.giphy.com/media/Zxq4ew9yv7vlVmT8mz/giphy.gif" /></a>

                <!-- ==================== END HIỂN THỊ QUẢNG CÁO ====================-->
            </div>
        </div>
    </div>




</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
function showPopUpBanner() {
    $('#popUpBannerBox').fadeIn("2000");
}
setTimeout($('#popUpBannerBox').fadeIn("2000"), 1000); //thời gian popup bắt đầu hiển thị

$('#popUpBannerBox').click(function(e) {
    if (!$(e.target).is('.popUpBannerContent, .popUpBannerContent *')) {
        $('#popUpBannerBox').fadeOut(2000);
        return false;
    }
});
var editAddress = $('#popUpBannerBox');

$(document).ready(function() {
    $("#closeButton").click(function() {
        editAddress.fadeOut("2000");
    });
});
</script>

<div class="main">
    <div class="container">
        <div class="about-us">
            <h1>Về chúng tôi</h1>
            <div class="row">
                <div class="col-md-5">
                    <h2>Chúng tôi là WTA</h2>
                    <p>WTA Token là tài sản số chính thức của Quỹ khởi nghiệp sáng tạo dành cho phụ nữ toàn cầu, được
                        phát triển bởi đội ngũ chuyên gia và cố vấn tại nhiều nơi trên thế giới.</p>
                    <p>WTA Token dựa trên nền tảng công nghệ Blockchain dành cho các cá nhân, doanh chủ và doanh nghiệp
                        cho việc phát triển, quản lý chuỗi cung ứng qua các hợp đồng thông minh.</p>
                    <p>WomenTech với tầm nhìn trong vòng 5 năm tới, sẽ hỗ trợ hàng triệu người trên thế giới và hàng
                        ngàn doanh nghiệp khởi nghiệp sáng tạo, xây dựng nền tảng và hệ sinh thái doanh nghiệp bền vững.
                    </p>
                </div>
                <div class="col-md-7">
                    <iframe width="900" height="506" src="https://www.youtube.com/embed/OnQUF0Y_bw8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="service">
            <h1>Dịch vụ</h1>

            <!-- service mobile  -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box">
                            <img src="public/frontend/images/Group.svg" alt="">
                            <h3>Kết nối</h3>
                            <p>Kết nối, kiến tạo cộng đồng, tạo môi trường phát triển</p>
                            <a href="{{url('/service-userVn')}}">Readmore</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <img src="public/frontend/images/Group (1).svg" alt="">
                            <h3>Đầu tư</h3>
                            <p>Đầu tư, gọi vốn, gia tăng năng lực tài chính</p>
                            <a href="{{url('/service-userVn')}}">Readmore</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <img src="public/frontend/images/Group 640.svg" alt="">
                            <h3>Xây dựng</h3>
                            <p>Tạo lập nền tảng và giá trị cốt lõi</p>
                            <a href="{{url('/service-userVn')}}">Readmore</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <img src="public/frontend/images/Vector (2).svg" alt="">
                            <h3>Phát triển</h3>
                            <p>Đồng hành tạo đà tăng trưởng bền vững</p>
                            <a href="{{url('/service-userVn')}}">Readmore</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <img src="public/frontend/images/Group 641.svg" alt="">
                            <h3>Hệ sinh thái bền vững</h3>
                            <p>Liên kết và tạo mạng lưới hợp tác vững mạnh</p>
                            <a href="{{url('/service-userVn')}}">Readmore</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- service pc -->
            <div class="row row-no-gutters">
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <img src="public/frontend/images/Group.svg" alt="">
                        <h3>Kết nối</h3>
                        <p>Kết nối, kiến tạo cộng đồng, tạo môi trường phát triển</p>
                        <a href="{{url('/service-userVn')}}">Readmore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <img src="public/frontend/images/Group (1).svg" alt="">
                        <h3>Đầu tư</h3>
                        <p>Đầu tư, gọi vốn, gia tăng năng lực tài chính</p>
                        <a href="{{url('/service-userVn')}}">Readmore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <img src="public/frontend/images/Group 640.svg" alt="">
                        <h3>Xây dựng</h3>
                        <p>Tạo lập nền tảng và giá trị cốt lõi</p>
                        <a href="{{url('/service-userVn')}}">Readmore</a>
                    </div>
                </div>
            </div>
            <div class="row row-no-gutters">
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <img src="public/frontend/images/Vector (2).svg" alt="">
                        <h3>Phát triển</h3>
                        <p>Đồng hành tạo đà tăng trưởng bền vững</p>
                        <a href="{{url('/service-userVn')}}">Readmore</a>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <img src="public/frontend/images/Group 641.svg" alt="">
                        <h3>Hệ sinh thái bền vững</h3>
                        <p>Liên kết và tạo mạng lưới hợp tác vững mạnh</p>
                        <a href="{{url('/service-userVn')}}">Readmore</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- media  -->
        <div class="media">
            <div class="row">
                <div class="col-md-9">
                    <h1>Media</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/news-userVn')}}">
                        <button type="submit">view all</button>
                    </a>
                </div>
            </div>
            <!-- media-mobile -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner1">
                    <div class="carousel-item active">
                        <div class="box">
                            <div class="background">
                                <img src="public/frontend/images/media01.jpg" alt="">
                                <div class="layer"></div>
                            </div>
                            <div class="content">
                                <h6>Sức mạnh liên kết tạo bước tiến mạnh của phụ nữ women tech</h6>
                                <p>12 Jun 2020</p>
                                <a
                                    href="https://womentech.com.vn/tin-tuc/suc-manh-lien-ket-tao-buoc-tien-manh-cua-phu-nu-women-tech">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="background">
                                <img src="public/frontend/images/media02.jpg" alt="">
                                <div class="layer"></div>
                            </div>
                            <div class="content">
                                <h6>Bối cảnh ra đời và liên minh đối tác “siêu cường” của Women Tech</h6>
                                <p>18 Sep 2021</p>
                                <a
                                    href="https://womentech.com.vn/tin-tuc/boi-canh-ra-doi-va-lien-minh-doi-tac-sieu-cuong-cua-women-tech">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box">
                            <div class="background">
                                <img src="public/frontend/images/media03.jpg" alt="">
                                <div class="layer"></div>
                            </div>
                            <div class="content">
                                <h6>Tận dụng tiềm năng, khắc phục những khó khăn thách thức như thế nào</h6>
                                <p>16 Sep 2021</p>
                                <a
                                    href="https://womentech.com.vn/tin-tuc/tan-dung-tiem-nang-khac-phuc-nhung-kho-khan-thach-thuc-nhu-the-nao">Readmore</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- media-pc -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <div class="background">
                            <img src="public/frontend/images/media01.jpg" alt="">
                            <div class="layer"></div>
                        </div>
                        <div class="content">
                            <h6>Sức mạnh liên kết tạo bước tiến mạnh của phụ nữ women tech</h6>
                            <p>12 Jun 2020</p>
                            <a
                                href="https://womentech.com.vn/tin-tuc/suc-manh-lien-ket-tao-buoc-tien-manh-cua-phu-nu-women-tech">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <div class="background">
                            <img src="public/frontend/images/media02.jpg" alt="">
                            <div class="layer"></div>
                        </div>
                        <div class="content">
                            <h6>Bối cảnh ra đời và liên minh đối tác “siêu cường” của Women Tech</h6>
                            <p>18 Sep 2021</p>
                            <a
                                href="https://womentech.com.vn/tin-tuc/boi-canh-ra-doi-va-lien-minh-doi-tac-sieu-cuong-cua-women-tech">Readmore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6">
                    <div class="box">
                        <div class="background">
                            <img src="public/frontend/images/media03.jpg" alt="">
                            <div class="layer"></div>
                        </div>
                        <div class="content">
                            <h6>Tận dụng tiềm năng, khắc phục những khó khăn thách thức như thế nào</h6>
                            <p>16 Sep 2021</p>
                            <a
                                href="https://womentech.com.vn/tin-tuc/tan-dung-tiem-nang-khac-phuc-nhung-kho-khan-thach-thuc-nhu-the-nao">Readmore</a>
                        </div>
                    </div>
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
                
                @foreach($partner as $partner)
                <div class="slide"><img src="{{asset('')}}public/backend/images/partner/{{$partner->image_partner}}" alt="logo"></div>
                
                @endforeach
            </section>
        </div>
    </div>
</div>
@endsection