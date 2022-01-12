<?php include "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">  <head></head>
<title>Index Body</title> <meta charset="utf-8">
    
    
 <table class="table table-bordered table-striped">
   <thead>
      <tr>
         <th>Runner id</th>
         <th>name</th>
         <th>age</th>
     </tr>
   </thead>
   <tbody>
    
    
<?php
   $sql = "SELECT * FROM members ";

      $rows = $conn->query($sql);

      foreach ( $rows as $row ) {     // display 4 race names and times for runner_id
          echo '<tr>'; //Create a new table row
          echo "<td>" . $row['runner_id'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['age'] . "</td>";
          echo '</tr>';
      }
?>
    
</html>