<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">
                    Home
                </div>
                <a class="nav-link" href="{{Route('dashboard')}}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{url('admin-users')}}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    Users
                </a>
                <div class="sb-sidenav-menu-heading">
                    Content
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fa fa-table"></i>
                    </div>
                    Menu content
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin-about')}}">
                            About
                        </a>
                        <a class="nav-link" href="{{url('admin-service')}}">
                            Services
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsPages" aria-expanded="false" aria-controls="collapseLayoutsPages">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseLayoutsPages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('admin-comment')}}">
                            Comments
                        </a>
                        <a class="nav-link" href="{{url('admin-team')}}">
                            Teams
                        </a>
                        <a class="nav-link" href="{{url('admin-partners')}}">
                            Partners
                        </a>
                        <a class="nav-link" href="{{url('admin-process')}}">
                            Process
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-photo-video"></i>
                    </div>
                    Mediya
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{url('admin-carousel')}}">
                            Carousel
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseTrans" aria-expanded="false" aria-co>
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    Content
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="pagesCollapseTrans" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{url('admin-title')}}">
                            Title
                        </a>
                        <a class="nav-link" href="{{url('admin-text')}}">
                            Text
                        </a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">
                    Social networks
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-co>
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    Plugins
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{url('admin-feedback')}}">
                            Feedback
                        </a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">
                    Site Settings
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseNastr" aria-expanded="false" aria-co>
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    Settings
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="pagesCollapseNastr" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{url('admin-settings')}}">
                            Settings
                        </a>
                        <!-- <a class="nav-link" href="{{url('setisettings')}}">
                                        Site settings
                                    </a> -->
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Static</div>
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    Documentation
                </a>
            </div>
        </div>
    </nav>
</div>
