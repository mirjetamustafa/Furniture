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
                    if(isset($_POST['add_produkt'])){
                        $produkti = new Produktet();
                        $produkti->setName($_POST['name']); 
                        $produkti->setDescription($_POST['description']); 
                        $produkti->setPrice($_POST['price']); 
                        $produkti->setImage_name($_POST['image_name']); 
                       
                        $produkti->create();
                    }
                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Create Produkt</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Name :</label>
                                    <input class="form-control py4" name="name" id="name" type="text" placeholder="Enter Name" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Description :</label>
                                    <textarea name="description"  cols="35" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Price :</label>
                                    <input class="form-control py4" name="price" id="name" type="text" placeholder="Enter Price" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Image :</label>
                                    <input class="form-control py4" name="image_name" type="text" placeholder="Enter Image" />
                                </div>
                                
                                <input class="btn btn-primary" id="login" value="Create Category" type="submit" name="add_produkt"/>
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