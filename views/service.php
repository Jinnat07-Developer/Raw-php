<?php include "header.php"; ?>

<section class="py-5 bg-dark-subtle" >
    <div class="container">
        <div class="row">
            <?php foreach($sites as $site) { ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo $site['image']; ?>"  alt="image/">
                        <div class="card-body">
                            <h2><?php echo $site['title']; ?></h2>
                            <hr/>
                            <a href="web.php?page=detail&&id=<?php echo $site['id']; ?>" class="btn bg-dark-subtle btn-outline-dark">Click More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php include "footer.php"; ?>
