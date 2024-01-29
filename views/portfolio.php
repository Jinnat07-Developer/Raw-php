<?php include "header.php"; ?>
<section class="py-3 bg-dark  ">
    <div class="container">
        <div class="row">
                <?php foreach ($notes as $note) { ?>
                    <div class="col-md-4 bg-danger-subtle">
                        <div class="col-md-3 mb-3"><img src="assets/images/portfolio_img/2.jpg"></div>
                        <h5>Mobile No</h5>
                        <div class="col-md-3 mb-3"><label>01301116193/01916901337</label></div>
                        <h5>Email</h5>
                        <p><?php echo $note['email']; ?></p>
                        <h5>Address</h5>
                        <p><?php echo $note['address']; ?></p>
                        <h5>Education</h5>
                        <div class="col-md-3 mb-3"><?php echo $note['education']; ?></div>
                        <h5>Refference</h5>
                        <div class="col-md-3"><label>Mahbubur Rahman</label></div>
                    </div>
                    <div class="col-md-8 bg-warning-subtle py-5">
                        <h1>Jinnat Fatema</h1>
                        <h3>Web Developer</h3>
                        <hr/>
                        <h5>experience</h5>
                        <p><?php echo $note['experience']; ?></p>
                        <hr/>
                        <h5>Job Skills</h5>
                        <p><?php echo $note['skills']; ?></p>
                        <hr/>
                        <h5>Interest</h5>
                        <p><?php echo $note['interest']; ?></p>
                    </div>
                <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>

