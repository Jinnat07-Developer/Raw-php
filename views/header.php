<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand bg-dark navbar-dark ">
    <div class="container">
        <a href="" class="navbar-brand"><img src="assets/images/logo/1.png"></a>
        <ul class="navbar-nav mx-auto my-hover">
            <li><a href="web.php?page=home" class="nav-link">Home</a></li>
            <li><a href="web.php?page=about" class="nav-link">About</a></li>
            <?php if(isset($_SESSION['user_name'])) { ?>
            <li><a href="web.php?page=contact" class="nav-link">Contact</a></li>

            <li><a href="web.php?page=calculator" class="nav-link">Calculator</a></li>
            <li><a href="web.php?page=gallery" class="nav-link">Gallery</a></li>
            <?php } ?>
            <li><a href="web.php?page=portfolio" class="nav-link">Portfolio</a></li>
<!--            <li><a href="web.php?page=service" class="nav-link">Service</a></li>-->
        </ul>


<!--        <ul class="navbar-nav">-->
<!--            <li><a href="" class="nav-link">Login</a></li>-->
<!--            <li><a href="" class="nav-link">Logout</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->





        <ul class="navbar-nav">
            <?php if(isset($_SESSION['user_id'])) { ?>
                <li class="dropdown">
                    <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo $_SESSION['user_name']; ?></a>
                    <ul class="dropdown-menu">
                        <li ><a href="web.php?page=dashboard" class="dropdown-item">dashboard</a></li>
                        <li ><a href="web.php?page=logout"    class="dropdown-item">logout</a></li>
                    </ul>
                </li>
            <?php } else { ?>
                <li><a href="web.php?page=login" class="nav-link">login</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>