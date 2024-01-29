<?php


namespace App\classes;


class Site
{
    public $sites=[];

    public function __construct()
    {
        $this->sites =[
            0=>[
                'id'         =>1,
                'title'      =>'Understanding E-commerce',
                'image'      =>'assets/images/service_img/1.webp',
                'description'=>'Providing goods and services isn\'t as easy as it may seem. It requires a lot of research about the products and services you wish to sell, the market, audience, competition, as well as expected business costs.',
            ],
            1=>[
                'id'         =>2,
                'title'      =>'Types of E-commerce Revenue Models',
                'image'      =>'assets/images/service_img/2.webp',
                'description'=>'In addition to crafting what type of e-commerce company a business wants to be, the business must decide how it wants to make money. Due to the unique nature of e-commerce, the business has a few options on how it wants to process orders, carry inventory, and ship products.',
            ],
            2=>[
                'id'         =>3,
                'title'      =>'Company website',
                'image'      =>'assets/images/service_img/3.jpg',
                'description'=>'Company Websites means all Internet or intranet websites owned and/or operated by or for the Company or any of its Subsidiaries, including all web pages and content associated with such websites or the Company SM Accounts.',
            ],
            3=>[
                'id'         =>4,
                'title'      =>'Company website1',
                'image'      =>'assets/images/service_img/4.gif',
                'description'=>'Company Websites means all Internet or intranet websites owned and/or operated by or for the Company or any of its Subsidiaries, including all web pages and content associated with such websites or the Company SM Accounts.',
            ],

            4=>[
                'id'         =>5,
                'title'      =>'How Do You Meditate on Scripture?',
                'image'      =>'assets/images/service_img/5.png',
                'description'=>'Find a quiet comfortable place. ...
                                Choose a small portion of Scripture. ...
                                Consider diagramming the Bible verse. ...
                                Think about the imagery of the verse. ...'

            ],
            5=>[
                'id'         =>6,
                'title'      =>'Blog Site1(The Way self relaxation)',
                'image'      =>'assets/images/service_img/6.png',
                'description'=>'Fasting practices to reconnect with the sacred, regain a sense of your life’s purpose, and heal physically and emotionally
                                
                                • Details what to expect during your fast physically, emotionally, and spiritually
                                
                                • Provides step-by-step guidelines on preparing for the fast, how long you should fast, what you can and can’t do during the fast, and how to end your fast
                                
                                • Explains how fasting can help or heal many chronic conditions, such as type II diabetes, hypertension, cardiovascular disease, arthritis, psoriasis, and insomnia',

            ],
            6=>[
                'id'         =>7,
                'title'      =>'Why such hush-hush over Shakib’s injury?',
                'image'      =>'assets/images/service_img/1.avif',
                'description'=>'Although three days have passed since Bangladesh captain Shakib Al Hasan left the ground after feeling uncomfortable with his left thigh during the World Cup game against New Zealand on Friday, the team management has yet to provide the exact picture of the all-rounder\'s injury status.',
            ],
            7=>[
                'id'         =>8,
                'title'      =>'Disruption in transmission line of Mirpur into darkness',
                'image'      =>'assets/images/service_img/7.avif',
                'description'=>'According to sources at Power Grid Company of Bangladesh (PGCB) and Dhaka Electric Supply Company (Desco), a 132 kV transmission line between Uttara to Mirpur tripped at 7:30pm leading to a blackout for more than an hour.',
            ],
        ];
    }

    public function getAllInfo()
    {
       return $this->sites;
    }

    public function getSiteById($id)
    {
        foreach($this->sites as $site)
        {
            if($site['id'] == $id)
            {
                return $site;
            }
        }
    }
}