   <LINK href=/reynolds.css rel=stylesheet type=text/css>
   <script type=text/javascript src=/common.js></script>
   <script type=text/javascript src=/css.js></script>
   <script type=text/javascript src=/standardista-table-sorting.js></script>
   <title>Set up blank week</title>


<?php

     $ts = ' ';
     $tt = ' ';
     $tr = ' ';
     $ro = 'readonly';

     require ('connect.php');

     echo "<form  action=bullseye_process2.php method=post>";

        $competitor_id = '     ';
        $id = 0;
        $date = '              ';
        $week = ' ';
        $caliber = '           ';
        $model = '            ';
        $target_type =  '              ';
        $station = '                   ';
        $target_number = '             ';
        $shot_1 = ' ';
        $shot_2 = ' '; 
        $shot_3 = ' ';
        $shot_4 = ' ';
        $shot_5 = ' ';  
        $shot_6 = ' ';
        $shot_7 = ' ';
        $shot_8 = ' ';    
        $shot_9 = ' ';    
        $shot_10 = ' ';        
        $target_total = ' ';
        $target_notes = ' ';

      echo "<table>";
      echo "<tr><th>ID</th><td><input type=text name=id value=$id $ro></td></tr>\n";
      echo "<tr><th>Competitor</th><td><select name='competitor_id'>\n";
      echo "<option value=' '> </option>\n";
        $result2 = mysqli_query($mydbh,"select shooter_id, name from bullseye_shooter");
        if (!$result2)
           {
            $error = 'Error!';
            include 'error.php';
            exit();
           }

         while ($row2 = $result2->fetch_array(MYSQLI_BOTH))
         {
            $name = $row2['name'];
            $competitor_id = $row2['shooter_id'];
            $selected = ' ';
      echo "<option value='$competitor_id' $selected> $name</option>\n";
         $selected = ' ';
        }
      echo "</select></td></tr>\n";
      echo "<tr><th>Date</th><td><input type=date name=date value='$date'></td></tr>\n";
      echo "<tr><th>Week</th><td><input type=text name=week value='$week'></td></tr>\n";
      echo "<tr><th>Caliber</th><td><input type=text name=caliber value='$caliber'></td></tr>\n";
      echo "<tr><th>Model</th><td><input type=text name=model value='$model'></td></tr>\n";
      echo "<tr><th>Target Type</th><td><input type=radio name=target_type value='S' $ts>Slow Fire
                                        <input type=radio name=target_type value='T' $tt>Timed Fire
                                        <input type=radio name=target_type value='R' $tr>Rapid Fire</td></tr>\n";
      echo "<tr><th>Station</th><td><input type=text name=station value='$station'></td></tr>\n";
      echo "<tr><th>Target Number</th><td><input type=decimal name=target_number  value='$target_number'></td></tr>\n";
      echo "<tr><th>[1]</th><td><input type=text name=shot_1 size=2 value='$shot_1'></td></tr>\n";
      echo "<tr><th>[2]</th><td><input type=text name=shot_2 size=2 value='$shot_2'></td></tr>\n";
      echo "<tr><th>[3]</th><td><input type=text name=shot_3 size=2 value='$shot_3'></td></tr>\n";
      echo "<tr><th>[4]</th><td><input type=text name=shot_4 size=2 value='$shot_4'></td></tr>\n";
      echo "<tr><th>[5]</th><td><input type=text name=shot_5 size=2 value='$shot_5'></td></tr>\n";
      echo "<tr><th>[6]</th><td><input type=text name=shot_6 size=2 value='$shot_6'></td></tr>\n";
      echo "<tr><th>[7]</th><td><input type=text name=shot_7 size=2 value='$shot_7'></td></tr>\n";
      echo "<tr><th>[8]</th><td><input type=text name=shot_8 size=2 value='$shot_8'></td></tr>\n";
      echo "<tr><th>[9]</th><td><input type=text name=shot_9 size=2 value='$shot_9'></td></tr>\n";
      echo "<tr><th>[10]</th><td><input type=text name=shot_10 size=2 value='$shot_10'></td></tr>\n";
      echo "<tr><th>Total</th><td><input type=text name=target_total value='$target_total'></td></tr>\n";
      echo "<tr><th>Notes</th><td><input type=text name=target_notes value='$target_notes'></td></tr>\n";
     
      echo "</table>\n";
      echo "<br>\n";
      echo "</select><br>\n";
      echo "<input type=hidden name=id value=$id>\n";
      echo "<input type=submit name=submit value=update>\n";
      echo "</form>\n";
      echo "</body></html>\n";

?>
