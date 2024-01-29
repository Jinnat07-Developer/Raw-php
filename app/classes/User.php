<?php


namespace App\classes;


class User
{
    public $users = [];

    public function __construct()
    {
        $this->users = [
            0=>[
                'id'       =>1,
                'name'     =>'jinnat',
                'user_name'=>'jinnat',
                'password' =>123,
            ],
            1=>[
                'id'       =>2,
                'name'     =>'jinnat ',
                'user_name'=>'jinnat',
                'password' =>456,
            ],
            2=>[
                'id'       =>3,
                'name'     =>'admin3',
                'user_name'=>'admin3',
                'password' =>789,
            ],
        ];
    }

    public function getUser()
    {
        return $this->users;
    }
}