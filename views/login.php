<?php include "header.php"; ?>

<section class="py-5 bg-dark-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Login Program
                    </div>
                    <div class="card-body bg-warning-subtle">
                        <p class="text-center text-bg-dark"><?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?></p>
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="user_name" class="form-control bg-dark-subtle"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control bg-dark-subtle"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="login_btn" class="btn bg-dark-subtle bg-white text-black" value="login"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>

