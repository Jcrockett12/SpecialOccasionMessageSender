<?php
include_once 'header.php';

if (isset($_POST['submit'])) {
  require_once "dbh.inc.php";
  require_once 'functions.inc.php';
  
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
	
  $message = $_POST['message'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $userId = $_SESSION["userid"];
  $orderDate = $_POST['date']." ".$_POST['time'];
  
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  
  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  
  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 1000000) {       
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = '/home/ITE505/josh_I505/public_html/Capstone/images/' . $fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
		  
		submitMessage($conn, $message, $fileName, $name, $email, $userId, $orderDate);
		
			
        
//        header("Location: index.php?upload=success");
      }
      else {
        echo "Your file is too big!";
      }
    }
    else {
      echo "There was an error uploading your file!";
    }
  }
  else {
    echo "You cannot upload files of this type!";
  }

}