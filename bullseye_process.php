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
     
     $shot_1 = trim(strtoupper($shot_1));
     $shot_2 = trim(strtoupper($shot_2));    
     $shot_3 = trim(strtoupper($shot_3));    
     $shot_4 = trim(strtoupper($shot_4));    
     $shot_5 = trim(strtoupper($shot_5));    
     $shot_6 = trim(strtoupper($shot_6));    
     $shot_7 = trim(strtoupper($shot_7));    
     $shot_8 = trim(strtoupper($shot_8));    
     $shot_9 = trim(strtoupper($shot_9));    
     $shot_10 =trim(strtoupper($shot_10));

              if ($shot_1 == 'M'){
                   $s1 = 0;
              }elseif ($shot_1 == 'X'){
                   $s1 = 10;
              }else{
                   $s1 = $shot_1;
              }
	      if ($shot_2 == 'M'){
                   $s2 = 0;
              }elseif ($shot_2 == 'X'){
                   $s2 = 10;
              }else{
                 $s2 = $shot_2;
              }
              if ($shot_3 == 'M'){
                   $s3 = 0;
              }elseif ($shot_3 == 'X'){
                   $s3 = 10;
              }else{
               $s3 = $shot_3;
              }
               if ($shot_4 == 'M'){
                   $s4 = 0;
              }elseif ($shot_4 == 'X'){
                   $s4 = 10;
              }else{
              $s4 = $shot_4;
              }
              if ($shot_5 == 'M'){
                   $s5 = 0;
              }elseif ($shot_5 == 'X'){
                   $s5 = 10;
              }else{
                 $s5 = $shot_5;
              }
              if ($shot_6 == 'M'){
                   $s6 = 0;
              }elseif ($shot_6 == 'X'){
                   $s6 = 10;
              }else{
              $s6 = $shot_6;
              }
              if ($shot_7 == 'M'){
                   $s7 = 0;
              }elseif ($shot_7 == 'X'){
                   $s7 = 10;
              }else{
               $s7 = $shot_7;
              }
              if ($shot_8 == 'M'){
                  $s8 = 0;
              }elseif ($shot_8 == 'X'){
                   $s8 = 10;
              }else{
               $s8 = $shot_8;
              }
              if ($shot_9 == 'M'){
                   $s9 = 0;
              }elseif ($shot_9 == 'X'){
                   $s9 = 10;
              }else{
               $s9 = $shot_9;
              }
              if ($shot_10 == 'M'){
                   $s10 = 0;
              }elseif ($shot_10 == 'X'){
                   $s10 = 10;
              }else{
               $s10 = $shot_10;
              }
              $target_total = $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10;

   if ($id <> 0)
      {
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

         mysqli_query($mydbh,"update bullseye set competitor_id = '$competitor_id', date = '$date', week = '$week', caliber = '$caliber', model = '$model', target_type = '$target_type', station = '$station', target_number =  '$target_number', shot_1 = '$shot_1', shot_2 = '$shot_2', shot_3 = '$shot_3', shot_4 = '$shot_4', shot_5 = '$shot_5', shot_6 = '$shot_6', shot_7 = '$shot_7', shot_8 = '$shot_8', Shot_9 = '$shot_9', shot_10 = '$shot_10', target_total = '$target_total', target_notes = '$target_notes' where id = '$id'");

      header("location:bullseye.php?competitor_id='$competitor_id'");
      }
     else
     {
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
      
      header("location:bullseye.php?competitor_id='$competitor_id'");
     }
    
    mysqli_close($mydbh);
?>
