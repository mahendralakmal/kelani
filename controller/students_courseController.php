<?php
require_once ("..\dbconfig.php");
if (isset($_POST["btnAdd"])) {
    $con = connection();
	
	$STUDENTID = $_POST['txtStudentID']; //ok
	$ACADAMICYEAR = $_POST['cmbAcadamicYearYear']; //year
	$COURSE = $_POST['cmbCourse']; //ok
	$PARTID = $_POST['cmbPart']; //ok
	$cbSubject = $_POST['cbSubject'];
	$PART = $_POST["cmbPartName"]; //name OK
	$PRICE = '0'; //$row["Price"];// price
	$GRADE = 'O';
	$USER = 'Admin';
    $STATUS = '1';
	
//	mysqli_query("query here") or die(mysqli_error($con));
//	var_dump($_POST);
//	die();

	foreach ($cbSubject as $cbSubjectEach){
		
		$subjectSplit = explode("-",$cbSubjectEach);
		$PRICE = $subjectSplit[1];
		$stmt=$con->prepare('INSERT INTO student_subject_course_tbl VALUES (?,?,?,?,?,?,?,?,?,now(),?,?)');
		$stmt->bind_param('issiiisdssi', $ID,$STUDENTID,$ACADAMICYEAR,$COURSE,$PARTID,$subjectSplit[0],$PART,$PRICE,$GRADE,$USER,$STATUS);
		
		$stmt->execute();
	}	
    if($stmt->affected_rows > 0){
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
        header('Location:../students_course.php');
    }else{
        echo "<script type='text/javascript'>alert('Error');</script>";
        header('Location:../students_course.php');
    }
}
elseif(isset($_POST["btnDelete"])) {
    echo "<script type='text/javascript'>alert('Delete');</script>";
}

elseif(isset($_POST["btnClear"])) {
    echo "Yes, Clear";
}
?>

