@extends('frontend.lienHe-master-VN')

@section('title', 'Contact')

@section('content')

        <div class="banner">
            <!-- <img src="./images/Banner_01 4.png" alt="" style="width: 100%;"> -->
            <div class="container">
                <div class="text-left">
                    <p>Liên hệ</p>
                </div>
            </div>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="main">
                <div class="title">
                    <p>Làm thế nào chúng ta có thể giúp đỡ?</p>
                </div>
                <div class="from">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Tên & tên đệm *</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Tên">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Họ *</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Họ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Địa chỉ email *</label>
                            <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Địa chỉ email">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Vị trí *</label>
                            <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                            <option value="" selected disabled>Chọn một địa điểm</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mô tả ngắn gọn cách chúng tôi có thể trợ giúp (tối đa 300 ký tự)</label>
                            <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="5"></textarea>
                            <label for="exampleFormControlTextarea1">0 trong số 300 ký tự tối đa</label>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Có, vui lòng đăng ký cho tôi thông tin nhà phát triển WTA, thông tin sự kiện, bản tin và tài liệu tiếp thị WTA chung (tùy chọn)
                              </label>
                            </div>
                        </div>
                        <div class="check-robot">
                            <label class="check">
                                <p>tôi không phải là người máy</p>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                        </div>
                        <button type="submit" class="btn">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @endsection
