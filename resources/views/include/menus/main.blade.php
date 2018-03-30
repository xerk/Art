<ul class="nk-nav nk-nav-left hidden-md-down" data-nav-mobile="#nk-nav-mobile">    
    @foreach($items as $menu_item)
        <li class=" nk-drop-item">
            <a href="{{ $menu_item->url }}">{{ $menu_item->title }}</a>
        </li>
    @endforeach
</ul>