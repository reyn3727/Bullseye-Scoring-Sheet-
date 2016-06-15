<?php

 require ('connect.php');
     
     $shooter_id = $_POST['id'];
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $e_mail = $_POST['e_mail'];
     $fee = $_POST['fee'];
     $paid_type = $_POST['paid_type'];
     $paid_date = $_POST['paid_date'];

   if ($shooter_id <> 0)
       {
         $name = mysqli_real_escape_string($mydbh,$name);
         $phone = mysqli_real_escape_string($mydbh,$phone);
         $e_mail = mysqli_real_escape_string($mydbh,$e_mail);
         $fee = mysqli_real_escape_string($mydbh,$fee);
         $paid_type = mysqli_real_escape_string($mydbh,$paid_type);
         $paid_date = mysqli_real_escape_string($mydbh,$paid_date);
         $shooter_id = mysqli_real_escape_string($mydbh,$shooter_id);

         mysqli_query($mydbh,"update bullseye_shooter set name='$name', phone='$phone', e_mail='$e_mail', fee='$fee', paid_type='$paid_type',
          paid_date='$paid_date' where  shooter_id='$shooter_id'");

      header("location:bullseye_shooter.php");
      }
     else
     {
      $result = mysqli_query($mydbh,"select shooter_id from bullseye_shooter order by shooter_id desc limit 1");
      if (!$result)
           {
            $error = 'Error!';
            include 'error.php';
            exit();
           }
        while ($row = $result->fetch_array(MYSQLI_BOTH))
       {
        $shooter_id = $row['shooter_id'] + 1;
       }
         $shooter_id = mysqli_real_escape_string($mydbh,$shooter_id);
         $name = mysqli_real_escape_string($mydbh,$name);
         $phone = mysqli_real_escape_string($mydbh,$phone);
         $e_mail = mysqli_real_escape_string($mydbh,$e_mail);
         $fee = mysqli_real_escape_string($mydbh,$fee);
         $paid_type = mysqli_real_escape_string($mydbh,$paid_type);
         $paid_date = mysqli_real_escape_string($mydbh,$paid_date);
         
       mysqli_query($mydbh,"insert into bullseye_shooter values('$shooter_id', '$name', '$phone', '$e_mail', '$fee', '$paid_type', '$paid_date')")or die('Query failed: '. mysqli_error($mydbh)); 
        
      header("location:bullseye_shooter.php");
     }
    
    mysqli_close($mydbh);
?>
