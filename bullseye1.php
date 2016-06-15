<?php

 require ('connect.php');

     $ts = ' ';
     $tt = ' ';
     $tr = ' ';
     $ro = 'readonly';
     $id = $_GET['id'];
     $competitor_id = $_GET['competitor_id'];
     $action = $_GET['action'];

     echo "<LINK href=/reynolds.css rel=stylesheet type=text/css>\n";
     echo "<script type=text/javascript src=/common.js></script>\n";
     echo "<script type=text/javascript src=/css.js></script>\n";
     echo "<script type=text/javascript src=/standardista-table-sorting.js></script>\n";
     echo "<form  action=bullseye_process.php method=post>";


 if ($action =='add')
      {

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
      } 

    if ($action == 'find')
      {
         $id = mysqli_real_escape_string($mydbh,$id);

        $result = mysqli_query($mydbh,"select * from bullseye where id='$id'");
        if (!$result)
           {
            $error = 'Error!';
            include 'error.php';
            exit();
           }

         while ($row = $result->fetch_array(MYSQLI_BOTH))
         {
            $competitor_id = $row['competitor_id'];
            $date = $row['date'];
            $week = $row['week'];
            $caliber = $row['caliber'];
            $model = $row['model'];
            $target_type = $row['target_type'];
            $station = $row['station'];
            $target_number = $row['target_number'];
            $shot_1 = $row['shot_1'];
            $shot_2 = $row['shot_2'];
            $shot_3 = $row['shot_3'];
            $shot_4 = $row['shot_4'];
            $shot_5 = $row['shot_5'];
            $shot_6 = $row['shot_6'];
            $shot_7 = $row['shot_7'];
            $shot_8 = $row['shot_8'];
            $shot_9 = $row['shot_9'];
            $shot_10 = $row['shot_10'];
            $target_total = $row['target_total'];
            $target_notes = $row['target_notes'];
          
        }
      
      if ($target_type == 'S'){
           $ts = 'checked';
           $tt = ' ';
           $tr = ' ';
      }elseif ($target_type == 'T'){
           $tt = 'checked';
           $ts = ' '; 
           $tr = ' ';
      }elseif ($target_type == 'R'){
           $tr = 'checked';
           $ts = ' '; 
           $tt = ' ';
      }

      $t1m = ' ';
      $t14 = ' ';
      $t15 = ' ';
      $t16 = ' ';
      $t17 = ' ';
      $t18 = ' ';
      $t19 = ' ';
      $t110 = ' ';
      $t1x = ' ';
     
      $t2m = ' ';
      $t24 = ' ';
      $t25 = ' ';
      $t26 = ' ';
      $t27 = ' ';
      $t28 = ' ';
      $t29 = ' ';
      $t210 = ' ';
      $t2x = ' ';
  
      $t3m = ' ';
      $t34 = ' ';
      $t35 = ' ';
      $t36 = ' ';
      $t37 = ' ';
      $t38 = ' ';
      $t39 = ' ';
      $t310 = ' ';
      $t3x = ' ';
   
      $t4m = ' ';
      $t44 = ' ';
      $t45 = ' ';
      $t46 = ' ';
      $t47 = ' ';
      $t48 = ' ';
      $t49 = ' ';
      $t410 = ' ';
      $t4x = ' ';
  
      $t5m = ' ';
      $t54 = ' ';
      $t55 = ' ';
      $t56 = ' ';
      $t57 = ' ';
      $t58 = ' ';
      $t59 = ' ';
      $t510 = ' ';
      $t5x = ' ';
   
      $t6m = ' ';
      $t64 = ' ';
      $t65 = ' ';
      $t66 = ' ';
      $t67 = ' ';
      $t68 = ' ';
      $t69 = ' ';
      $t610 = ' ';
      $t6x = ' ';
  
      $t7m = ' ';
      $t74 = ' ';
      $t75 = ' ';
      $t76 = ' ';
      $t77 = ' ';
      $t78 = ' ';
      $t79 = ' ';
      $t710 = ' ';
      $t7x = ' ';
   
      $t8m = ' ';
      $t84 = ' ';
      $t85 = ' ';
      $t86 = ' ';
      $t87 = ' ';
      $t88 = ' ';
      $t89 = ' ';
      $t810 = ' ';
      $t8x = ' ';
  
      $t9m = ' ';
      $t94 = ' ';
      $t95 = ' ';
      $t96 = ' ';
      $t97 = ' ';
      $t98 = ' ';
      $t99 = ' ';
      $t910 = ' ';
      $t9x = ' ';
  
      $t10m = ' ';
      $t104 = ' ';
      $t105 = ' ';
      $t106 = ' ';
      $t107 = ' ';
      $t108 = ' ';
      $t109 = ' ';
      $t1010 = ' ';
      $t10x = ' ';


      if ($shot_1 == 'M'){
           $t1m = 'checked';
      }elseif ($shot_1 == '4'){
           $t14 = 'checked';
      }elseif ($shot_1 == '5'){
           $t15 = 'checked';
      }elseif ($shot_1 == '6'){
           $t16 = 'checked';
      }elseif ($shot_1 == '7'){
           $t17 = 'checked';
      }elseif ($shot_1 == '8'){
           $t18 = 'checked';
      }elseif ($shot_1 == '9'){
           $t19 = 'checked';
      }elseif ($shot_1 == '10'){
         $t110 = 'checked';
      }elseif ($shot_1 == 'X'){
         $t1x = 'checked';
      }
    if ($shot_2 == 'M'){
           $t2m = 'checked';
      }elseif ($shot_2 == '4'){
           $t24 = 'checked';
      }elseif ($shot_2 == '5'){
           $t25 = 'checked';
      }elseif ($shot_2 == '6'){
           $t26 = 'checked';
      }elseif ($shot_2 == '7'){
           $t27 = 'checked';
      }elseif ($shot_2 == '8'){
           $t28 = 'checked';
      }elseif ($shot_2 == '9'){
           $t29 = 'checked';
      }elseif ($shot_2 == '10'){
         $t210 = 'checked';
      }elseif ($shot_2 == 'X'){
         $t2x = 'checked';
      }
    if ($shot_3 == 'M'){
           $t3m = 'checked';
      }elseif ($shot_3 == '4'){
           $t34 = 'checked';
      }elseif ($shot_3 == '5'){
           $t35 = 'checked';
      }elseif ($shot_3 == '6'){
           $t36 = 'checked';
      }elseif ($shot_3 == '7'){
           $t37 = 'checked';
      }elseif ($shot_3 == '8'){
           $t38 = 'checked';
      }elseif ($shot_3 == '9'){
           $t39 = 'checked';
      }elseif ($shot_3 == '10'){
         $t310 = 'checked';
      }elseif ($shot_3 == 'X'){
         $t3x = 'checked';
      }
    if ($shot_4 == 'M'){
           $t4m = 'checked';
      }elseif ($shot_4 == '4'){
           $t44 = 'checked';
      }elseif ($shot_4 == '5'){
           $t45 = 'checked';
      }elseif ($shot_4 == '6'){
           $t46 = 'checked';
      }elseif ($shot_4 == '7'){
           $t47 = 'checked';
      }elseif ($shot_4 == '8'){
           $t48 = 'checked';
      }elseif ($shot_4 == '9'){
           $t49 = 'checked';
      }elseif ($shot_4 == '10'){
         $t410 = 'checked';
      }elseif ($shot_4 == 'X'){
         $t4x = 'checked';
      }
    if ($shot_5 == 'M'){
           $t5m = 'checked';
      }elseif ($shot_5 == '4'){
           $t54 = 'checked';
      }elseif ($shot_5 == '5'){
           $t55 = 'checked';
      }elseif ($shot_5 == '6'){
           $t56 = 'checked';
      }elseif ($shot_5 == '7'){
           $t57 = 'checked';
      }elseif ($shot_5 == '8'){
           $t58 = 'checked';
      }elseif ($shot_5 == '9'){
           $t59 = 'checked';
      }elseif ($shot_5 == '10'){
         $t510 = 'checked';
      }elseif ($shot_5 == 'X'){
         $t5x = 'checked';
      }
    if ($shot_6 == 'M'){
           $t6m = 'checked';
      }elseif ($shot_6 == '4'){
           $t64 = 'checked';
      }elseif ($shot_6 == '5'){
           $t65 = 'checked';
      }elseif ($shot_6 == '6'){
           $t66 = 'checked';
      }elseif ($shot_6 == '7'){
           $t67 = 'checked';
      }elseif ($shot_6 == '8'){
           $t68 = 'checked';
      }elseif ($shot_6 == '9'){
           $t69 = 'checked';
      }elseif ($shot_6 == '10'){
         $t610 = 'checked';
      }elseif ($shot_6 == 'X'){
         $t6x = 'checked';
      }
    if ($shot_7 == 'M'){
           $t7m = 'checked';
      }elseif ($shot_7 == '4'){
           $t74 = 'checked';
      }elseif ($shot_7 == '5'){
           $t75 = 'checked';
      }elseif ($shot_7 == '6'){
           $t76 = 'checked';
      }elseif ($shot_7 == '7'){
           $t77 = 'checked';
      }elseif ($shot_7 == '8'){
           $t78 = 'checked';
      }elseif ($shot_7 == '9'){
           $t79 = 'checked';
      }elseif ($shot_7 == '10'){
         $t710 = 'checked';
      }elseif ($shot_7 == 'X'){
         $t7x = 'checked';
      }
    if ($shot_8 == 'M'){
           $t8m = 'checked';
      }elseif ($shot_8 == '4'){
           $t84 = 'checked';
      }elseif ($shot_8 == '5'){
           $t85 = 'checked';
      }elseif ($shot_8 == '6'){
           $t86 = 'checked';
      }elseif ($shot_8 == '7'){
           $t87 = 'checked';
      }elseif ($shot_8 == '8'){
           $t88 = 'checked';
      }elseif ($shot_8 == '9'){
           $t89 = 'checked';
      }elseif ($shot_8 == '10'){
         $t810 = 'checked';
      }elseif ($shot_8 == 'X'){
         $t8x = 'checked';
      }
    if ($shot_9 == 'M'){
           $t9m = 'checked';
      }elseif ($shot_9 == '4'){
           $t94 = 'checked';
      }elseif ($shot_9 == '5'){
           $t95 = 'checked';
      }elseif ($shot_9 == '6'){
           $t96 = 'checked';
      }elseif ($shot_9 == '7'){
           $t97 = 'checked';
      }elseif ($shot_9 == '8'){
           $t98 = 'checked';
      }elseif ($shot_9 == '9'){
           $t99 = 'checked';
      }elseif ($shot_9 == '10'){
         $t910 = 'checked';
      }elseif ($shot_9 == 'X'){
         $t9x = 'checked';
      }
     if ($shot_10 == 'M'){
           $t10m = 'checked';
      }elseif ($shot_10 == '4'){
           $t104 = 'checked';
      }elseif ($shot_10 == '5'){
           $t105 = 'checked';
      }elseif ($shot_10 == '6'){
           $t106 = 'checked';
      }elseif ($shot_10 == '7'){
           $t107 = 'checked';
      }elseif ($shot_10 == '8'){
           $t108 = 'checked';
      }elseif ($shot_10 == '9'){
           $t109 = 'checked';
      }elseif ($shot_10 == '10'){
         $t1010 = 'checked';
      }elseif ($shot_10 == 'X'){
         $t10x = 'checked';
      }
    }

      echo "<table>";
      echo "<tr><th>ID</th><td><input type=text name=id value=$id $ro></td></tr>\n";
      echo "<tr><th>Competitor</th><td><input type=text name=competitor_id value='$competitor_id' $ro></tr> \n";
      echo "<tr><th>Date</th><td><input type=text name=date value='$date'></td></tr>\n";
      echo "<tr><th>Week</th><td><input type=text name=week value='$week'></td></tr>\n";
      echo "<tr><th>Caliber</th><td><input type=text name=caliber value='$caliber'></td></tr>\n";
      echo "<tr><th>Model</th><td><input type=text name=model value='$model'></td></tr>\n";
      echo "<tr><th>Target Type</th><td><input type=radio name=target_type value='S' $ts>Slow Fire
                                        <input type=radio name=target_type value='T' $tt>Timed Fire
                                        <input type=radio name=target_type value='R' $tr>Rapid Fire</td></tr>\n";
      echo "<tr><th>Station</th><td><input type=text name=station value='$station'></td></tr>\n";
      echo "<tr><th>Target Number</th><td><input type=decimal name=target_number  value='$target_number'></td></tr>\n";
      echo "<tr><th>[1]</th><td><input type=radio name=shot_1  id='1m' value='M' $t1m>Miss
                                 <input type=radio name=shot_1 id='11' value='4' $t14>4
                                 <input type=radio name=shot_1 id='12' value='5' $t15>5
                                 <input type=radio name=shot_1 id='13'value='6' $t16>6
                                 <input type=radio name=shot_1 id='14'value='7' $t17>7
                                 <input type=radio name=shot_1 id='15'value='8' $t18>8
                                 <input type=radio name=shot_1 id='16'value='9' $t19>9
                                 <input type=radio name=shot_1 id='17'value='10' $t110>10
                                 <input type=radio name=shot_1 id='18'value='X' $t1x>X</td></tr>\n";

      echo "<tr><th>[2]</th><td><input type=radio name=shot_2 id='2m 'value='M' $t2m>Miss
                                 <input type=radio name=shot_2 id='21 'value='4' $t24>4
                                 <input type=radio name=shot_2 id='22 'value='5' $t25>5
                                 <input type=radio name=shot_2 id='23 'value='6' $t26>6
                                 <input type=radio name=shot_2 id='24 'value='7' $t27>7
                                 <input type=radio name=shot_2 id='25 'value='8' $t28>8
                                 <input type=radio name=shot_2 id='26 'value='9' $t29>9
                                 <input type=radio name=shot_2 id='27 'value='10' $t210>10
                                 <input type=radio name=shot_2 id='28 'value='X' $t2x>X</td></tr>\n";

      echo "<tr><th>[3]</th><td><input type=radio name=shot_3 id='3m' value='M' $t3m>Miss
                                 <input type=radio name=shot_3 id='31' value='4' $t34>4
                                 <input type=radio name=shot_3 id='32' value='5' $t35>5
                                 <input type=radio name=shot_3 id='33' value='6' $t36>6
                                 <input type=radio name=shot_3 id='34' value='7' $t37>7
                                 <input type=radio name=shot_3 id='35' value='8' $t38>8
                                 <input type=radio name=shot_3 id='36' value='9' $t39>9
                                 <input type=radio name=shot_3 id='37' value='10' $t310>10
                                 <input type=radio name=shot_3 id='38' value='X' $t3x>X</td></tr>\n";

      echo "<tr><th>[4]</th><td><input type=radio name=shot_4 id='4m' value='M' $t4m>Miss
                                 <input type=radio name=shot_4 id='41' value='4' $t44>4
                                 <input type=radio name=shot_4 id='42' value='5' $t45>5
                                 <input type=radio name=shot_4 id='43' value='6' $t46>6
                                 <input type=radio name=shot_4 id='44' value='7' $t47>7
                                 <input type=radio name=shot_4 id='45' value='8' $t48>8
                                 <input type=radio name=shot_4 id='46' value='9' $t49>9
                                 <input type=radio name=shot_4 id='47' value='10' $t410>10
                                 <input type=radio name=shot_4 id='48' value='X' $t4x>X</td></tr>\n";

      echo "<tr><th>[5]</th><td><input type=radio name=shot_5 id='5m' value='M' $t5m>Miss
                                 <input type=radio name=shot_5 id='51' value='4' $t54>4
                                 <input type=radio name=shot_5 id='52' value='5' $t55>5
                                 <input type=radio name=shot_5 id='53' value='6' $t56>6
                                 <input type=radio name=shot_5 id='54' value='7' $t57>7
                                 <input type=radio name=shot_5 id='55' value='8' $t58>8
                                 <input type=radio name=shot_5 id='56' value='9' $t59>9
                                 <input type=radio name=shot_5 id='57' value='10' $t510>10
                                 <input type=radio name=shot_5 id='58' value='X' $t5x>X</td></tr>\n";

      echo "<tr><th>[6]</th><td><input type=radio name=shot_6 id='6m' value='M' $t6m>Miss
                                 <input type=radio name=shot_6 id='61' value='4' $t64>4
                                 <input type=radio name=shot_6 id='62' value='5' $t65>5
                                 <input type=radio name=shot_6 id='63' value='6' $t66>6
                                 <input type=radio name=shot_6 id='64' value='7' $t67>7
                                 <input type=radio name=shot_6 id='65' value='8' $t68>8
                                 <input type=radio name=shot_6 id='66' value='9' $t69>9
                                 <input type=radio name=shot_6 id='67' value='10' $t610>10
                                 <input type=radio name=shot_6 id='68' value='X' $t6x>X</td></tr>\n";

      echo "<tr><th>[7]</th><td><input type=radio name=shot_7 id='7m' value='M' $t7m>Miss
                                 <input type=radio name=shot_7 id='71' value='4' $t74>4
                                 <input type=radio name=shot_7 id='72' value='5' $t75>5
                                 <input type=radio name=shot_7 id='73' value='6' $t76>6
                                 <input type=radio name=shot_7 id='74' value='7' $t77>7
                                 <input type=radio name=shot_7 id='75' value='8' $t78>8
                                 <input type=radio name=shot_7 id='76' value='9' $t79>9
                                 <input type=radio name=shot_7 id='77' value='10' $t710>10
                                 <input type=radio name=shot_7 id='78' value='X' $t7x>X</td></tr>\n";

      echo "<tr><th>[8]</th><td><input type=radio name=shot_8 id='8m' value='M' $t8m>Miss
                                 <input type=radio name=shot_8 id='81' value='4' $t84>4
                                 <input type=radio name=shot_8 id='82' value='5' $t85>5
                                 <input type=radio name=shot_8 id='83' value='6' $t86>6
                                 <input type=radio name=shot_8 id='84' value='7' $t87>7
                                 <input type=radio name=shot_8 id='85' value='8' $t88>8
                                 <input type=radio name=shot_8 id='86' value='9' $t89>9
                                 <input type=radio name=shot_8 id='87' value='10' $t810>10
                                 <input type=radio name=shot_8 id='88' value='X' $t8x>X</td></tr>\n";

      echo "<tr><th>[9]</th><td><input type=radio name=shot_9 id='9m' value='M' $t9m>Miss
                                 <input type=radio name=shot_9 id='91' value='4' $t94>4
                                 <input type=radio name=shot_9 id='92' value='5' $t95>5
                                 <input type=radio name=shot_9 id='93' value='6' $t96>6
                                 <input type=radio name=shot_9 id='94' value='7' $t97>7
                                 <input type=radio name=shot_9 id='95' value='8' $t98>8
                                 <input type=radio name=shot_9 id='96' value='9' $t99>9
                                 <input type=radio name=shot_9 id='97' value='10' $t910>10
                                 <input type=radio name=shot_9 id='98' value='X' $t9x>X</td></tr>\n";

      echo "<tr><th>[10]</th><td><input type=radio name=shot_10 id='10m' value='M' $t10m>Miss
                                 <input type=radio name=shot_10 id='101' value='4' $t104>4
                                 <input type=radio name=shot_10 id='102' value='5' $t105>5
                                 <input type=radio name=shot_10 id='103' value='6' $t106>6
                                 <input type=radio name=shot_10 id='104' value='7' $t107>7
                                 <input type=radio name=shot_10 id='105' value='8' $t108>8
                                 <input type=radio name=shot_10 id='106' value='9' $t109>9
                                 <input type=radio name=shot_10 id='107' value='10' $t1010>10
                                 <input type=radio name=shot_10 id='108' value='X' $t10x>X</td></tr>\n";

      echo "<tr><th>Total</th><td><input type=text name=target_total value='$target_total'></td></tr>\n";
      echo "<tr><th>Notes</th><td><input type=text name=target_notes value='$target_notes'></td></tr>\n";
     
      echo "</table>\n";
      echo "<br>\n";
      echo "</select><br>\n";
      echo "<input type=hidden name=id value=$id>\n";
      echo "<input type=hidden name=competitor_id value=$competitor_id>\n";
      echo "<input type=submit name=submit value=update>\n";
      echo "</form>\n";
      echo "</body></html>\n";

     mysqli_close($mydbh);
?>
