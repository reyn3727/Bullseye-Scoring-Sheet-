<?php

 require ('connect.php');

     $cash = ' ';
     $check = ' ';
     $id = $_GET['id'];
     $action = $_GET['action'];

     echo "<LINK href=/reynolds.css rel=stylesheet type=text/css>\n";
     echo "<script type=text/javascript src=/common.js></script>\n";
     echo "<script type=text/javascript src=/css.js></script>\n";
     echo "<script type=text/javascript src=/standardista-table-sorting.js></script>\n";
     echo "<form  action=bullseye_shooter_process.php method=post>";


 if ($action =='add')
      {
        $name = '     ';
        $phone = '                 ';
        $e_mail =  '                      ';
        $fee = '                   ';
        $paid_type = '             ';
        $paid_date = ' ';
       } 

    if ($action == 'find')
      {
        $id = mysqli_real_escape_string($mydbh,$id);
        
        $result = mysqli_query($mydbh,"select * from bullseye_shooter where shooter_id='$id'");
        if (!$result)
           {
            $error = 'Error!';
            include 'error.php';
            exit();
           }
        
         while ($row = $result->fetch_array(MYSQLI_BOTH))
         {
         $name = $row['name'];
         $phone = $row['phone'];
         $e_mail = $row['e_mail'];
         $fee = $row['fee'];
         $paid_type = $row['paid_type'];
         $paid_date = $row['paid_date'];
          
          if ($paid_type == 'C'){
           $cash = 'checked';
           $check = ' ';
          }
       
          else
          {
           $check = 'checked';
           $cash = ' '; 
          }
       }
      } 
      echo "<table>";
      echo "<tr><th>ID</th><td><input type=text name=id value=$id readonly></td></tr>\n";
      echo "<tr><th>Name</th><td><input type=text name=name value='$name'></td></tr> \n";
      echo "<tr><th>Phone</th><td><input type=text name=phone value='$phone'></td></tr>\n";
      echo "<tr><th>E-Mail</th><td><input type=text name=e_mail value='$e_mail'></td></tr>\n";
      echo "<tr><th>Fee</th><td><input type=text name=fee value='$fee'></td></tr>\n";
      echo "<tr><th>Paid Type</th><td><input type=radio name=paid_type value='C' $cash>Cash
                                      <input type=radio name=paid_type value='B' $check>Check</td></tr>\n";
      echo "<tr><th>Date</th><td><input type=text name=paid_date value='$paid_date'></td></tr>\n";
     
      echo "</table>\n";
      echo "<br>\n";
      echo "</select><br>\n";
      echo "<input type=hidden name=id value=$id>\n";
      echo "<input type=submit name=submit value=update>\n";
      echo "</form>\n";
      echo "</body></html>\n";

     mysqli_close($mydbh);
?>
