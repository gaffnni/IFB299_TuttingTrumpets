<?php
include ("connectdb.php");

$classessql = "SELECT * FROM class";
$stmt = $pdo->prepare($classessql);
$stmt->execute();
$rows = $stmt->fetchAll();
foreach ($rows as $row) {
  $id = $row['Id'];
  echo '<tr>';
  echo '<th>#</th>';
  echo '<td id="TeacherId">'.$row['TeacherId'].'</td>';
  echo '<td id="InstrumentId">'.$row['InstrumentId'].'</td>';
  echo '<td id="ProficiencyId">'.$row['ProficiencyId'].'</td>';
  echo '<td id="Description">'.$row['Description'].'</td>';
  echo '<td id="StartDate">'.$row['StartDate'].'</td>';
  echo '<td id="Day">'.$row['Day'].'</td>';
  echo '<td id="EndDate">'.$row['EndDate'].'</td>';
  echo '<td id="Time">'.$row['Time'].'</td>';
  echo '<td id="SessionLength">'.$row['SessionLength'].'</td>';
  echo '<td id="Cost">'.$row['Cost'].'</td>';
  echo '<td id="register"><input type="radio" name="class" value="'.$id.'"/></td>';
  echo '</tr>';
}

?>
