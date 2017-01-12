<div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>

        @foreach(getMenus() as $menu)
            @if(!$menu->style)
                <li><a href="{{$menu->route}}">{{$menu->txt}}</a></li>
             @else
                @include('partials.menuStyles.style_'.$menu->style)
            @endif
        @endforeach
    </ul>
</div>