<?php
   
if (isset($_POST['submit']))
{
    include_once 'dbh.inc.php';

    $meter = mysqli_real_escape_string($conn, $_POST['meter']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $problem = mysqli_real_escape_string($conn, $_POST['problem']);

    if( empty($meter) || empty($contact) || empty($problem) )
    {
      header("Location: ../index.php?index=fieldsempty");
      exit();
    }
    else
    {       
      $sql = "INSERT INTO process (meter, contact, problem) VALUES ('$meter', '$contact', '$problem')";
      $result = mysqli_query($conn, $sql);

      header("Location: ../index.php?index=success");
      exit();
    }
  }
  
  else
  {
    header("Location: ../index.php");
    exit();
  }
?>