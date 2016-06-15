<?php
 $type = ' ';
 $week = $_GET['week'];
 echo "<LINK href=/reynolds.css rel=stylesheet type=text/css>\n";
 echo "<script type=text/javascript src=/common.js></script>\n";
 echo "<script type=text/javascript src=/css.js></script>\n";
 echo "<script type=text/javascript src=/standardista-table-sorting.js></script>\n";

 echo "<form  action=bullseye.php method=GET>\n";
 echo "<table class=sortable>
 <thead>
 <tr>
 <th>ID</th>
 <th>Competitor</th>
 <th>Date</th>
 <th>Week</th>
 <th>Caliber</th>
 <th>Model</th>
 <th>Target Type</th>
 <th>Station</th>
 <th>Number<div>Target</div></th>
 <th>[1]</th>
 <th>[2]</>
 <th>[3]</>
 <th>[4] </>
 <th>[5]</>
 <th>[6]</>
 <th>[7]</>
 <th>[8]</>
 <th>[9]</>
 <th>[10]</>
 <th>Total</th>
 <th>Notes</th>
 <th>    </th>
 </tr></thead><tbody>";

  require "connect.php";

  if ($week == 0){
      $query="select bullseye.*, name from bullseye left outer join bullseye_shooter on shooter_id = competitor_id order by week desc, target_number";
      $result = $mydbh->query($query);     
      if (!$result) {
       printf("Query failed: %s\n", $mysqli->error);
      exit;
     }
      $row_cnt = mysqli_num_rows($result);

      while($row = $result->fetch_array(MYSQLI_BOTH))

       {
        echo "<tr>";
        $id = $row['id'];
        echo "<td class='number'>$id</td>\n";
        $competitor_id = $row['competitor_id'];
        echo "<td>" . $row['name'] . "</td>\n";
        echo "<td>" . $row['date'] . "</td>\n";
        echo "<td class='center'>" . $row['week'] . "</td>\n";
        echo "<td>" . $row['caliber'] . "</td>\n";
        echo "<td>" . $row['model'] . "</td>\n";
        $target_type = $row['target_type'];
          if ($target_type == 'S'){
            $type = 'Slow Fire';
          }elseif ($target_type == 'T'){
            $type = 'Timed Fire';
          }elseif ($target_type == 'R'){
            $type = 'Rapid Fire';
          }
        echo "<td>" . $type . "</td>\n";
        echo "<td class='center'>" . $row['station'] . "</td>\n";
        echo "<td class='center'>" . $row['target_number'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_1'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_2'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_3'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_4'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_5'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_6'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_7'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_8'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_9'] . "</td>\n";
        echo "<td class='numeric'>" . $row['shot_10'] . "</td>\n";
        echo "<td class='numeric'>" . $row['target_total'] . "</td>\n";
        echo "<td>" . $row['target_notes'] . "</td>\n";

        $_POST['action'] = 'find';
        $_POST['id'] = $id; 
        echo "<td><input type=button value=Update onclick= location='bullseye1.php?id=$id&competitor_id=$competitor_id&action=find'></td>\n";
        echo "</tr>\n";
       }       
       }else{

        $week=mysqli_real_escape_string($mydbh,$week);

        $result = mysqli_query($mydbh,"select bullseye.*, name from bullseye left outer join bullseye_shooter on shooter_id = competitor_id where week = '$week'"); 
        if (!$result)
           {
            $error = 'Error!';
            include 'error.php';
            exit();
           }
        while ($row = $result->fetch_array(MYSQLI_BOTH))
        {
        echo "<tr>";
 	$id = $row['id'];
 	echo "<td class='number'>$id</td>\n";
	$competitor_id = $row['competitor_id'];
 	echo "<td>" . $row['name'] . "</td>\n";
	echo "<td>" . $row['date'] . "</td>\n";
	echo "<td class='center'>" . $row['week'] . "</td>\n";
  	echo "<td>" . $row['caliber'] . "</td>\n";
  	echo "<td>" . $row['model'] . "</td>\n";
      	$target_type = $row['target_type'];
     	 if ($target_type == 'S'){
            $type = 'Slow Fire';
      	 }elseif ($target_type == 'T'){
            $type = 'Timed Fire';
         }elseif ($target_type == 'R'){
            $type = 'Rapid Fire';
         }
  	echo "<td>" . $type . "</td>\n";
  	echo "<td class='center'>" . $row['station'] . "</td>\n";
  	echo "<td class='center'>" . $row['target_number'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_1'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_2'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_3'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_4'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_5'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_6'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_7'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_8'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_9'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['shot_10'] . "</td>\n";
  	echo "<td class='numeric'>" . $row['target_total'] . "</td>\n";
  	echo "<td>" . $row['target_notes'] . "</td>\n";

  	$_POST['action'] = 'find';
  	$_POST['id'] = $id; 
  	echo "<td><input type=button value=Update onclick= location='bullseye1.php?id=$id&competitor_id=$competitor_id&action=find'></td>\n";
  	echo "</tr>\n";
       }
     }
  	echo "</tbody></table>\n";
  	echo "<br>\n";
  	echo "<table><tr><th>Show Week</th><td><input name=week size=2 value=$week></td></tr></table><br>\n";
  	echo "<input type=button value='Add New Record' onclick= location='bullseye1.php?id=0&action=add'>\n";
  	echo "<br>\n";
  	echo "</select><br>\n";
  	echo "<input type=\"submit\">\n";
  	echo "</form>\n";
  	echo "</body></html>\n";

 mysqli_close($mydbh);
?> 
