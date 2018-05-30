<?php
include ("connectdb.php");

// Student Classes
if ($_SESSION["user"][0] == 'Student') {
  $classessql = "Select CONCAT(ta.FirstName, ' ', ta.LastName) AS TeacherName, i.Name As Instrument, p.Name As Proficiency, c.NumOfStudents, c.Description, c.StartDate, c.Day, c.EndDate, c.Time, c.SessionLength, c.Cost, c.Id
  From class c
  Inner Join instruments i on c.InstrumentId = i.Id
  Inner Join teachersaccounts ta on c.TeacherId = ta.Id
  Inner Join proficiency p on c.ProficiencyId = p.Id
  ";

  $stmt = $pdo->prepare($classessql);
  $stmt->execute();
  $rows = $stmt->fetchAll();
  foreach ($rows as $row) {
    $id = $row['Id'];
    echo '<tr>';
    echo '<td id="TeacherId">'.$row['TeacherName'].'</td>';
    echo '<td id="InstrumentId">'.$row['Instrument'].'</td>';
    echo '<td id="ProficiencyId">'.$row['Proficiency'].'</td>';
    echo '<td id="Description">'.$row['Description'].'</td>';
    echo '<td id="StartDate">'.$row['StartDate'].'</td>';
    echo '<td id="Day">'.$row['Day'].'</td>';
    echo '<td id="EndDate">'.$row['EndDate'].'</td>';
    echo '<td id="Time">'.$row['Time'].'</td>';
    echo '<td id="SessionLength">'.$row['SessionLength'].'</td>';
    echo '<td id="Cost">'.'$'.$row['Cost'].'</td>';
    echo '<td id="register"><input type="radio" name="class" value="'.$id.'"/></td>';
    echo '</tr>';
  }
}

// Teacher Classes

if ($_SESSION["user"][0] == 'Teacher') {
  $classessql = "Select i.Name As Instrument, p.Name As Proficiency, c.NumOfStudents, c.Description, c.StartDate, c.Day, c.EndDate, c.Time, c.SessionLength, c.Cost, c.Id
  From class c
  Inner Join instruments i on c.InstrumentId = i.Id
  Inner Join teachersaccounts ta on c.TeacherId = ta.Id
  Inner Join proficiency p on c.ProficiencyId = p.Id
  ";

  $stmt = $pdo->prepare($classessql);
  $stmt->execute();
  $rows = $stmt->fetchAll();
  foreach ($rows as $row) {
    if ($_SESSION["user"][2] == $row['Id']) {
      $id = $row['Id'];
      echo '<tr>';
      echo '<td id="title">'.$row['Instrument'].'</td>';
      echo '<td id="desc">'.$row['Description'].'</td>';
      echo '<td id="proficiency">'.$row['Proficiency'].'</td>';
      echo '<td id="date">'.$row['Day'].'</td>';
      echo '<td id="numstu">'.$row['NumOfStudents'].'</td>';

      // -------------------------------------------------------------
      // This table contains the list of classes a teacher has Created
      // Each row contains details about the class.
      // The Pending column contains the number of students who have have applied but not yet been approved.
      // echo '<td id="pending">'.$row['Pending'].'</td>';
      //
      // Approved Coloumn. Total number of students approved for the class
      // echo '<td id="approved">'.$row['Approved'].'</td>';
      // ----------------------------------------------------------------

      echo '<td id="managestu"><input type="button" class="btn btn-primary" value="Manage Class"/></td>';
      echo '</tr>';
    }
  }
}




?>
