<li class="dropdown">
    <a href="{{$menu->route}}" class="dropdown-toggle" data-toggle="dropdown">
        <!--<img src="/data/icon_sale.png" alt="Category status">-->
        {{$menu->txt}}</a>
    <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 850px;">
        <li class="block-container col-sm-3 border">
            <div class="img_container banner-hover">
                <a href="">
                    <img class="img-responsive" src="/data/banner/b12.png" alt="sport">
                </a>
            </div>
        </li>
        <li class="block-container col-sm-3">
            <ul class="block-megamenu-link">

                @foreach(getMenuItems($menu->id) as $item)
                    <li class="link_container"><a href="{{$item->route}}">{{$item->txt}}</a></li>
                @endforeach

            </ul>
        </li>
        <li class="block-container col-sm-3">
            <ul class="block-megamenu-text">

                <li class="text_container">
                    <p>Aenean sollicitudin, remquis bibendum auctor, nisi elit consequat ipsum, necsagittis sem nibh elit.</p>
                    <a href="" class="button-radius">Learn more<span class="icon"></span></a>
                </li>
            </ul>
        </li>
        <li class="block-container col-sm-3">
            <ul class="block-megamenu-img">
                <li class="img_container banner-hover">
                    <a href="">
                        <img class="img-responsive" src="/data/banner/b13.png" alt="sport">
                    </a>
                </li>
                <li class="img_container banner-hover">
                    <a href="">
                        <img class="img-responsive" src="/data/banner/b14.png" alt="sport">
                    </a>
                </li>
                <li class="img_container banner-hover">
                    <a href="">
                        <img class="img-responsive" src="/data/banner/b15.png" alt="sport">
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>