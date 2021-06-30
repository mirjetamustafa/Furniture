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
                    <li class="breadcrumb-item active">Produktet</li>
                </ol>
            <div class="row justify-content-center">
                <?php
                    $produkti= new Produktet();
                    if(isset($_GET['id'])){
                        $produkti=$produkti->find_id($_GET['id']);
                        }
                        if(isset($_POST['edit_produkt'])){
                        $produkti->setName($_POST['name']);
                        $produkti->setDescription($_POST['description']);
                        $produkti->setPrice($_POST['price']);
                        $produkti->setImage_name($_POST['image_name']);
                        $produkti->update();
                    }
                ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Update Admin</h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label class="small mb-1" for="firstname">Name :</label>
                                <input class="form-control py-4" value="<?php echo $produkti->getName();?>" name="name" id="name" type="text" placeholder="Enter full name" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="lastname">Description :</label>
                                <input class="form-control py-4" name="description" value="<?php echo $produkti->getDescription();?>"
                            id="description" type="text" placeholder="Enter description" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="email">Price :</label>
                                <input class="form-control py-4" name="price" value="<?php echo $produkti->getPrice();?>" id="price" type="text" placeholder="Enter  price" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="email">Image :</label>
                                <input class="form-control py-4" name="image_name" value="<?php echo $produkti->getImage_name();?>" id="image_name" type="text" placeholder="Enter  image_name" />
                            </div>
                            <input class="btn btn-primary" id="login" value="Edit Produkt" type="submit" name="edit_produkt"/>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small">
                            <a href="register.html">
                            Have an account? Go to login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "inc/footer.php"?>