<?php
   
if (isset($_POST['submit']))
{
    include_once '../includes/dbh.inc.php';

    $meter = mysqli_real_escape_string($conn, $_POST['meter']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);

    if( empty($meter) || empty($contact) || empty($problem) )
    {
      header("Location: ../process.php?process=fieldsempty");
      exit();
    }
    else
    {       
      $sql = "INSERT INTO process (meter, contact, problem) VALUES ('$meter', '$contact', '$problem')";
      $result = mysqli_query($conn, $sql);

      header("Location: ../process.php?process=success");
      exit();
    }
  }
  
  else
  {
    header("Location: ../process.php");
    exit();
  }
?>