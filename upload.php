<?php

$name = $_FILES['file']['name'];//name of the file
$type = $_FILES['file']['type'];//type of the file
$extension = strtolower(substr($name,strpos($name,'.')+1));
$tmp_loc = $_FILES['file']['tmp_name'];
$size = $_FILES['file']['size'];

$max_size = 2097152;

if(isset($name))
{
  if(!empty($name))
  {
    if(($extension=='jpeg'||$extension=='jpg') && $type=='image/jpeg' && $size <= $max_size) {
      $location = 'uploads/';
      if(move_uploaded_file($tmp_loc,$location.$name)) {
        echo 'Uploaded';
      } else {
        echo "There was an error";
      }
    }
    else {
      echo 'This is not a jpeg form OR this is greater than 2MB';
    }
  } else {
      echo "Please choose a file...";
  }
}


//location where the file is stored similarly ['error'] will give the error

 ?>

 <form action="upload.php" method="POST" enctype="multipart/form-data">
   <input type="file" name="file"><br>
   <input type="submit" name="submit" value="Submit">
 </form>
