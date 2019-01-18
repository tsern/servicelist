<li class="nav-item">
    <a href="{{ $button->link }}" class="nav-link" data-toggle="dropdown"><i class="fe {{ $button->icon_class }}"></i> {{ $button->name }}</a>

    @if($button->sub)

        <div class="dropdown-menu dropdown-menu-arrow">
            @foreach($button->sub as $sub)

                <a href="{{ $sub->link }}" class="dropdown-item ">{{ $sub->name }}</a>

            @endforeach
        </div>

    @endif

</li>
