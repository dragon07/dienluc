<?php
$menus = config('menu');
?>
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(is_array($menus))
            @foreach($menus as $menu)
                <li class="nav-item">
                    <a href="{{route($menu['route'])}}" class="nav-link">
                        <i class="nav-icon {{$menu['icon']}}"></i>
                        <p>
                            {{$menu['label']}}
                            @if(isset($menu['items']))
                                <i class="right far fa-angle-left"></i>
                            @endif
                        </p>
                    </a>
                    @if(isset($menu['items']))
                        <ul class="nav nav-treeview">
                            @foreach($menu['items'] as $sub_menu)
                                <li class="nav-item">
                                    <a href="{{route($sub_menu['route'])}}" class="nav-link">
                                        <i class="fal fa-dot-circle mr-1 fa-1x"></i>
                                        <p>{{$sub_menu['label']}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
</nav>
