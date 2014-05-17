<?php
 class mcphp{
  function command($cmd, $ip, $port){
    $cmd = str_replace(" ", "+", $cmd);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://$ip:$port/console?command=$cmd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output=curl_exec($ch);
    curl_close($ch);
    return $output;
  }
  function say($say, $ip, $port){
    $say = str_replace(" ", "+", $say);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://$ip:$port/console?command=say%20$cmd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output=curl_exec($ch);
    curl_close($ch);
    return $output;
  }
  function give($nick, $id, $num, $ip, $port){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://$ip:$port/console?command=give+$nick+$id+$num");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output=curl_exec($ch);
    curl_close($ch);
    return $output;  
  }
 }
?>
