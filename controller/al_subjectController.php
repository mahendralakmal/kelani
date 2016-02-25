<?php
include ("..\dbconfig.php");

if (isset($_POST["btnAdd"])) {

    $con = connection();
    $stmt=$con->prepare('INSERT INTO alsubject_tbl VALUES (?,?,?)');
    $stmt->bind_param('isi', $ID,$NAME,$STATUS);
	
    $NAME = $_POST['txtSubjectName'];
    $STATUS = '1';
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
        header('Location:../al_subject.php');
    }else{
        echo "<script type='text/javascript'>alert('Error');</script>";
        header('Location:../al_subject.php');
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


