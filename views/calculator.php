<?php include "header.php"; ?>
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card ">
                    <div class="card-header bg-white">
                        Calculator Program
                    </div>
                    <div class="card-body bg-dark-subtle text-uppercase">
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9 ">
                                    <input type="number" name="starting_number" class="form-control bg-warning-subtle">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="ending_number" class="form-control bg-warning-subtle">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your choice</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="choice" value="+">+</label>
                                    <label><input type="radio" name="choice" value="-">-</label>
                                    <label><input type="radio" name="choice" value="*">*</label>
                                    <label><input type="radio" name="choice" value="/">/</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control bg-warning-subtle"><?php echo isset($_GET['result'])? $_GET['result'] : ' '; ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="calculator_btn" class="btn bg-warning-subtle text-black" value="calculate">
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

