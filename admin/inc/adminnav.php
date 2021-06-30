<!-- adminnav -->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a href="index.php" class="nav-link mt-3">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>
                        <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#userNav" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Admin
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="userNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a href="add_admin.php" class="nav-link">Add Admin</a>
                                <a href="admins.php" class="nav-link">View Admin</a>
                            </nav>
                        </div>
                        <a href="" class="nav-link collapsed" data-toggle="collapse" data-target="#catNav" aria-expanded="false" aria-controls="catNav">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Categories
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="catNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a href="add_category.php" class="nav-link">Add Category</a>
                                <a href="categories.php" class="nav-link">View Categories</a>
                            </nav>
                        </div>
                        <a href="" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Produkti
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="catNav" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a href="add_produkt.php" class="nav-link">Add Furniture</a>
                                <a href="produktet.php" class="nav-link">View Furniture</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a href="" class="nav-link">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
   