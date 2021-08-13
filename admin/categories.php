<?php
    use Admin\Lib\Category;
    include "inc/header.php";
    include "inc/adminnav.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Category</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $category = new Category();
                                    foreach($category->find_all() as $cat) {
                                        echo "<tr>";
                                        echo "<td>".$cat->getName()."</td>";
                                        echo "<td><a href='edit_category.php?id=". $cat->getId() ."'><i class='fas fa-edit mr-2'>
                                        </i>Edit</a></td>";
                                        echo "<td><a href='delete_category.php?id=". $cat->getId() ."'><i class='far fa-trash-alt mr-2'>
                                        </i>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Name</th>
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