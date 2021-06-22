<?php
    use Admin\Lib\Admiin;
    include "inc/header.php";
    include "inc/adminnav.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Admin</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>FullName</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $admin = new Admiin();
                                    foreach($admin->find_all_admin() as $admin) {
                                        echo "<tr>";
                                        echo "<td>".$admin->getFull_name()."</td>";
                                        echo "<td>".$admin->getUsername()."</td>";
                                        echo "<td>".$admin->getPassword()."</td>";
                                        echo "<td><a href='edit_admin.php?admin_id=". $admin->getAdmin_id() ."'><i class='fas fa-edit mr-2'>
                                        </i>Edit</a></td>";
                                        echo "<td><a href='delete_admin.php?admin_id=". $admin->getAdmin_id() ."'><i class='far fa-trash-alt mr-2'>
                                        </i>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>FullName</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "inc/footer.php"?>