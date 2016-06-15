<?php
 $type = ' ';
 $competitor = ' ';
 echo "<LINK href=/reynolds.css rel=stylesheet type=text/css>\n";
 echo "<script type=text/javascript src=/common.js></script>\n";
 echo "<script type=text/javascript src=/css.js></script>\n";
 echo "<script type=text/javascript src=/standardista-table-sorting.js></script>\n";

 echo "<form  action=bullseye_shooter.php method=post>\n";
 
 echo "<table class=sortable>
 <thead>
 <tr> 
 <th>ID</th>
 <th>Name</th>
 <th>Phone</th>
 <th>E-Mail</th>
 <th>Fee</th>
 <th>Type <div>Payment</div></th>
 <th>Date Paid</th>
 <th></th>
 <th></th>
 </tr></thead><tbody>";

  require "connect.php";

   $query="select * from bullseye_shooter";
   $result = $mydbh->query($query);     
   if (!$result) {
     printf("Query failed: %s\n", $mysqli->error);
    exit;
   }
    $row_cnt = mysqli_num_rows($result);

   while($row = $result->fetch_array(MYSQLI_BOTH))
  { 
  echo "<tr>";
  $id = $row['shooter_id'];
  $name = $row['name'];
  $competitor = $name;
  echo "<td class='number'>$id</td>\n";
  echo "<td>" . $name . "</td>\n";
  echo "<td>" . $row['phone'] . "</td>\n";
  echo "<td>" . $row['e_mail'] . "</td>\n";
  echo "<td class='number'>" . $row['fee'] . "</td>\n";
      $paid_type = $row['paid_type'];
      if ($paid_type == 'C'){
          $type = 'Cash';
        }
      else 
        {
          $type = 'Check';
        }
  echo "<td>" . $type . "</td>\n";
  echo "<td>" . $row['paid_date'] . "</td>\n";
  echo "<td><input type=button value=Update onclick= location='bullseye_shooter1.php?id=$id&action=find'></td>\n";
  echo "<td><input type=button value=Targets onclick= location='bullseye2.php?competitor_id=$id'></td>\n";
  echo "</tr>\n";
  }
 
  echo "</tbody></table>\n";
  echo "<br>\n";
  echo "<input type=button value='Add New Record' onclick= location='bullseye_shooter1.php?id=0&action=add'>\n";
  echo "<br>\n";
  echo "</select><br>\n";
  echo "<input type=\"submit\">\n";
  echo "</form>\n";
  echo "</body></html>\n";

 mysqli_close($mydbh);
?> 
