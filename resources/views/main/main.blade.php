<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title){{ $title }}@endisset
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fontend/css/them.css')}}" type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/bootstrap.min.css')}} type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/font-awesome.min.css')}}  type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/elegant-icons.css')}}  type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/magnific-popup.css')}}  type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/nice-select.css')}}  type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/owl.carousel.min.css')}}  type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/slicknav.min.css')}}  type="text/css">
     <link rel="stylesheet" href={{asset('fontend/css/style.css')}}  type="text/css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="">Sign out</a>
                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option1">
            <a href="#" class="search-switch"><img src= "{{asset('fontend/img/icon/search.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('fontend/img/icon/heart.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('fontend/img/icon/cart.png')}}" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Miễn phí vận chuyển, đảm bảo hoàn trả hoặc hoàn tiền trong 30 ngày.</p>
        </div>
    </div>
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="header__top__left">
                                <p>Miễn phí vận chuyển, đảm bảo hoàn trả hoặc hoàn tiền trong 30 ngày.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <div class="header__top__right">
                                <div class="header__top__links">
                                    @if (Auth::check())
                                           <a href=""><img src="{{asset('fontend/img/icon/user.png')}}" style="" alt="">{{ Auth::user()->name}}</a>
                                    @else
                                          <a href="{{route('dangnhap')}}"><img src="{{asset('fontend/img/icon/user.png')}}" alt="">Login</a>
                                    @endif
                                            <a href="{{route('logout')}}">Sign out</a>
                                            <a href="#">FAQs</a>
                                </div>
                                <div class="header__top__hover">
                                    <span>Usd <i class="arrow_carrot-down"></i></span>
                                    <ul>
                                        <li>USD</li>
                                        <li>EUR</li>
                                        <li>USD</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="display: flex; max-width: 1450px;">
                        <div class="header__logo"  style=" padding: 0px;">
                            <a href="./index.html"><img src="{{asset('fontend/img/shop-1.png')}}" alt=""  style="max-width: 150%;" ></a>
                        </div>
            @include('main.menu')
                    <div class="col-lg-3 col-md-3" style="margin-top: 15px">
                        <div class="header__nav__option " >

                            <a href="#" class="search-switch"><img src="{{asset('fontend/img/icon/search.png')}}" alt=""></a>
                            <a href="#"><img src="{{asset('fontend/img/icon/heart.png')}}"alt=""></a>
                            <a href="#"><img src="{{asset('fontend/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                            <div class="price">$0.00</div>
                        </div>
                    </div>

                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </header>
        @yield('page')
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{asset('fontend/img/shop-1.png')}}" alt=""></a>
                        </div>
                        <p>Khách hàng là trung tâm của mô hình kinh doanh độc đáo của chúng tôi, bao gồm cả thiết kế.</p>
                        <a href="#"><img src="{{asset('fontend/img/payment.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Cửa Hàng</h6>
                        <ul>
                            <li><a href="#">Quần áo</a></li>
                            <li><a href="#">Giày Xu Hướng</a></li>
                            <li><a href="#">Phụ kiện</a></li>
                            <li><a href="#">Khuyến Mãi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Thông Tin </h6>
                        <ul>
                            <li><a href="#">Liên hệ chúng tôi</a></li>
                            <li><a href="#">Phương thức thanh toán</a></li>
                            <li><a href="#">Giao hàng tận nơi</a></li>
                            <li><a href="#">Trả lại & Trao đổi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Liên Hệ </h6>
                        <div class="footer__newslatter">
                            <p>Hãy là người đầu tiên biết về hàng mới, sách tra cứu, khuyến mại và khuyến mãi!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <script src={{asset('fontend/js/jquery-3.3.1.min.js')}} ></script>
    <script src={{asset('fontend/js/bootstrap.min.js')}} ></script>
    <script src={{asset('fontend/js/jquery.nice-select.min.js')}} ></script>
    <script src={{asset('fontend/js/jquery.nicescroll.min.js')}} ></script>
    <script src={{asset('fontend/js/jquery.magnific-popup.min.js')}} ></script>
    <script src={{asset('fontend/js/jquery.countdown.min.js')}} ></script>
    <script src={{asset('fontend/js/jquery.slicknav.js')}} ></script>
    <script src={{asset('fontend/js/mixitup.min.js')}} ></script>
    <script src={{asset('fontend/js/owl.carousel.min.js')}} ></script>
    <script src={{asset('fontend/js/main.js')}} ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    @yield('nut.js')

    

</body>

</html>



