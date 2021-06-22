
<?php  use Admin\Lib\Admiin; ?>
<?php  use Admin\Lib\Category; ?>
<?php  use Admin\Lib\Produktet; ?>

<?php include "inc/header.php"?>
<?php include "inc/adminnav.php"?>

    

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-12">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Primary Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small text-white stretched-link">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Warning Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small text-white stretched-link">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Success Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small text-white stretched-link">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Danger Card</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="#" class="small text-white stretched-link">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Users list</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>FullName</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $admin = new Admiin();

                                                //Shtimi i shenimeve per admin

                                                // $admin->setFull_name("Besarta Mustafa");
                                                // $admin->setUsername("Besarta");
                                                // $admin->setPassword("123456");

                                                // $admin->create_admin();

                                                //Modifikimi i shenmeve per admin
                                                // $admin = $admin->find_admin_id(3);
                                                // $admin->setUsername("Besa");
                                                // $admin->update_admin();

                                                //Fshirja e shenimeve per admin
                                                // $admin = $admin->find_admin_id(2);
                                                // $admin->delete_admin();

                                                foreach($admin->find_all_admin() as $admin) {
                                                    echo "<tr>";
                                                    echo "<td>".$admin->getFull_name()."</td>";
                                                    echo "<td>".$admin->getUsername()."</td>";
                                                    echo "<td>".$admin->getPassword()."</td>";
                                                    echo "</tr>";
                                                }

                                                // $admin_result=$admin->find_admin_id(1);
                                                // echo $admin_result->full_name;

                                            ?>
                                        </tbody>
                                        <tfooter>
                                            <tr>
                                                <th>FullName</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                        </tfooter>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Categories list</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $category = new Category();

                                                $category_result = $category->find_all_categories();

                                                foreach($category_result as $cat) {
                                                    echo "<tr>";
                                                    echo "<td>".$cat->name."</td>";
                                                    echo "</tr>";
                                                }

                                                $cat_result=$category->find_category_id(1);
                                                echo $cat_result->name;

                                            ?>
                                        </tbody>
                                        <tfooter>
                                            <tr>
                                                <th>Name</th>
                                            </tr>
                                        </tfooter>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Produktet</div>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $produkti = new Produktet();

                                        $produkti_result = $produkti->find_all_produkti();

                                        foreach($produkti_result as $pro){
                                            echo "<tr>";
                                            echo "<td>".$pro->name."</td>";
                                            echo "<td>".$pro->description."</td>";
                                        }

                                        // $pro_result = $produkti->find_produkti_id(1);

                                        // echo $pro_result->name;

                                    ?>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                </tfooter>

                            </table>
                        </div>

                    </div>
                    
                </div>
            </main>
        </div>
     </div>

   <?php include "inc/footer.php"?>
