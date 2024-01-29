<?php


namespace App\classes;


class Notes
{
   public $notes=[];

   public function __construct()
   {
       $this->notes = [
           0=>[
               'id'        =>'1',
               'Mobile-no' =>' 01301116193',
                  'email'  =>'Jinnat.soumi@yahoo.com',
               'address'   =>'Wari',
               'education' =>'BSC in CSE',
               'refference'=>'Mahbubur Rahman (Senior Trainer Of BITM)',
               'experience'=>'E-commerce IT,Counselor,Trainer',
               'skills'    =>'Web design and development using PHP Laravel and vue, C++.',
               'interest'  =>'Explore the new thing, reading,travelling',
               'image'     =>'assets/images/portfolio_img/2.jpg',
               'name'      =>'Jinnat Fatema',
           ],
       ];

   }

   public function getAllVitae()
   {
       return $this->notes;
   }


}