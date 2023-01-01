<div class="container-fluid">
    <div class="row d-flex justify-content-center algin-items-center min-vh-100">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="fw-bold">Login</h2>
                </div>
                <div class="card-body">
                    <h5 class="card-title">CKT-UTAS Halls Booking System</h5>
                    <!-- <p class="card-text"></p> -->
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    <form action="" method="post">
                        <div class="form-group m-3">
                            <input type="text" name="username" id="" class="form-control" placeholder="Enter your Username" required>
                        </div>
                        <div class="form-group m-3">
                            <input type="password" name="password" id="" class="form-control" placeholder="Enter your Password" required>
                        </div>
                        <div class="form-group m-3">
                            <input type="submit" value="Login" name="login" class="btn btn-block btn-primary">
                        </div>
                        <?php
                        $login = new ControllerUsers();
                        $login -> ctrUserLogin();
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>