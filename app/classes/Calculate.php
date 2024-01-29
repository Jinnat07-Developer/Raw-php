<?php


namespace App\classes;


class Calculate
{
    public $startingNumber,$endingNumber,$choice,$i,$result;

    public function __construct($post)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        $this->choice = $post['choice'];
    }

    public function getAllResult()
    {
        if($this->choice == '+')

        {
           $this->result = $this->startingNumber + $this->endingNumber;
        }

        elseif($this->choice == '-')
        {
              $this->result = $this->startingNumber - $this->endingNumber;
        }

        elseif($this->choice == '*')
        {
            $this->result = $this->startingNumber * $this->endingNumber;
        }

        elseif($this->choice == '/')
        {
            $this->result = $this->startingNumber / $this->endingNumber;
        }

        header("Location:web.php?page=calculator&&result=$this->result");


//        if(isset($_POST['odd']))
//        {
//            for($this->i = $this->startingNumber; $this<=$this->endingNumber;$this->i++)
//            {
//                if($this->i%2!=0)
//                {
//                   $this->result.=$this->i;
//                }
//            }
//
//        }
//        elseif (isset($_POST['even']))
//        {
//            for($this->i = $this->startingNumber; $this<=$this->endingNumber;$this->i++)
//            {
//                if($this->i%2 ==0)
//                {
//                    $this->result.=$this->i.' ';
//                }
//            }
//        }


    }
}