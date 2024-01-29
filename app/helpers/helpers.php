<?php

function view($view,  $data=[], $print=true)
{
    $output ="views not found";
    $filepath ="views/".$view.".php";

    if(file_exists($filepath))
    {
        extract($data);
        ob_start();
        include $filepath;
        $output =ob_get_clean();
    }

    if($print)
    {
        print $output;
    }


}
