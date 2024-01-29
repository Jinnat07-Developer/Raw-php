<?php include "header.php"; ?>
    <div id="slider" class="carousel bg-dark-subtle" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="row">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/banners/slide1.jpg" class="w-100 h-50" alt="image">
                    <div class="carousel-caption  my-caption">
                        <h1>WELLCOME TO OUR WEBSITE</h1>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi deleniti dolore est eum explicabo, facere harum id ipsam molestiae, natus necessitatibus nobis pariatur, quos soluta tempore voluptas voluptatibus.</P>
                        <a href="" class="btn btn-dark btn-outline-secondary ">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banners/slide2.jpg" class="w-100" alt="image">
                    <div class="carousel-caption my-caption">
                        <h1>This is the second slide</h1>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi deleniti dolore est eum explicabo, facere harum id ipsam molestiae, natus necessitatibus nobis pariatur, quos soluta tempore voluptas voluptatibus.</P>
                        <a href="" class="btn btn-dark btn-outline-secondary">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banners/slide3.jpg" class="w-100" alt="image">
                    <div class="carousel-caption my-caption">
                        <h1>This is the third slide</h1>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi deleniti dolore est eum explicabo, facere harum id ipsam molestiae, natus necessitatibus nobis pariatur, quos soluta tempore voluptas voluptatibus.</P>
                        <a href="" class="btn btn-dark btn-outline-secondary">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/banners/slide4.jpg" class="w-100" alt="image">
                    <div class="carousel-caption my-caption">
                        <h1>This is the fourth slide</h1>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus atque commodi deleniti dolore est eum explicabo, facere harum id ipsam molestiae, natus necessitatibus nobis pariatur, quos soluta tempore voluptas voluptatibus.</P>
                        <a href="" class="btn btn-dark btn-outline-secondary">Read More</a>
                    </div>
                </div>
            </div>
            <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#slider" class="carousel-control-next" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>


<?php //include "header.php"; ?>

    <section class="py-5 bg-dark" >
    <div class="container">
        <div class="row">
            <?php foreach($sites as $site) { ?>
                <div class="col-md-3 mb-4 test1">
                    <div class="card h-100 bg-dark-subtle test2">
                        <img src="<?php echo $site['image']; ?>"  alt="image/">
                        <div class="card-body ">
                            <h2><?php echo $site['title']; ?></h2>
                            <hr/>
                            <a href="web.php?page=detail&&id=<?php echo $site['id']; ?>" class="btn   btn1">Click More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<!--    --><?php //include "footer.php"; ?>







<!--    <section class="py-5 bg-dark-subtle ">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                --><?php //foreach($cards as $card) { ?>
<!--                    <div class="col-md-3">-->
<!--                        <div class="card h-100 bg-light-subtle ">-->
<!--                            <img src="--><?php //echo $card['image']; ?><!--">-->
<!--                            <div class="card-body ">-->
<!--                                <h4>--><?php //echo $card['title']; ?><!--</h4>-->
<!--                                <p>--><?php //echo $card['price']; ?><!--</p>-->
<!--                                <a href="" class="btn btn-dark btn-outline-secondary">Click More</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <section class="py-5 bg-dark-subtle">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <img src="assets/images/footer/1.png">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Home-Courses-News and Event-Contact</p>
                </div>
                <div class="col-md-4">
<!--                    <img src="assets/images/footer/2.jpg">-->
                </div>
                <div class="col-md-4">
                    <p>Copyright@BITM-2023[LE]</p>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>