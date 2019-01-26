<div class="dropdown d-none d-md-flex">
    <a class="nav-link icon" data-toggle="dropdown">
        <i class="fe @yield('header_icon_class','fe-bell')"></i>
        <span class="nav-unread"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a href="#" class="dropdown-item d-flex">
            <span class="avatar mr-3 align-self-center" style="background-image: url( {{ asset('assets/images/demo/faces/male/41.jpg') }} )"></span>
            <div>
                <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                <div class="small text-muted">10 minutes ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item d-flex">
            <span class="avatar mr-3 align-self-center" style="background-image: url( {{ asset('images/demo/faces/female/1.jpg') }})"></span>
            <div>
                <strong>Alice</strong> started new task: Tabler UI design.
                <div class="small text-muted">1 hour ago</div>
            </div>
        </a>
        <a href="#" class="dropdown-item d-flex">
            <span class="avatar mr-3 align-self-center" style="background-image: url( {{ asset('images/demo/faces/female/18.jpg') }})"></span>
            <div>
                <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                <div class="small text-muted">2 hours ago</div>
            </div>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
    </div>
</div>
