<?php

 require ('connect.php');
     
     $s1 = 0;
     $s2 = 0;
     $s3 = 0; 
     $s4 = 0;
     $s5 = 0;   
     $s6 = 0; 
     $s7 = 0; 
     $s8 = 0; 
     $s9 = 0; 
     $s10 = 0; 
     $i = 1;

     $id = $_POST['id'];
     $competitor_id = $_POST['competitor_id'];
     $date = $_POST['date'];
     $week = $_POST['week'];
     $caliber = $_POST['caliber'];
     $model = $_POST['model'];
     $target_type = $_POST['target_type'];
     $station = $_POST['station'];
     $target_number = $_POST['target_number'];
     $shot_1 = $_POST['shot_1'];
     $shot_2 = $_POST['shot_2'];
     $shot_3 = $_POST['shot_3'];
     $shot_4 = $_POST['shot_4'];
     $shot_5 = $_POST['shot_5'];
     $shot_6 = $_POST['shot_6'];
     $shot_7 = $_POST['shot_7'];
     $shot_8 = $_POST['shot_8'];
     $shot_9 = $_POST['shot_9'];
     $shot_10 = $_POST['shot_10'];
     $target_total = $_POST['target_total'];
     $target_notes = $_POST['target_notes'];
     
     while($i<=6)
     {   

      $target_number = $i;

       if ($i == 1 or $i == 4){
         $target_type = 'S';
       }elseif($i == 2 or $i == 5){
         $target_type = 'T';
       }elseif($i == 3 or $i == 6){
         $target_type = 'R';
       }

       $result = mysqli_query($mydbh,"select id from bullseye order by id desc limit 1"); 
        if (!$result)
           {
            $error = 'Error!';
            include 'error.php';
            exit();
           }
        while ($row = $result->fetch_array(MYSQLI_BOTH))
        {
        $id = $row['id'] + 1;
        }
         $id = mysqli_real_escape_string($mydbh,$id);
         $competitor_id = mysqli_real_escape_string($mydbh,$competitor_id);
         $date = mysqli_real_escape_string($mydbh,$date);
         $week = mysqli_real_escape_string($mydbh,$week);
         $caliber = mysqli_real_escape_string($mydbh,$caliber);
         $model = mysqli_real_escape_string($mydbh,$model);
         $target_type = mysqli_real_escape_string($mydbh,$target_type);
         $station = mysqli_real_escape_string($mydbh,$station);
         $target_number = mysqli_real_escape_string($mydbh,$target_number);
         $shot_1 = mysqli_real_escape_string($mydbh,$shot_1);
         $shot_2 = mysqli_real_escape_string($mydbh,$shot_2);
         $shot_3 = mysqli_real_escape_string($mydbh,$shot_3);
         $shot_4 = mysqli_real_escape_string($mydbh,$shot_4);
         $shot_5 = mysqli_real_escape_string($mydbh,$shot_5);
         $shot_6 = mysqli_real_escape_string($mydbh,$shot_6);
         $shot_7 = mysqli_real_escape_string($mydbh,$shot_7);
         $shot_8 = mysqli_real_escape_string($mydbh,$shot_8);
         $shot_9 = mysqli_real_escape_string($mydbh,$shot_9);
         $shot_10 = mysqli_real_escape_string($mydbh,$shot_10);
         $target_total = mysqli_real_escape_string($mydbh,$target_total);
         $target_notes = mysqli_real_escape_string($mydbh,$target_notes);

          mysqli_query($mydbh,"insert into bullseye values($id, '$competitor_id', '$date', '$week', '$caliber', '$model', '$target_type', '$station', '$target_number', '$shot_1', '$shot_2', '$shot_3', '$shot_4', '$shot_5', '$shot_6', '$shot_7', '$shot_8', '$shot_9', '$shot_10','$target_total', '$target_notes')");
        
      $i++;
      }
      header("location:bullseye.php");
        
    mysqli_close($mydbh);
?>
