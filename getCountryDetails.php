<?php

include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT  S.country FROM statistics S ORDER BY last_name ASC"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $statistic[] = $row;
}
mysqli_close($link);

echo json_encode($statistic);
?>
