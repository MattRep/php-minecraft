<?php
 class mcphp{
  function command($cmd, $ip, $port){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://$ip:$port/console?command=$cmd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output=curl_exec($ch);
    curl_close($ch);
    return $output;
  }
  
 }
?>
