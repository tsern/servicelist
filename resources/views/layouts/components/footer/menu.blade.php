<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @php
                        $footer_menu = $theme->getFooterMenuLinks();
                    @endphp
                    @for($i = 0; $i < count($footer_menu); $i++)
                        @php
                            $button = $footer_menu[$i]
                        @endphp
                        @if($i % 2 == 0)
                            <div class="col-6 col-md-3">
                                <ul class="list-unstyled mb-0">
                                    @include('layouts.components.footer.menu.button')
                        @else
                                    @include('layouts.components.footer.menu.button')
                                </ul>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                @yield('footer_menu_text','Premium and Open Source dashboard template with responsive and high quality UI. For Free!')
            </div>
        </div>
    </div>
</div>
