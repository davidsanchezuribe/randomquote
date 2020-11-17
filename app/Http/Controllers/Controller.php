<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController

{
    public function index()
    {
        $url = "https://inspirationalquotesdajusa.s3.amazonaws.com/Image";
        $randomNumber = rand(1,15);
        if($randomNumber < 10){
            $imageurl = $url . '0' . $randomNumber . '.png';
        } else {
            $imageurl = $url . $randomNumber . '.png';            
        }
        // Nothing
        return '<img src="'. $imageurl .'" height="600px" width="auto"><p>Accessed from ' . gethostbyname(gethostname()) . '</p>';
    }
    
}
    

