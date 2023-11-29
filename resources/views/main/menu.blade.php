
<div class="col-lg-8 col-md-8" style="margin-top: 15px">
    <nav class="header__menu mobile-menu">
        <ul>
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('shop')}}">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li class="menu1"><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('contact')}}">Contacts</a></li>
                </ul>
            </li>
            <li><a href="#">Category</a>
                <ul class="dropdown">
                    {!! App\Lib\DatamenuCommon::GetMenu() !!}
                </ul>
            </li>
            
        </ul>
    </nav>
</div>

