<?php include "header.php"; ?>
<section class="py-5 bg-warning">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card bg-dark">
                    <div class="card-header bg-secondary-subtle">
                      Contact Us
                    </div>
                    <div class="card-body">
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Full Name</label>
                                <div class="col-md-9 ">
                                    <input type="text" name="full_name" class="form-control bg-warning">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Email </label>
                                <div class="col-md-9">
                                    <input type="text" name="email" class="form-control bg-warning">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 text-white">Mobile</label>
                                <div class="col-md-9">
                                    <input type="text" name="mobile" class="form-control bg-warning">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="contact_btn" class="btn bg-warning text-black" value="SendUs">
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
