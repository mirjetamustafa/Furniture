<?php
    use Admin\Lib\Admiin;
    include "inc/header.php";
    include "inc/adminnav.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Users</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Admin</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                    if(isset($_POST['add_admin'])){
                        $admin=new Admiin();
                        $admin->setFull_name($_POST['full_name']);
                        $admin->setUsername($_POST['username']);
                        $admin->setPassword($_POST['password']);
                        $admin->create();
                    }
                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Create Admin</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">FullName :</label>
                                    <input class="form-control py4" name="full_name" id="full_name" type="text" placeholder="Enter Full name" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Username :</label>
                                    <input class="form-control py4" name="username" id="username" type="text" placeholder="Enter username" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Password :</label>
                                    <input class="form-control py4" name="password" id="password" type="password" placeholder="Enter email password" />
                                </div>
                                <input class="btn btn-primary" id="login" value="Create Admin" type="submit" name="add_admin"/>
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