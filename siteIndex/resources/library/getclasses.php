<?php
include ("connectdb.php");

$classessql = "SELECT * FROM openclasses";
$stmt = $pdo->prepare($classessql);
$stmt->execute();
$rows = $stmt->fetchAll();
foreach ($rows as $row) {
  echo '<tr>';
  echo '<th>#</th>';
  echo '<td id="title">'.$row['Title'].'</td>';
  echo '<td id="desc">'.$row['Description'].'</td>';
  echo '<td id="difficulty">'.$row['DifficultyLevel'].'</td>';
  echo '<td id="teacher">'.$row['Teacher'].'</td>';
  echo '<td id="duration">'.$row['SessionLength'].'</td>';
  echo '</tr>';
}

?>
