<?php
  include 'db.php';
  $name = $_POST['name'];
  $description = $_POST['description'];
  $uniquesavename=time().uniqid(rand());
  
  // for thumbnail
  $target_dir = "../uploads/";
  $target_file = $target_dir . $uniquesavename. '.jpg' ;
  $filename = $_FILES["imglink"]["tmp_name"];
  move_uploaded_file($filename,  $target_file);
  
  
  // for music file
  $target_dir2 = "../music/";
  $target_file2 = $target_dir2 . $uniquesavename. '.mp3' ;
  $filename2 = $_FILES["filelink"]["tmp_name"];
  move_uploaded_file($filename2,  $target_file2);
  
  
  $sql = "INSERT INTO product VALUES ('".$uniquesavename."', '".$name."', '".$uniquesavename."','".$description."')"; 
  if ($conn->query($sql) === TRUE) {
    header('location: ../');
  } 
  else {
    echo "Error : ". $conn->error;
  }
?>