<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Calculate;
use App\classes\Auth;


$home = new Home();

if(isset($_GET['page']))
{
    if($_GET['page'] == 'home')
    {
        $home->index();
    }

    if($_GET['page'] == 'about')
    {
        $home->about();
    }

    elseif ($_GET['page'] == 'contact')
    {
        $home->contact();
    }

    elseif ($_GET['page'] == 'calculator')
    {
        $home->calculator();
    }

    elseif ($_GET['page'] == 'gallery')
    {
        $home->gallery();
    }

    elseif ($_GET['page'] == 'portfolio')
    {
        $home->portfolio();
    }

//    elseif ($_GET['page'] == 'service')
//    {
//        $home->service();
//    }


    elseif ($_GET['page'] == 'detail')
    {
        $home->detail($_GET['id']);
    }

    elseif ($_GET['page'] == 'login')
    {
        $home->login();
    }

    elseif ($_GET['page'] == 'dashboard')
    {
        $home->dashboard();
    }


    elseif ($_GET['page'] == 'logout')
    {
        $home->logout();
    }

}

elseif (isset($_POST['calculator_btn']))
{
    $calculate = new Calculate($_POST);
    $calculate->getAllResult();

}

elseif (isset($_POST['login_btn']))
{
    $auth = new Auth($_POST);
    $auth->loginCheck();

}
