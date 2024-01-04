<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('/')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="{{route('role.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Role
                    </a>
                    <a class="nav-link" href="{{route('user.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        User
                    </a>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Category
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('category.list')}}">Main Category</a>
                            <a class="nav-link" href="">Sub category</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="{{route('brand.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Brands
                    </a>
                    <a class="nav-link" href="{{route('product.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Products
                    </a>
                    <a class="nav-link" href="{{route('order.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Orders
                    </a>
                    <a class="nav-link" href="{{route('order.details')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Order Details
                    </a>
                    <a class="nav-link" href="{{route('wish.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        WishList   
                    </a>

                    <a class="nav-link" href="{{route('business.settings')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-settings"></i></div>
                        Settings
                    </a>

                    <a class="nav-link" href="{{route('slider')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-settings"></i></div>
                        slider
                    </a>
                    <a class="nav-link" href="{{route('review')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-settings"></i></div>
                        Review-ratings
                    </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>