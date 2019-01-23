<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <span class="avatar" style="background-image: url( {{ asset('images/demo/faces/male/2.jpg') }})"></span>
        <span class="ml-2 d-none d-lg-block">
            <span class="text-default">@yield('user_full_name','John Doe')</span>
            <small class="text-muted d-block mt-1">@yield('user_role','Administrator')</small>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        @each('layouts.components.header.first.right_content.user_menu.menu_item',$theme->getUserMenuLinks(),'menu_item')
    </div>
</div>
