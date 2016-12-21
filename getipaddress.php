<?php









// not a very good method to retriebve the user's ip address.
require 'conf.inc.php';

foreach($ip_blk as $ip)
{
  if($ip == $ip_address)
    die('Your ip has been blocked moron....');
}

//echo $ip_address.<br>;

 ?>
