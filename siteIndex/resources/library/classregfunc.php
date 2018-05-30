<?php
include ("connectdb.php");

// Set Class Registration to PENDING -----------------------------
$classcheckregsql = "SELECT `ClassId`, `StudentId` FROM `classesstudents` WHERE StudentId = :studentid AND ClassId = :classid";
$classregsql = "INSERT INTO `classesstudents`(`ClassId`, `StudentId`, `Pending`) VALUES (:classid, :studentid, :pending)";
$classregresult = '';
try {
  global $classregresult;
  $classId = $_POST['class'];
  $studentId = $_SESSION['user'][2];
  $pendingtrue = 1;
  // Check if already applied
  $stmt = $pdo->prepare($classcheckregsql);
  $stmt->bindValue(':classid', $classId);
  $stmt->bindValue(':studentid', $studentId);
  $stmt->execute();
  $checkresult = $stmt->rowCount();
  if ($checkresult >= 1) {
    $prevreg = true;
    $_SESSION["classreg"] = array($prevreg, $checkresult);
    header('Location: ../profile.php');
  } else {
  $stmt = $pdo->prepare($classregsql);
  $stmt->bindValue(':classid', $classId);
  $stmt->bindValue(':studentid', $studentId);
  $stmt->bindValue(':pending', 1);
  $stmt->execute();
  $submittedresult = $stmt->rowCount();
  if ($submittedresult == 1) {
      $classregresult = 'Succesful';
    } else {
      $classregresult = 'Failed - Please Try Again';
    }
  }
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>
