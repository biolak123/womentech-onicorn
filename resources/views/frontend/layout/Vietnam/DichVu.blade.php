@extends('frontend.dichVu-master-VN')

@section('title', 'Service')

@section('content')
    
        <div class="banner">
           
            <div class="container">
                <div class="text-center">
                    <p>Dịch Vụ</p>
                </div>
            </div>
        </div>
        <div class="hmt">
            <img src="{{('public/frontend/images/08 1.png')}}" alt="">
            <div class="qkn">
                <p>Quỹ khởi nghiệp sáng tạo Womentech WTA Token</p>
            </div>
            <div class="turn">
                <div class="circle"></div>
            </div>
            <div class="turn">
                <div class="circle"></div>
            </div>
            <div class="turn">
                <div class="circle"></div>
            </div>
            <div class="turn">
                <div class="circle"></div>
            </div>
            <div class="turn">
                <div class="circle">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="qkn-bottom">
                <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình. Ứng dụng công nghệ Blockchain vào thế giới thực, chuyển đổi tài sản thực thành tài sản số, tài nguyên hệ sinh thái doanh nghiệp. </p>
            </div>
            <div class="coll">
                <p>Đổi mới doanh nghiệp</p>
                <p>• Cần cung cấp và tư vấn các giải pháp Blockchain cho doanh nghiệp của bạn ? <br> • Cần một khoản vay để phát triển dự án kinh doanh cho doanh nghiệp của bạn ? <br> • Cần một hệ sinh thái các doanh nghiệp để hỗ trợ doanh nghiệp của bạn
                    ?
                </p>
            </div>
            <div class="coll">
                <p>Thúc đẩy Start Up</p>
                <p>• Cần tư vấn và đưa dự án khởi nghiệp của bạn ứng dụng công nghệ Blockchain ? <br> • Cần được đầu tư hoặc vay vốn để phát triển dự án khởi nghiệp ? <br> • Cần cố vấn và hỗ trợ hệ sinh thái kinh doanh ?</p>

            </div>
            <div class="coll">
                <p>Phát triển cùng cộng đồng</p>
                <p>• Bạn có một ý tưởng xuất sắc muốn biến nó thành một dự án và một công việc kinh doanh thực sự ? <br> • Bạn muốn đóng góp cho hệ sinh thái bằng các chuyên ngành của mình ? <br> • Đam mê blockchain và muốn tìm hiểu thêm về WTA ?
            </div>
            <button class="collapsible">Đổi mới doanh nghiệp</button>
            <div class="content">
                <p>• Cần cung cấp và tư vấn các giải pháp Blockchain cho doanh nghiệp của bạn ? <br> • Cần một khoản vay để phát triển dự án kinh doanh cho doanh nghiệp của bạn ? <br> • Cần một hệ sinh thái các doanh nghiệp để hỗ trợ doanh nghiệp của bạn
                    ?
                </p>
            </div>
            <button class="collapsible">Thúc đẩy Start Up</button>
            <div class="content">
                <p>• Cần tư vấn và đưa dự án khởi nghiệp của bạn ứng dụng công nghệ Blockchain ? <br> • Cần được đầu tư hoặc vay vốn để phát triển dự án khởi nghiệp ? <br> • Cần cố vấn và hỗ trợ hệ sinh thái kinh doanh ?</p>
            </div>
            <button class="collapsible">Phát triển cùng cộng đồng</button>
            <div class="content">
                <p>• Bạn có một ý tưởng xuất sắc muốn biến nó thành một dự án và một công việc kinh doanh thực sự ? <br> • Bạn muốn đóng góp cho hệ sinh thái bằng các chuyên ngành của mình ? <br> • Đam mê blockchain và muốn tìm hiểu thêm về WTA ?
            </div>

            <div class="target">
                <div class="title">
                    <p>Chúng tôi sẽ</p>
                    <p>Xây dựng nền tảng tài chính</p>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/conheo.svg" alt="">
                                <p>Đầu tư</p>
                                <p>Chúng tôi kết nối bạn với các khoản đầu tư mạo hiểm có uy tín hoặc đầu tư với quỹ hệ sinh thái WTA.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/vay.svg" alt="">
                                <p>Cho vay</p>
                                <p>Nhóm chuyên gia của chúng tôi sẽ kiểm tra dự án hoặc tài sản thế chấp của bạn để thực hiện khoản vay với WTA Lending</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/ico.svg" alt="">
                                <p>ICO</p>
                                <p>Chúng tôi sẽ xem xét và vạch ra chiến lược để bạn phát triển ICO cho doanh nghiệp của mình.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/conheo.svg" alt="">
                                <p>Đầu tư</p>
                                <p>Chúng tôi kết nối bạn với các khoản đầu tư mạo hiểm có uy tín hoặc đầu tư với quỹ hệ sinh thái WTA.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/vay.svg" alt="">
                                <p>Cho vay</p>
                                <p>Nhóm chuyên gia của chúng tôi sẽ kiểm tra dự án hoặc tài sản thế chấp của bạn để thực hiện khoản vay với WTA Lending</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/ico.svg" alt="">
                                <p>ICO</p>
                                <p>Chúng tôi sẽ xem xét và vạch ra chiến lược để bạn phát triển ICO cho doanh nghiệp của mình.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <p></p>
                    <p>Xây dựng nền tảng doanh nghiệp</p>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/banhrang.svg" alt="">
                                <p>Hỗ trợ kỹ thuật</p>
                                <p>Hỗ trợ phát triển kỹ thuật toàn diện, hướng dẫn, tạo công cụ dành cho nhà phát triển và giao tiếp trực tiếp cho nhóm phát triển và cộng đồng.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/bongden.svg" alt="">
                                <p>Các giải pháp</p>
                                <p>Các giải pháp đã được kiểm chứng giữa các ngành, các đối tác tư vấn và triển khai có kinh nghiệm, các giải pháp chìa khóa trao tay để giảm thời gian phát hành ra thị trường.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/bonghoa.svg" alt="">
                                <p>Vườn ươm</p>
                                <p>Bạn không chỉ cần xây dựng công nghệ mà còn cả mô hình kinh doanh và chiến lược thị trường. Các đối tác ươm tạo của chúng tôi có thể chuẩn bị cho bạn cho giai đoạn tiếp theo.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/banhrang.svg" alt="">
                                <p>Hỗ trợ kỹ thuật</p>
                                <p>Hỗ trợ phát triển kỹ thuật toàn diện, hướng dẫn, tạo công cụ dành cho nhà phát triển và giao tiếp trực tiếp cho nhóm phát triển và cộng đồng.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/bongden.svg" alt="">
                                <p>Các giải pháp</p>
                                <p>Các giải pháp đã được kiểm chứng giữa các ngành, các đối tác tư vấn và triển khai có kinh nghiệm, các giải pháp chìa khóa trao tay để giảm thời gian phát hành ra thị trường.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/bonghoa.svg" alt="">
                                <p>Vườn ươm</p>
                                <p>Bạn không chỉ cần xây dựng công nghệ mà còn cả mô hình kinh doanh và chiến lược thị trường. Các đối tác ươm tạo của chúng tôi có thể chuẩn bị cho bạn cho giai đoạn tiếp theo.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <p></p>
                    <p>Phát triển bền vững</p>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/ketnoi.svg" alt="">
                                <p>Kết nối quan hệ</p>
                                <p>Tạo thuận lợi cho sự hợp tác giữa các công ty khởi nghiệp, cộng đồng và doanh nghiệp. Giúp đưa công nghệ của bạn vào cuộc sống thực, xây dựng mạng lưới khách hàng và tạo doanh thu.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/youtube.svg" alt="">
                                <p>Tăng cường tiếp thị</p>
                                <p>Giúp tăng cường quảng bá doanh nghiệp và thành tích của bạn thông qua mạng xã hội, các kênh truyền thông và các sự kiện ngoại tuyến</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/amthanh.svg" alt="">
                                <p>Dịch vụ tư vấn</p>
                                <p>Tư vấn và chia sẻ các nguồn lực trong các lĩnh vực pháp lý, kế toán.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/tron.svg" alt="">
                                <p>Mở rộng thị trường</p>
                                <p>Giúp bạn khám phá các thị trường mới với mạng lưới toàn cầu và tài nguyên cộng đồng của WTA</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/ketnoi.svg" alt="">
                                <p>Kết nối quan hệ</p>
                                <p>Tạo thuận lợi cho sự hợp tác giữa các công ty khởi nghiệp, cộng đồng và doanh nghiệp. Giúp đưa công nghệ của bạn vào cuộc sống thực, xây dựng mạng lưới khách hàng và tạo doanh thu.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/youtube.svg" alt="">
                                <p>Tăng cường tiếp thị</p>
                                <p>Giúp tăng cường quảng bá doanh nghiệp và thành tích của bạn thông qua mạng xã hội, các kênh truyền thông và các sự kiện ngoại tuyến</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/amthanh.svg" alt="">
                                <p>Dịch vụ tư vấn</p>
                                <p>Tư vấn và chia sẻ các nguồn lực trong các lĩnh vực pháp lý, kế toán.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/tron.svg" alt="">
                                <p>Mở rộng thị trường</p>
                                <p>Giúp bạn khám phá các thị trường mới với mạng lưới toàn cầu và tài nguyên cộng đồng của WTA</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <p></p>
                    <p>Hệ sinh thái bền vững</p>
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/hoptac.svg" alt="">
                                <p>Cam kết lâu dài</p>
                                <p>Hệ sinh thái kinh doanh cam kết cùng nhau phát triển bền vững, sử dụng các nguồn lực của nhau để cùng phát triển.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tit">
                                <img src="public/frontend/svg/tien.svg" alt="">
                                <p>Tokenomics</p>
                                <p>Chấp nhận với hệ sinh thái có nghĩa là chấp nhận sử dụng WTA Token để thanh toán các dịch vụ trong hệ sinh thái. Các thành viên có thể sử dụng WTA để thanh toán tài sản thực thông qua các doanh nghiệp trong hệ sinh thái.
                                </p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/hoptac.svg" alt="">
                                <p>Cam kết lâu dài</p>
                                <p>Hệ sinh thái kinh doanh cam kết cùng nhau phát triển bền vững, sử dụng các nguồn lực của nhau để cùng phát triển.</p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tit">
                                <img src="public/frontend/svg/tien.svg" alt="">
                                <p>Tokenomics</p>
                                <p>Chấp nhận với hệ sinh thái có nghĩa là chấp nhận sử dụng WTA Token để thanh toán các dịch vụ trong hệ sinh thái. Các thành viên có thể sử dụng WTA để thanh toán tài sản thực thông qua các doanh nghiệp trong hệ sinh thái.
                                </p>
                                <button onclick="window.open('https://t.me/WomentechCommunity')">Join WTA Ecosystem</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
