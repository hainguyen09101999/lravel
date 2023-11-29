
    <div class="shop__sidebar">
        <div class="shop__sidebar__search">
            <form action="{{route('search')}}" method="GET">
                <input type="text" placeholder="Search..." name="key">
                <button type="submit"><span class="icon_search"></span></button>
            </form>
        </div>
        <div class="shop__sidebar__accordion">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-heading">
                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="shop__sidebar__categories">
                                <ul class="nice-scroll">
                                    @foreach ($danhmuc as $ten)
                                        @if ($ten->parent_id != 0)
                                            <li style=""><a href="{{route('productlist', ['id' => $ten->id])}}">{{$ten->name}}</a></li>
                                        @endif
                                     @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
