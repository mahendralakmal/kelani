<?php
require_once ("../dbconfig.php");
if (isset($_POST["btnAdd"])) {

    $con = connection();
    $stmt=$con->prepare('INSERT INTO lecturerpayment_tbl VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
    $stmt->bind_param('sisidddddssi', $DATE,$STUDENTCOURSE,$EMPLOYEE,$STUDENTCOUNT,$SUBJECTAMOUNT,$COMMITION,$SALARY,$ALLOWANCE,$TOTAL,$PAYEDDATE,$USER,$STATUS);
										
	$DATE = $_POST['dtpDate'];
	$STUDENTCOURSE = $_POST['cmbSubject'];
	$EMPLOYEE = $_POST['cmbLecturer'];
	$STUDENTCOUNT = $_POST['txtxPresentStudents'];
	$SUBJECTAMOUNT = $_POST['txtSubjectAmount'];
	$COMMITION = $_POST['txtCommissionPercentage'];
	$SALARY = $_POST['txtSalary'];
	$ALLOWANCE = $_POST['txtAllowance'];
	$TOTAL = $_POST['txtTotal'];
	$PAYEDDATE = $_POST['dtpdate'];
    $USER = 'Admin';
    $STATUS = '1';
    $stmt->execute();
	
	
	$TempAmount = $_POST['v_txtTempAmount'];
    $query = "UPDATE tempamount_tbl SET amount = '$TempAmount'";
    $result= $con->query($query);								
	
	
	

    if($stmt->affected_rows > 0){
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
        header('Location:../lecture_payments.php');
    }else{
        echo "<script type='text/javascript'>alert('Error');</script>";
        header('Location:../lecture_payments.php');
    }
}
?>