<?php


namespace App\classes;


class Card
{
  public  $cards = [];
  public function __construct()
  {
      $this->cards=[
          0=>[
              'id'   =>1,
              'title'=>'Certified Training on 2D Animation with Video Editing',
              'image'=>'assets/images/cards/1.jpg',
              'price'=>'Tk. 20,000.',

          ],
          1=>[
              'id'=>2,
              'title'=>'Certified Training on Front end Development with ReactJS',
              'image'=>'assets/images/cards/1.jpg',
              'price'=>'Tk. 20,000',

          ],
          2=>[
              'id'=>3,
              'title'=>'Certified Training Web Design with Wordpress Theme Customization',
              'image'=>'assets/images/cards/3.jpg',
              'price'=>'Tk. 11,000',

          ],
          3=>[
              'id'=>4,
              'title'=>'Certified Training On Applied Digital Marketing',
              'image'=>'assets/images/cards/4.jpg',
              'price'=>'Tk. 20,000',

          ],
      ];
  }

  public function getAllCards()
  {
      return $this->cards;
  }
}