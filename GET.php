<?php

function get_url($url) //gets the data from a URL

{
    $ch = curl_init();
     
    if($ch === false)
    {
        die('Failed to create curl object');
    }
     
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
 
    return $data;
}
 
echo get_url('http://openexchangerates.org/api/latest.json?app_id=3af838236fe346c79ca01e62c5991caa');
?>