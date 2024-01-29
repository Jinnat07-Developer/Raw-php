<?php


namespace App\classes;


class Gallery
{
   public $galleries =[];

   public function __construct()
   {
       $this->galleries=[
           0=>[
               'id'   =>1,
               'title'=>'Restaurant',
               'image'=>'assets/images/gallery/1.jpg',


           ],
           1=>[
               'id'   =>2,
               'title'=>'Restaurant',
               'image'=>'assets/images/gallery/2.jpg',


           ],
           2=>[
               'id'   =>3,
               'title'=>'Restaurant',
               'image'=>'assets/images/gallery/3.jpg',


           ],

           3=>[
               'id'   =>4,
               'title'=>'Office journey',
               'image'=>'assets/images/gallery/4.jpg',

           ],

           4=>[
               'id'   =>5,
               'title'=>'Office journey',
               'image'=>'assets/images/gallery/13.jpg',

           ],

           5=>[
               'id'   =>6,
               'title'=>'Office journey',
               'image'=>'assets/images/gallery/17.jpg',

           ],
           6=>[
               'id'   =>7,
               'title'=>'Natural view',
               'image'=>'assets/images/gallery/7.jpg',

           ],
           7=>[
               'id'   =>8,
               'title'=>'Natural view',
               'image'=>'assets/images/gallery/12.jpg',

           ],
           8=>[
               'id'   =>9,
               'title'=>'Natural view',
               'image'=>'assets/images/gallery/8.jpg',

           ],
           9=>[
               'id'   =>10,
               'title'=>'shopping',
               'image'=>'assets/images/gallery/9.jpg',

           ],
           10=>[
               'id'   =>11,
               'title'=>'shopping',
               'image'=>'assets/images/gallery/10.jpg',

           ],
           11=>[
               'id'   =>12,
               'title'=>'Home ',
               'image'=>'assets/images/gallery/14.jpg',

           ],




       ];
   }

    public function getAllGallery()
    {
        return $this->galleries;
    }

}