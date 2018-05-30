<?php
include ("connectdb.php");

$currentdate = date("Y-m-d-H-i-s");
function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}


//sql statementa
$classcreategsql = "INSERT INTO `class` (`Id`, `TeacherId`, `InstrumentId`, `ProficiencyId`, `NumOfStudents`, `Description`, `StartDate`, `Day`, `EndDate`, `Time`, `SessionLength`, `Cost`, `CreateDate`, `UpdateDate`)
VALUES (NULL, :teacherId, :instrumentId, :proficiency, :maxnumstu, :description, :startdate, :day, :enddate, :timeq, :length, :cost, :createdate, NULL);";

try {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    global $stmt, $salt, $last_id;
    $teacherId = $_POST['teacherId'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $instrumentId = $_POST['instrumentId'];
    $description = $_POST['description'];
    $proficiency = $_POST['proficiency'];
    $maxnumstu = $_POST['maxnumstu'];
    $cost = $_POST['cost'];
    $time = $_POST['time'];
    $day = date('D', strtotime($startdate));
    $diff = abs(strtotime($startdate) - strtotime($startdate));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    $length = floor($days / 7);

    $stmt = $pdo->prepare($classcreategsql);
    $stmt->bindValue(':teacherId', $teacherId);
    $stmt->bindValue(':startdate', $startdate);
    $stmt->bindValue(':enddate', $enddate);
    $stmt->bindValue(':instrumentId', $instrumentId);
    $stmt->bindValue(':description', $description);
    $stmt->bindValue(':proficiency', $proficiency);
    $stmt->bindValue(':maxnumstu', $maxnumstu);
    $stmt->bindValue(':cost', $cost);
    $stmt->bindValue(':day', $day);
    $stmt->bindValue(':length', $length);
    $stmt->bindValue(':createdate', $currentdate);
    $stmt->bindValue(':timeq', $time);
    $stmt->execute();
    $submittedresult = $stmt->rowCount();
    console_log( $submittedresult );

    if ($submittedresult == 1) {
      echo "success";
      // $regsuccess = true;
      // header('Location: regresult.php');
      // echo $regsuccess;
    } else {
      // $regsuccess = false;
      // header('Location: regresult.php');
      // echo $regsuccess;
    }
    // Check if teacher registration
  }
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}


?>
