<header>
        <div id="Sidenav" class="sidenav" style="width: 0px;">
            <a href="#" class="closebtn" onclick="closeNav()">×</a>
            <div class="button-menu">
                <button id="menu7" data-i18n="language.menu.link7"><a href="https://wallet.wta.finance/login.html">Đăng nhập</a> </button> <br>
                <button id="menu8" data-i18n="language.menu.link7"><a href="https://wallet.wta.finance/register.html">Đăng ký</a> </button>
            </div>
            <a id="menu1" href="#" data-i18n="language.menu.link1">Trang chủ</a>
            <a class="menu2" id="menu2" href="#" data-i18n="language.menu.link2">
                <p style="margin-bottom: 0;">Về WTA</p><i class="bi bi-caret-down-fill"></i></a>
            <div class="items">
                <a href="{{url('/about-userVn')}}">Về chúng tôi</a>
                <a href="{{url('/token-userVn')}}">Token</a>
            </div>
            <a id="menu3" href="{{url('/service-userVn')}}" data-i18n="language.menu.link3">Dịch vụ</a>
            <a id="menu4" href="{{url('/news-userVn')}}" data-i18n="language.menu.link4">Tin tức</a>
            <a id="menu5" href="{{url('/HoTro')}}" data-i18n="language.menu.link5">Hỗ trợ</a>
            <a id="menu6" href="{{url('/contact-userVn')}}" data-i18n="language.menu.link6">Liên hệ</a>
            <div class="icon-menu">
                <a href="https://www.facebook.com/Womentech.WTA/" target="_blank"><img src="{{('public/frontend/images/facebook.png')}}" alt=""></a>
                <a href="https://twitter.com/WomenTechWTA" target="_blank"><img src="{{('public/frontend/images/tx.png')}}" alt=""></a>
                <a href="https://t.me/womentechofficial" target="_blank"><img src="{{('public/frontend/images/telegram_icon.png')}}" alt=""></a>
                <a href="https://t.me/WomentechCommunity" target="_blank"><img src="{{('public/frontend/images/telegram_icon.png')}}" alt=""></a>
                <a href="https://www.youtube.com/channel/UCrwy06dxtzEx-iZILvnQBSg/" target="_blank"><img src="{{('public/frontend/images/yb.png')}}" alt=""></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <!-- logo -->
            <div class="container">
                <a class="navbar-brand" href="{{url('/home-userVn')}}"><img src="{{('public/frontend/images/Logo.png')}}" alt=""></a>
                <!-- login button mobile -->
                <div class="menu-mb">
                    <img onclick="window.location.href = '{{url('/home-user')}}'" class="img-mb" src="{{('public/frontend/images/united-states.png')}}" alt="">
                    <a class="login-button-mb" href="https://wallet.wta.finance/register.html"> <button type="submit">Đăng ký</button></a>
                    <div class="slide" id="slide" onclick="open_menu()">
                        <a class="toggle" id="btn-toggle-sidebar">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                                    </path>
                                </svg>
                        </a>
                    </div>
                </div>

                <!-- nav menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/home-userVn')}}">Trang chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Về WTA 
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/about-userVn')}}">Về chúng tôi</a>
                                <a class="dropdown-item" href="{{url('/token-userVn')}}">Token</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="./LoTrinh.html">Token</a> -->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/service-userVn')}}">Dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/news-userVn')}}">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/HoTro')}}">Hỗ trợ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact-userVn')}}">Liên hệ</a>
                        </li>
                        <li class="nav-item login">
                            <span class="button">
                    <a class="nav-link" href="https://wallet.wta.finance/login.html"> <button type="submit">Đăng nhập</button></a>
                </span>
                        </li>
                        <li class="nav-item login">
                            <span class="button">
                    <a class="nav-link" href="https://wallet.wta.finance/register.html"> <button type="submit">Đăng ký</button></a>
                </span>
                        </li>
                        <!-- <li class="nav-item login">
                            <img src="./images/united-states.png')}}" onclick="window.location.href = 'DichVuEn.html'" alt="">
                        </li> -->

                        <li class="nav-item login dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{('public/frontend/images/laco.png')}}" alt=""></a>
                            <div class="dropdown-menu dropdown-flag" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item flag" href="{{url('/home-userVn')}}"><img src="{{('public/frontend/images/laco.png')}}" alt=""></a>
                                <a class="dropdown-item flag" href="{{url('/home-user')}}"><img src="{{('public/frontend/images/united-states.png')}}" alt=""></a>
                                </a>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>