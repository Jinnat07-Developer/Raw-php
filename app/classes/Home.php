<?php


namespace App\classes;
use App\classes\Site;
//use App\classes\Card;
use App\classes\Gallery;
use App\classes\Blog;
use App\classes\Notes;

class Home
{
    public $cards, $card;
    public $sites, $site,$singleSite;
    public $gallery, $galleries;
    public $blog,$blogs;
    public $notes,$note;

    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $this->site  = new Site();
        $this->sites = $this->site->getAllInfo();
//        $this->card  = new Card();
//        $this->cards = $this->card->getAllCards();
        return view('home', ['sites' =>  $this->sites]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        $this->blog  = new Blog();
        $this->blogs = $this->blog->getAllData();
        return view('about',['blogs' => $this->blogs]);
    }

    public function calculator()
    {

        return view('calculator');
    }

    public function gallery()
    {
        $this->gallery   = new gallery();
        $this->galleries = $this->gallery->getAllGallery();
        return view('gallery', ['galleries' => $this->galleries]);

    }

    public function portfolio()
    {
        $this->note  = new Notes();
        $this->notes = $this->note->getAllVitae();
        return view('portfolio',['notes'=> $this->notes]);
    }

//    public function service()
//    {
//        $this->site  = new Site();
//        $this->sites =  $this->site->getAllInfo();
//        return view('service',['sites'=> $this->sites]);
//    }


    public function detail($id)
    {
        $this->site       = new Site();
        $this->singleSite = $this->site->getSiteById($id);
        return view('detail',['site'=>$this->singleSite]);
    }


    public function dashboard()
    {
        if(isset($_SESSION['user_id']))
        {
            return view('dashboard');
        }
        else
        {
            header('Location: web.php?page=login');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        unset($_SESSION['user_id']) ;
        unset($_SESSION['user_name']);

        header('Location: web.php?page=home');
    }


}