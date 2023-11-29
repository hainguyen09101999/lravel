
@extends('main.main')
@section('page')
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__itemss set-bg">
            <img class="set-bg" src="{{asset('fontend/img/hero/banner-1.png')}}" alt="">
        </div>
        <div class="hero__itemss set-bg">
            <img class="set-bg" src="{{asset('fontend/img/hero/banner-2.png')}}" alt="">
        </div>
    </div>
</section>
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="fontend/img/banner/phu-kien.png" alt="" width="350px" height="300px">
                        </div>
                        <div class="banner__item__text">
                            <h2>Polo Thiết Kế</h2>
                            <a href="{{route('productlist', ['id' => 3])}}">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 " style="">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="fontend/img/banner/danhmuc01.png" alt="">
                        </div>
                        <div class="banner__item__text" style="margin-left: 60px">
                            <h2>Polo Trơn</h2>
                            <a href="{{route('productlist', ['id' => 2])}}">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="fontend/img/banner/danhmuc02.png" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Polo Thiết Kế</h2>
                            <a href="{{route('productlist', ['id' => 3])}}">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="fontend/img/banner/danhmuc03.png" alt="">
                        </div>
                        <div class="banner__item__text" style="margin-left: 70px">
                            <h2>Quần Short</h2>
                            <a href="{{route('productlist', ['id' => 7])}}">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li data-filter="*">All</li>
                        <li  data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter" style="margin-right: -70px; margin-left: -80px; margin-top: -30px;">
                @foreach($productss as $item)
                    @if ($item->price_sale)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{url('storage/images')}}/{{$item->image}}" >
                                        @php
                                            $Sale = (($item->price - $item->price_sale) / $item->price) * 100;
                                        @endphp
                                       <span class="label bg-danger text-white"> -{{ round($Sale)}}%</span>
                                   
                                    <ul class="product__hover">1
                                        <li><a href="#"><img src="fontend/img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="fontend/img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="fontend/img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                            <br>
                                        <a href="{{route('chitiet', $item->slug)}}">
                                            <span>{{$item->name}}</span>
                                        </a>
                                        <br>
                                        <div class="mau">
                                            <div class="rating col-lg-6 col-md-6 col-sm-6">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product__color__select col-lg-6 col-md-6 col-sm-6">
                                                <label for="pc-4">
                                                    <input type="radio" id="pc-4">
                                                </label>
                                                <label class="active black" for="pc-5">
                                                    <input type="radio" id="pc-5">
                                                </label>
                                                <label class="grey" for="pc-6">
                                                    <input type="radio" id="pc-6">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="product__price">
                                            <p class="product__price_sale" > 
                                                <span style="">{{ $item->price}}</span>-{{ $item->price_sale}}VNĐ
                                            </p>
                                        </div>

                                </div>
                            </div>  
                        </div>
                    @else
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{url('storage/images')}}/{{$item->image}}" style="width:80%">
                                    <span class="label">New</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="fontend/img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="fontend/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                        <li><a href="#"><img src="fontend/img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <br>
                                <a class="titlesp" style="width: 255px;text-align:center;"
                                 href="{{route('chitiet', $item->slug)}}"><h5>{{$item->name}}</h5></a>
                                <br>
                                <div class="mau">
                                    <div class="rating col-lg-6 col-md-6 col-sm-6">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product__color__select col-lg-6 col-md-6 col-sm-6">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                                <div class="product__price">
                                    <p style="text-align:center;margin-right: 60px;font-weight: bolder;">
                                        {{$item->price}}VNĐ
                                </p>
                            </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>  
    </section>
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="fontend/img/05.webp" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="{{route('shop')}}" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="fontend/img/instagram/001.png"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="fontend/img/instagram/002.webp"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="fontend/img/instagram/003.webp"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="fontend/img/instagram/004.webp"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="fontend/img/instagram/006.webp"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="fontend/img/instagram/005.webp"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="fontend/img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="fontend/img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="fontend/img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="fontend/img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="fontend/img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="fontend/img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()
@section('home.js')
<script>
    $(document).ready(function(){
        var heroSlider = $('.hero__slider.owl-carousel');
        heroSlider.owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,  // Thời gian giữa các slide (3 giây)
            loop: true,
            animateOut: 'fadeOut',  // Hiệu ứng fade-out khi thay đổi slide
            animateIn: 'fadeIn',  // Hiệu ứng fade-in khi thay đổi slide
            nav: true,  // Hiển thị nút điều hướng (nút trước và nút sau)
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],  // Văn bản cho nút điều hướng
            responsive: {
                0: {
                    nav: false,  // Ẩn nút điều hướng trên màn hình nhỏ
                },
                768: {
                    nav: true,  // Hiện nút điều hướng trên màn hình lớn hơn 768px
                }
            }
        });
    });
</script>
@endsection