@extends('frontend.news-master-ENG')

@section('title', 'News')

@section('content')
<style>
.col-md-4{
    padding-top: 40px;
}
</style>
<div class="banner">
            <!-- <img src="./images/Banner_01 4.png" alt="" style="width: 100%;"> -->
            <div class="container">
                <div class="text-left">
                    <p>News</p>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="press">
                <div class="title-center">
                    <p>Press</p>
                </div>
                <div class="tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="{{('public/frontend/images/new.png')}}" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------- mobile-------------- -->
                <div class="owl-carousel owl-theme" id="hide">
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="{{('public/frontend/images/new.png')}}" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business1.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="{{('public/frontend/images/new.png')}}" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- --------------------------------------------- -->


                <div class="button-center">
                    <button>see more</button>
                </div>
            </div>
            <div class="new">
                <div class="title-center">
                    <p>News</p>
                </div>
                <div class="tab">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="news">
                                <div class="img">
                                    <img src="./images/new.png" alt="">
                                </div>
                                <div class="info">
                                    <p>We provide what you need to start or grow your business.</p>
                                    <p>4 Aug, 2020</p>
                                    <a href="./DocThem.html">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="owl-carousel owl-theme" id="hide2">
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business1.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business2.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="news">
                            <div class="img">
                                <img src="./images/new.png" alt="">
                            </div>
                            <div class="info">
                                <p>We provide what you need to start or grow your business.</p>
                                <p>4 Aug, 2020</p>
                                <a href="./DocThem.html">Readmore</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="button-center">
                    <button>see more</button>
                </div>
            </div>
        </div>
    </main>
    @endsection