<?php include "includes/header.php"; ?>
<div class="container">

   <h1>Memphis Roadrunners: Times</h1>

   <?php
       $sql1 = "SELECT name, runner_id FROM members";
       $m = $conn->query($sql1);

       foreach($m as $mbr) {
          echo "<h3> {$mbr['name']} </h3><br>";  // print member name
          $rid = $mbr['runner_id'];              // get member id
   ?>

   <table class="table table-bordered table-striped">
       <thead>
          <tr>
             <th>Race</th>
             <th>Time (minutes)</th>
         </tr>
       </thead>
       <tbody>
   
   <?php

  // replace this comment with a working example of the following.

      $sql = "SELECT time FROM times";

      $rows = $conn->query($sql);

      foreach ( $rows as $row ) {     // display 4 race names and times for runner_id
          echo '<tr>'; //Create a new table row
          echo "<td>" . $row['race'] . "</td>";
          echo "<td>" . $row['time'] . "</td>";
          echo '</tr>';
      } // end inner foreach loop
   ?>
   
       </tbody></table><br>
   
   <?php
    } // end outer foreach loop
   ?>

</div> <!-- end class = container --------- -->
</body></html>