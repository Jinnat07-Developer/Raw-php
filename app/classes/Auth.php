<?php


namespace App\classes;
use App\classes\User;

class Auth
{
    public $userName, $password;
    public $users,$status,$user;

    public function __construct($post)
    {
        $this->userName =$post['user_name'];
        $this->password =$post['password'];
    }

    public function loginCheck()
    {
        $this->user = new User();
        $this->users = $this->user->getUser();

        $this->status ='fail';

        foreach ($this->users as $user)
        {
            if($user['user_name'] == $this->userName && $user['password'] == $this->password)
            {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];

                $this->status = 'success';
            }
            if($this->status == 'success')
            {
                header('Location:web.php?page=dashboard');
            }
            else{
                header("Location:web.php?page=login&&message=sorry...invalid");
            }
        }
        echo $this->userName;
        echo $this->password;

    }


}