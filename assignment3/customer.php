<?php
   $query = "SELECT * FROM customers";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "pick a user </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customer" value="';
        echo $row["customerid"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
   }
   
   mysqli_free_result($result);
?>
