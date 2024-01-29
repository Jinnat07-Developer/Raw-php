<?php include "header.php"; ?>
<section class="py-5 bg-secondary">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) { ?>
                <div class="col-md-6">
                    <div class="card card-body bg-warning">
                        <img src="<?php echo $blog['image']; ?>" alt="image">
                    </div>
                </div>
                <div class="col-md-6 bg-warning py-5">
                    <h2 class="text-uppercase"><b><?php echo $blog['name']; ?></b></h2>
                    <p><?php echo $blog['email']; ?></p>
                    <p><?php echo $blog['mobile-no']; ?></p>
                    <p><?php echo $blog['description']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
