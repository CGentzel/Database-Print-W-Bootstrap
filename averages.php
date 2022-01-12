<?php include "includes/header.php"; //Cadmus Gentzel ?>

<!DOCTYPE html> 
<html lang="en">  <head></head>
<title>Index Body</title> <meta charset="utf-8">
    
    
 <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Runner</th>
         <th>Average Time (minutes)</th>
     </tr>
   </thead>
   <tbody>
    
    
<?php
   $sql = "SELECT time, AVG(time) FROM times GROUP BY time";
      $rows = $conn->query($sql);
       
       foreach ( $rows as $row ) {     // display 4 race names and times for runner_id
          echo '<tr>'; //Create a new table row
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['time'] . "</td>";
          echo '</tr>';
      }
?>
    
</html>