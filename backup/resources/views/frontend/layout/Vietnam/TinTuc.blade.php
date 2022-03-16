@extends('frontend.tinTuc-master-VN')

@section('title', 'News')

@section('content')
<style>
.col-md-4{
    padding-top: 40px;
}
</style>

        <div class="banner">
            <!-- <img src="{{('public/frontend/images/Banner_01 4.png')}}" alt="" style="width: 100%;"> -->
            <div class="container">
                <div class="text-left">
                    <p>Tin tức</p>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="press">
                <div class="title-center">
                    <p>Báo chí</p>
                </div>
                <div class="tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{('public/frontend/images/new.png')}}" alt="">
                                </div>
                                <div class="info">
                                    <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                    <p>4 tháng 8, 2020</p>
                                    <a href="./DocThem.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{('public/frontend/images/new.png')}}" alt="">
                                </div>
                                <div class="info">
                                    <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                    <p>4 tháng 8, 2020</p>
                                    <a href="./DocThem.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{('public/frontend/images/new.png')}}" alt="">
                                </div>
                                <div class="info">
                                    <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                    <p>4 tháng 8, 2020</p>
                                    <a href="./DocThem.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{('public/frontend/images/new.png')}}" alt="">
                                </div>
                                <div class="info">
                                    <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                    <p>4 tháng 8, 2020</p>
                                    <a href="./DocThem.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- ----------------------------- mobile ----------------------- -->
                <div class="owl-carousel owl-theme" id="hide">
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="{{('public/frontend/images/new.png')}}" alt="">
                            </div>
                            <div class="info">
                                <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                <p>4 tháng 8, 2020</p>
                                <a href="./DocThem.html">Đọc thêm</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- -----------------------------  ----------------------- -->

                <div class="button-center">
                    <button>Xem thêm</button>
                </div>
            </div>

            <div class="new">
                <div class="title-center">
                    <p>Tin tức</p>
                </div>
                <div class="tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{('public/frontend/images/new.png')}}" alt="">
                                </div>
                                <div class="info">
                                    <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                    <p>4 tháng 8, 2020</p>
                                    <a href="./DocThem.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="owl-carousel owl-theme" id="hide2">
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="{{('public/frontend/images/new.png')}}" alt="">
                            </div>
                            <div class="info">
                                <p>Chúng tôi cung cấp những gì bạn cần để bắt đầu hoặc phát triển doanh nghiệp của mình.</p>
                                <p>4 tháng 8, 2020</p>
                                <a href="./DocThem.html">Đọc thêm</a>
                            </div>
                        </div>
                    </div>


                <div class="button-center">
                    <button>Xem thêm</button>
                </div>
            </div>
        </div>
    </main>
    @endsection