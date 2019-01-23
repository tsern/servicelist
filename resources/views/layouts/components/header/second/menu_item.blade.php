<li class="nav-item">
    <a href="{{ $button->link }}" class="nav-link" data-toggle="dropdown"><i class="fe {{ $button->icon_class }}"></i> {{ $button->name }}</a>
    @if($button->sub_menu)
        <div class="dropdown-menu dropdown-menu-arrow">
            @foreach($button->sub_menu as $sub_menu)
                <a href="{{ $sub_menu->link }}" class="dropdown-item ">{{ $sub_menu->name }}</a>
            @endforeach
        </div>
    @endif
</li>
