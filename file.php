<?php

// $string = "this is a string";
//
// echo $string;
//
// if(preg_match('/is/'),$string) {
//   echo "Match found";
// }
// else {
//   echo "No match found";
// }

$offset = 0;

if (isset($_POST['text'])&&isset($_POST['search'])&&isset($_POST['replace'])) {
  $text = $_POST['text'];
  $search = $_POST['search'];
  $replace = $_POST['replace'];

  $search_len = strlen($search);

  if(!empty($_POST['text'])&&!empty($_POST['search'])&&!empty($_POST['replace'])) {
    while($strpos = strpos($text,$search,$offset)) {
      $offset = $strpos + $search_len;
      $text = substr_replace($text,$replace,$strpos,$search_len);
    }
    echo $text;
  }
  else {
    echo 'Please fill in the details';
  }
}
else
{
  echo "Enter the details and submit them..";
}

//echo 'lol';

?>


<form action="file.php" method="POST">
  <textarea name = "text" rows = "6" cols = "30"></textarea><br><br>
  Search for : <input type="text" name="search"><br><br>
  Replace with : <input type="text" name="replace"><br><br>
  <input type="submit" value="SUBMIT">
</form>
