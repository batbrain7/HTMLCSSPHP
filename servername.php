<?php ob_start();//storing the output in an internal buffer  ?> <!-- removes the error of the page -->

<h1>My PAGE</h1>

<?php

// include 'header.inc.php';
//
// $script = $_SERVER['SCRIPT_NAME'];

$redirect  = true;
$redirect_page = 'https://www.google.co.in';

if($redirect) {
  header('Location: '.$redirect_page);  //relocating a user to a particular page. header() defines the header of the function.
}

ob_end_clean(); //clears the output buffer but doesn't give us any content back
//echo $script;

ob_end_flush();//flushing the buffer and giving the result out
?>
