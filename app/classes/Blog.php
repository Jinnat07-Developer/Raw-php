<?php


namespace App\classes;


class Blog
{
  public $blogs =[];
  public function __construct()
  {
     $this->blogs =[
         0=>[
             'id'         =>1,
             'name'       =>' Name      :: Jinnat Fatema',
             'email'      => 'Email     :: jinnat.soumi@yahoo.com',
             'mobile-no'  =>' Mobile-No :: 01301116193',
             'image'      =>'assets/images/about_img/1.jpg',
             'description'=>' Description :: Explore the new thing is a passion.
                            \' Dream      :: To be a successful software engineer,
                               Hobby      :: Love to travel, reading the books,help the people,family-oriented,hangout with the friends,listening the songs',


         ],
     ];
  }

  public function getAllData()
  {
      return $this->blogs;
  }
}