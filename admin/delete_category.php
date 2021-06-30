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
                <li class="breadcrumb-item active">Category</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                    $category= new Category();
                    if(isset($_GET['id'])){
                        $category = $category->find_id($_GET['id']);
                        }
                        if(isset($_POST['delete_category'])){
                            $category->delete();
                    }
                ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Delete Category</h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label class="small mb-1" for="firstname">Name :</label>
                                <input class="form-control py-4" value="<?php echo $category->getName();?>" name="name"readonly id="name" type="text" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="lastname">Description :</label>
                                <input class="form-control py-4" name="description" value="<?php echo $category->getDescription();?>" id="description" readonly type="text" placeholder="Enter description" />
                            </div>
                        
                            <input class="btn btn-primary" id="login" value="Delete Category" type="submit" name="delete_category"/>
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