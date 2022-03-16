@extends('frontend.docThem-master-VN')

@section('title', 'Read more')

@section('content')

    <main>
        <div class="container">
            <div class="main-top">
                <div class="back">
                    <a href="{{url('/news-userVn')}}"><i class="bi bi-arrow-left-short"></i> &nbsp; Xem tất cả báo chí</a>
                </div>
                <div class="title">
                    <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu <br> hoặc phát triển doanh nghiệp của bạn.</p>
                    <p>4 tháng 8, 2020</p>
                </div>
                <div class="imgs">
                    <img src="{{('public/frontend/images/Rectangle 5694.png')}}" alt="">
                </div>
                <div class="cmt">
                    <p>WomenTech Singapore ra đời là Quỹ khởi nghiệp sáng tạo với sứ mệnh hỗ trợ, kiến tạo đồng hành cùng phụ nữ khởi nghiệp và các nữ doanh chủ trong kỷ nguyên số. </p>
                    <p> WomenTech với tầm nhìn trở thành đầu tàu dẫn dắt và đồng hành cùng những doanh nghiệp, những nữ doanh chủ khát vọng, đổi mới, sáng tạo.</p>
                    <p>Sau nhiều năm tạo tiền đề và xây dựng nền tảng hệ sinh thái, WomenTech đã chính thức phát hành WTA Token dựa trên nền tảng công nghệ Blockchain dành cho các cá nhân, doanh chủ và doanh nghiệp cho việc phát triển, quản lý chuỗi cung
                        ứng qua các hợp đồng thông minh. Đồng thời WTA Token là tài sản số chính thức của Quỹ khởi nghiệp sáng tạo dành cho phụ nữ toàn cầu, được phát triển bởi đội ngũ chuyên gia và cố vấn tại nhiều nơi trên thế giới. </p>
                    <p>WTA với lộ trình được đề ra trong vòng 5 năm tới, sẽ hỗ trợ hàng triệu người trên thế giới và hàng ngàn doanh nghiệp khởi nghiệp sáng tạo, xây dựng nền tảng và hệ sinh thái doanh nghiệp bền vững.</p>
                </div>
            </div>
            <div class="main-bottom">
                <div class="post">
                    <div class="img">
                        <img src="{{('public/frontend/images/Ellipse 43.png')}}" alt="">
                        <p>Member</p>
                    </div>
                    <div class="comment">
                        <form action="#">
                            <textarea placeholder="Thêm một bình luận" name="message" rows="10"></textarea>

                            <button type="submit">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="post">
                    <div class="img">
                        <img src="{{('public/frontend/images/Ellipse 43.png')}}" alt="">
                        <p>Member</p>
                    </div>
                    <div class="comment">
                        <p>Lisa</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta magna, in pretium lectus tempus vel. Fusce sed bibendum turpis, at mattis tortor. Suspendisse volutpat condimentum arcu quis tempor. Vestibulum accumsan
                            iaculis varius. Phasellus porttitor vehicula consequat. Pellentesque porttitor elit eu porttitor tincidunt. </p>
                        <div class="share">
                            <a href="">Trả lời &nbsp;</a>
                            <p>. &nbsp;</p>
                            <a href="">Chia sẽ &nbsp;</a>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8V4C13 3.20435 12.6839 2.44129 12.1213 1.87868C11.5587 1.31607 10.7956 1 10 1L6 10V21H17.28C17.7623 21.0055 18.2304 20.8364 18.5979 20.524C18.9654 20.2116 19.2077 19.7769 19.28 19.3L20.66 10.3C20.7035 10.0134 20.6842 9.72068 20.6033 9.44225C20.5225 9.16382 20.3821 8.90629 20.1919 8.68751C20.0016 8.46873 19.7661 8.29393 19.5016 8.17522C19.2371 8.0565 18.9499 7.99672 18.66 8H13ZM6 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V12C1 11.4696 1.21071 10.9609 1.58579 10.5858C1.96086 10.2107 2.46957 10 3 10H6" fill="#606060"/>
                                <path d="M6 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V12C1 11.4696 1.21071 10.9609 1.58579 10.5858C1.96086 10.2107 2.46957 10 3 10H6M13 8V4C13 3.20435 12.6839 2.44129 12.1213 1.87868C11.5587 1.31607 10.7956 1 10 1L6 10V21H17.28C17.7623 21.0055 18.2304 20.8364 18.5979 20.524C18.9654 20.2116 19.2077 19.7769 19.28 19.3L20.66 10.3C20.7035 10.0134 20.6842 9.72068 20.6033 9.44225C20.5225 9.16382 20.3821 8.90629 20.1919 8.68751C20.0016 8.46873 19.7661 8.29393 19.5016 8.17522C19.2371 8.0565 18.9499 7.99672 18.66 8H13Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.68265 14.0004V18.0004C8.68265 18.796 8.99872 19.5591 9.56133 20.1217C10.1239 20.6843 10.887 21.0004 11.6826 21.0004L15.6826 12.0004V1.00036H4.40265C3.92032 0.994909 3.45227 1.16396 3.08474 1.47636C2.71721 1.78875 2.47497 2.22346 2.40265 2.70036L1.02265 11.7004C0.97914 11.987 0.998473 12.2797 1.07931 12.5581C1.16014 12.8365 1.30055 13.0941 1.49079 13.3128C1.68103 13.5316 1.91657 13.7064 2.18108 13.8251C2.44558 13.9439 2.73274 14.0036 3.02265 14.0004H8.68265ZM15.6826 1.00036H18.3526C18.9186 0.990352 19.4685 1.1885 19.8981 1.55718C20.3276 1.92586 20.6068 2.43942 20.6826 3.00036V10.0004C20.6068 10.5613 20.3276 11.0749 19.8981 11.4435C19.4685 11.8122 18.9186 12.0104 18.3526 12.0004H15.6826" fill="#606060"/>
                                    <path d="M15.6826 1.00036H18.3526C18.9186 0.990352 19.4685 1.1885 19.8981 1.55718C20.3276 1.92586 20.6068 2.43942 20.6826 3.00036V10.0004C20.6068 10.5613 20.3276 11.0749 19.8981 11.4435C19.4685 11.8122 18.9186 12.0104 18.3526 12.0004H15.6826M8.68265 14.0004V18.0004C8.68265 18.796 8.99872 19.5591 9.56133 20.1217C10.1239 20.6843 10.887 21.0004 11.6826 21.0004L15.6826 12.0004V1.00036H4.40265C3.92032 0.994909 3.45227 1.16396 3.08474 1.47636C2.71721 1.78875 2.47497 2.22346 2.40265 2.70036L1.02265 11.7004C0.97914 11.987 0.998473 12.2797 1.07931 12.5581C1.16014 12.8365 1.30055 13.0941 1.49079 13.3128C1.68103 13.5316 1.91657 13.7064 2.18108 13.8251C2.44558 13.9439 2.73274 14.0036 3.02265 14.0004H8.68265Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                        </div>
                    </div>
                </div>
                <div class="post">
                    <div class="img">
                        <img src="{{('public/frontend/images/Ellipse 43.png')}}" alt="">
                        <p>Member</p>
                    </div>
                    <div class="comment">
                        <p>Lisa</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tristique porta magna, in pretium lectus tempus vel. Fusce sed bibendum turpis, at mattis tortor. Suspendisse volutpat condimentum arcu quis tempor. </p>
                        <div class="share">
                            <a href="">Trả lời &nbsp;</a>
                            <p>. &nbsp;</p>
                            <a href="">Chia sẽ &nbsp;</a>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 8V4C13 3.20435 12.6839 2.44129 12.1213 1.87868C11.5587 1.31607 10.7956 1 10 1L6 10V21H17.28C17.7623 21.0055 18.2304 20.8364 18.5979 20.524C18.9654 20.2116 19.2077 19.7769 19.28 19.3L20.66 10.3C20.7035 10.0134 20.6842 9.72068 20.6033 9.44225C20.5225 9.16382 20.3821 8.90629 20.1919 8.68751C20.0016 8.46873 19.7661 8.29393 19.5016 8.17522C19.2371 8.0565 18.9499 7.99672 18.66 8H13ZM6 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V12C1 11.4696 1.21071 10.9609 1.58579 10.5858C1.96086 10.2107 2.46957 10 3 10H6" fill="#606060"/>
                                <path d="M6 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V12C1 11.4696 1.21071 10.9609 1.58579 10.5858C1.96086 10.2107 2.46957 10 3 10H6M13 8V4C13 3.20435 12.6839 2.44129 12.1213 1.87868C11.5587 1.31607 10.7956 1 10 1L6 10V21H17.28C17.7623 21.0055 18.2304 20.8364 18.5979 20.524C18.9654 20.2116 19.2077 19.7769 19.28 19.3L20.66 10.3C20.7035 10.0134 20.6842 9.72068 20.6033 9.44225C20.5225 9.16382 20.3821 8.90629 20.1919 8.68751C20.0016 8.46873 19.7661 8.29393 19.5016 8.17522C19.2371 8.0565 18.9499 7.99672 18.66 8H13Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.68265 14.0004V18.0004C8.68265 18.796 8.99872 19.5591 9.56133 20.1217C10.1239 20.6843 10.887 21.0004 11.6826 21.0004L15.6826 12.0004V1.00036H4.40265C3.92032 0.994909 3.45227 1.16396 3.08474 1.47636C2.71721 1.78875 2.47497 2.22346 2.40265 2.70036L1.02265 11.7004C0.97914 11.987 0.998473 12.2797 1.07931 12.5581C1.16014 12.8365 1.30055 13.0941 1.49079 13.3128C1.68103 13.5316 1.91657 13.7064 2.18108 13.8251C2.44558 13.9439 2.73274 14.0036 3.02265 14.0004H8.68265ZM15.6826 1.00036H18.3526C18.9186 0.990352 19.4685 1.1885 19.8981 1.55718C20.3276 1.92586 20.6068 2.43942 20.6826 3.00036V10.0004C20.6068 10.5613 20.3276 11.0749 19.8981 11.4435C19.4685 11.8122 18.9186 12.0104 18.3526 12.0004H15.6826" fill="#606060"/>
                                    <path d="M15.6826 1.00036H18.3526C18.9186 0.990352 19.4685 1.1885 19.8981 1.55718C20.3276 1.92586 20.6068 2.43942 20.6826 3.00036V10.0004C20.6068 10.5613 20.3276 11.0749 19.8981 11.4435C19.4685 11.8122 18.9186 12.0104 18.3526 12.0004H15.6826M8.68265 14.0004V18.0004C8.68265 18.796 8.99872 19.5591 9.56133 20.1217C10.1239 20.6843 10.887 21.0004 11.6826 21.0004L15.6826 12.0004V1.00036H4.40265C3.92032 0.994909 3.45227 1.16396 3.08474 1.47636C2.71721 1.78875 2.47497 2.22346 2.40265 2.70036L1.02265 11.7004C0.97914 11.987 0.998473 12.2797 1.07931 12.5581C1.16014 12.8365 1.30055 13.0941 1.49079 13.3128C1.68103 13.5316 1.91657 13.7064 2.18108 13.8251C2.44558 13.9439 2.73274 14.0036 3.02265 14.0004H8.68265Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection