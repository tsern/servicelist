<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
                @include('layouts.components.header.second.search')
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    @each('layouts.components.header.second.menu_item', $theme->getMainMenuLinks(), 'button')
                </ul>
            </div>
        </div>
    </div>
</div>
