<?php
    use Admin\Lib\Produktet;
    include "inc/header.php";
    include "inc/adminnav.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Produktet</h1>
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
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $produkti = new Produktet();
                                    foreach($produkti->find_all() as $pro) {
                                        echo "<tr>";
                                        echo "<td>".$pro->getName()."</td>";
                                        echo "<td>".$pro->getDescription()."</td>";
                                        echo "<td>".$pro->getPrice()."</td>";
                                        echo "<td>".$pro->getImage_name()."</td>";
                                        echo "<td><a href='edit_produkt.php?id=". $pro->getId() ."'><i class='fas fa-edit mr-2'>
                                        </i>Edit</a></td>";
                                        echo "<td><a href='delete_produkt.php?id=". $pro->getId() ."'><i class='far fa-trash-alt mr-2'>
                                        </i>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
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