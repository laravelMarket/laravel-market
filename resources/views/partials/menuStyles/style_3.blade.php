<li class="dropdown">
    <a href="{{$menu->route}}" class="dropdown-toggle" data-toggle="dropdown">
       <!-- <img src="/data/icon_hot.png" alt="Category status">-->
       {{$menu->txt}}
    </a>
    <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 900px;">
        <li class="block-container col-sm-3 border">
            <ul class="block-megamenu-link">
                @foreach(getMenuItems($menu->id) as $item)
                    <li class="link_container"><a href="{{$item->route}}">{{$item->txt}}</a></li>
                @endforeach


            </ul>
        </li>
        <li class="block-container col-sm-3 border">
            <ul class="block-megamenu-link">
                <li class="link_container group_header">
                    <a href="">TOP FASHION</a>
                </li>
                <li class="link_container"><a href="">Bath & Body</a></li>
                <li class="link_container"><a href="">Makeup</a></li>
                <li class="link_container"><a href="">Creams & Lotions</a></li>
                <li class="link_container"><a href="">Sunscreens</a></li>
                <li class="link_container"><a href="">Face Packs/Facial</a></li>
                <li class="link_container"><a href="">Spa & Body grances</a></li>
                <li class="link_container"><a href="">Women's Hygiene</a></li>
            </ul>
        </li>
        <li class="block-container col-sm-3 border">
            <ul class="block-megamenu-link">
                <li class="link_container group_header">
                    <a href="">TOP FASHION</a>
                </li>
                <li class="link_container"><a href="">Bath & Body</a></li>
                <li class="link_container"><a href="">Makeup</a></li>
                <li class="link_container"><a href="">Creams & Lotions</a></li>
                <li class="link_container"><a href="">Sunscreens</a></li>
                <li class="link_container"><a href="">Face Packs/Facial</a></li>
                <li class="link_container"><a href="">Spa & Body grances</a></li>
                <li class="link_container"><a href="">Women's Hygiene</a></li>
            </ul>
        </li>
        <li class="block-container col-sm-3">
            <ul class="block-megamenu-link">
                <li class="link_container group_header">
                    <a href="">TOP FASHION</a>
                </li>
                <li class="link_container"><a href="">Bath & Body</a></li>
                <li class="link_container"><a href="">Makeup</a></li>
                <li class="link_container"><a href="">Creams & Lotions</a></li>
                <li class="link_container"><a href="">Sunscreens</a></li>
                <li class="link_container"><a href="">Face Packs/Facial</a></li>
                <li class="link_container"><a href="">Spa & Body grances</a></li>
                <li class="link_container"><a href="">Women's Hygiene</a></li>
            </ul>
        </li>
    </ul>
</li>