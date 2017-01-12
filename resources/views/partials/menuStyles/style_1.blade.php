<li class="dropdown">
    <a href="{{$menu->route}}" class="dropdown-toggle" data-toggle="dropdown">{{$menu->txt}}</a>
    <ul class="dropdown-menu mega_dropdown container-fluid">
        <li class="block-container">
            <ul class="block-megamenu-link">
                @foreach(getMenuItems($menu->id) as $item)
                <li class="link_container"><a href="{{$item->route}}">{{$item->txt}}</a></li>
               @endforeach
            </ul>
        </li>
    </ul>
</li>