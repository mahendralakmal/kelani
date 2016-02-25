<?php
require_once ("..\dbconfig.php");

if (isset($_POST["btnAdd"])) {

    $con = connection();
    $stmt=$con->prepare('INSERT INTO part_tbl VALUES (?,?,?,?)');
    $stmt->bind_param('isss', $ID,$NAME,$STARTDATE,$ENDDATE);
	
    $NAME = $_POST['txtPart'];
	$STARTDATE = $_POST['dtpStartDate'];
	$ENDDATE  = $_POST['dtpEndDate'];
	$ENDDATE = $_POST['dtpEndDate'];
    
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
        header('Location:../part.php');
    }else{
        echo "<script type='text/javascript'>alert('Error');</script>";
        header('Location:../part.php');
    }




}

elseif(isset($_POST["btnUpdate"])) {
    echo "<script type='text/javascript'>alert('Update');</script>";
}

elseif(isset($_POST["btnDelete"])) {
    echo "<script type='text/javascript'>alert('Delete');</script>";
}

elseif(isset($_POST["btnClear"])) {
    echo "Yes, Clear";
}
?>


