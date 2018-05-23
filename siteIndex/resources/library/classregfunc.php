<?php
include ("connectdb.php");

// Set Class Registration to PENDING -----------------------------
$classregsql = "INSERT INTO `classesstudents`(`ClassId`, `StudentId`) VALUES (:classid, :studentid)";
$classregresult = '';
try {
  global $classregresult;
  $classId = $_POST['class'];
  $studentId = $_SESSION['user'][2];
  $pendingtrue = 1;
  $stmt = $pdo->prepare($classregsql);
  $stmt->bindValue(':classid', $classId);
  $stmt->bindValue(':studentid', $studentId);
  $stmt->execute();
  $submittedresult = $stmt->rowCount();
  if ($submittedresult == 1) {
      $classregresult = 'Succesful';
    } else {
      $classregresult = 'Failed - Please Try Again';
    }
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>
