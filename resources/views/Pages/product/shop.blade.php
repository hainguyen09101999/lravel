
@extends('main.main')
@section('page')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop spad">
        <div class="container">
            <div class="row" style="margin-right: -70px; margin-left: -80px; margin-top: -30px;">
                <div class="col-lg-3">
                    <div>
                        @include('Pages.product.sidebar')
                    </div>
                    <div style="margin-top: 20px">
                        <img src="fontend/img/0001-silder.png" alt="">
                    </div>
                </div>

                <div class="col-lg-9">
            
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                     <select id="sort-by-price" name="price_range">
                                        <option value="">Low To High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    @foreach ($product as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{url('storage/images')}}/{{$item->image}}">
                                    @if ($item->price_sale)
                                        @php
                                            $Sale = (($item->price - $item->price_sale) / $item->price) * 100;
                                        @endphp
                                       <span class="label bg-danger text-white"> -{{ round($Sale)}}%</span>
                                    @elseif ($productnews->contains($item))
                                       <span class="label">News</span>
                                    @endif
                                    <ul class="product__hover">
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
                                            @if ($item->price_sale)
                                            <p class="product__price_sale" > 
                                                <span style="">
                                                    {{ $item->price}}
                                                </span>-{{ $item->price_sale}}VNĐ
                                                </p>
                                            @else
                                                <p class="price_one">
                                                        {{$item->price}}VNĐ
                                                </p>
                                            @endif
                                        </div>
                                </div>
                            </div>  
                        </div>
                    @endforeach                    
                    </div>
                    <div style="margin-left: 350px">
                        {{ $product->links() }}
                </div>  
            </div>
        </div>
    </section>
@stop()
