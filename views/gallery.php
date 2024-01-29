<?php include "header.php"; ?>

<section class="py-5 bg-dark" >
    <h1 class="text-center text-success">PHOTO GALLERY</h1>
    <div class="container">
        <div class="row py-5">
            <?php foreach($galleries as $gallery) { ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 mb-3 bg-success test">
                        <img src="<?php echo $gallery['image']; ?>"  alt="image/">
                        <h2 class="text-center"><?php echo $gallery['title']; ?></h2>
<!--                        <div class="card-body">-->
<!--                            <h2>--><?php //echo $gallery['title']; ?><!--</h2>-->
<!--                            <p>--><?php //echo $gallery['description']; ?><!--</p>-->
<!--                            <hr/>-->
<!--                            <a href="" class="btn bg-dark-subtle btn-outline-dark">Click More</a>-->
<!--                        </div>-->
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include "footer.php"; ?>

