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
                    <?php
                        $stt = 1;
                      ?>
                        @foreach($press as $press_insert)
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{url('public/backend/images/press/')}}/{{$press_insert->image}}" alt="">
                                </div>
                                <div class="info">
                                <p>{{$press_insert->title}}</p>
                                    <p>{{$press_insert->create_at}}</p>
                                    <a href="{{url('/docthem-userVn')}}">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            $stt++;
                            ?>
                        @endforeach
                        
                    </div>
                    
                </div>

                <!-- ----------------------------- mobile ----------------------- -->
                <div class="owl-carousel owl-theme" id="hide">
                <?php
                        $stt = 1;
                      ?>
                        @foreach($press as $press_insert)
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="{{url('public/backend/images/press/')}}/{{$press_insert->image}}" alt="">
                            </div>
                            <div class="info">
                            <p>{{$press_insert->title}}</p>
                                    <p>{{$press_insert->create_at}}</p>
                                <a href="{{url('/docthem-userVn')}}">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            $stt++;
                            ?>
                        @endforeach

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
                    <?php
                        $stt = 1;
                      ?>
                        @foreach($news as $new)
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{url('public/backend/images/news/')}}/{{$new->image}}" alt="">
                                </div>
                                <div class="info">
                                <p>{{$new->title}}</p>
                                    <p>{{$new->create_at}}</p>
                                    <a href="./DocThem.html">Đọc thêm</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            $stt++;
                            ?>
                @endforeach
                    </div>
                    
                </div>
                <!-- ------------------------------- mobile-------------- -->

                <div class="owl-carousel owl-theme" id="hide2">
                <?php
                        $stt = 1;
                      ?>
                        @foreach($news as $new)
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="{{url('public/backend/images/news/')}}/{{$new->image}}" alt="">
                            </div>
                            <div class="info">
                                    <p>{{$new->title}}</p>
                                    <p>{{$new->create_at}}</p>
                                <a href="./DocThem.html">Đọc thêm</a>
                            </div>
                        </div>
                        <?php
                            $stt++;
                            ?>
                @endforeach
                    </div>


                <div class="button-center">
                    <button>Xem thêm</button>
                </div>
            </div>
        </div>
    </main>
    @endsection