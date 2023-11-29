
@extends('main.main')
@section('page')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text  ">
                        <h4>Shop</h4>
                            <div class="breadcrumb__links">
                                <a href="{{route('home')}}">Home</a>
                                <a href="{{route('shop')}}">Shop</a>
                                <span >{{$danhmucItem->name}}</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="shop spad">
        <div class="container">
            <div class="row" style="margin-right: -70px; margin-left: -80px; margin-top: -30px;" >
                <div class="col-lg-3">
                    @include('Pages.product.sidebar')
                    <img src="{{asset('fontend/img/25.png')}}" alt="" width="80%">
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                 </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <div class="breadcrumb__links" >
                                        <button type="button" id="quaylai" class="btn btn-primary"><< Quay Lại</button></button>
                                    </div>
                             </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"  >
                    @foreach ($product as $sp)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{url('storage/images')}}/{{$sp->image}}" style="width:80%">
                                @if ($sp->price_sale)
                                    @php
                                        $Sale = (($sp->price - $sp->price_sale) / $sp->price) * 100;
                                    @endphp
                                   <span class="label bg-danger text-white"> -{{ round($Sale)}}%</span>
                                @elseif ($productnews->contains($sp))
                                   <span class="label">News</span>
                                @endif
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{asset('fontend/img/icon/heart.png')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('fontend/img/icon/compare.png')}}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{asset('fontend/img/icon/search.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                        <br>
                                    <a href="{{route('chitiet', $sp->slug)}}">
                                        <span>{{$sp->name}}</span>
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
                                        @if ($sp->price_sale)
                                        <p class="product__price_sale" > 
                                            <span style="">
                                                {{ $sp->price}}
                                            </span>-{{ $sp->price_sale}}VNĐ
                                            </p>
                                        @else
                                            <p class="price_one" >
                                                    {{$sp->price}}VNĐ
                                            </p>
                                        @endif
                                    </div>

                            </div>
                        </div>  
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()
@section('nut.js')
<script>
    document.getElementById("quaylai").addEventListener("click", function() {
        window.location.href = "{{ route('shop') }}";
    });
</script>
@endsection
