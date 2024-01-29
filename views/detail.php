<?php include "header.php"; ?>
<section class="py-5 bg">
    <div class="container">
        <div class="row bg-dark">
            <div class="col-md-6">
                <div class="card card-body">
                <img src="<?php echo $site['image']; ?>" alt="image">

                </div>
            </div>
            <div class="col-md-6 bg-secondary-subtle py-5">
                <h2><?php echo $site['title']; ?></h2>
                <p><?php echo $site['description']; ?></p>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
