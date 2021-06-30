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
                <li class="breadcrumb-item active">Admin</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                    $admin= new Admiin();
                    if(isset($_GET['id'])){
                        $admin=$admin->find_id($_GET['id']);
                        }
                        if(isset($_POST['delete_admin'])){
                            $admin->delete();
                    }
                ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-2">Delete Admin</h3>
                    </div>

                    <div class="card-body">
                        <form method="post" action="">
                            <div class="form-group">
                                <label class="small mb-1" for="firstname">Full Name :</label>
                                <input class="form-control py-4" value="<?php echo $admin->getFull_name();?>" name="full_name"readonly id="full_name" type="text" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="lastname">Username :</label>
                                <input class="form-control py-4" name="username" value="<?php echo $admin->getusername();?>" id="username" readonly type="text" placeholder="Enter username" />
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="email">Password :</label>
                                <input class="form-control py-4" name="password" value="<?php echo $admin->getPassword();?>" id="password" readonly type="password" placeholder="Enter email password" />
                            </div>
                            <input class="btn btn-primary" id="login" value="Delete Admin" type="submit" name="delete_admin"/>
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