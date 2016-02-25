<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kelani</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



<!-- Bootstrap Core CSS -->

<link href="./css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="./css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="./css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Custom Css -->
<link href="./css/formcss.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include_once './inc/top.php';
?>

<div id="wrapper">
  <div id="page-wrapper">
    <div class="container-fluid"> 
      
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"> Employee Attendance View </h1>
          <ol class="breadcrumb">
            <li> <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a> </li>
            <li class="active"> <i class="fa fa-bar-chart-o"></i> Employee Attendance View </li>
          </ol>
        </div>
      </div>
      <!-- /.row -->
      
      <form method="post"id="spform" name="spform" action="">
        <div class="row">
          <div class="col-lg-4">
            <label>Employee ID</label>
            <br/>
            <input type="text" name="txtEmployeeID" size="50"/>
            <br/>
            <label>From Date</label>
            <br/>
            <input type="date" name="dtpFromDate" readonly/>
            <br/>
            <label>To Date</label>
            <br/>
            <input type="date" name="dtpToDate" readonly/>
            <br/>
          </div>
          <div class="col-lg-4">
            <label>Attendance  History</label>
            <br/>
            <?php
                        include_once 'dbconfig.php'; //Connect to database
                        $query = "SELECT * FROM attendanceemployee_tbl;";
                        $result = getData($query);
                        echo "<table width='100%'>"; // start a table tag in the HTML
                        echo "<tr>
                        <th>DATE</th>
                        <th>ATTENDANCE</th>
                        </tr>";
                        while($row = mysqli_fetch_array($result)){//Creates a loop to loop through results
                            echo "<tr><td>" . $row['Date']. "</td><td>" . $row['Employee_tb_Emp_id'] . "</td></tr>";  //$row['index'] the index here is a field name
                        }
                        echo "</table>"; //Close the table in HTML
                        connection_close(); //Make sure to close out the database connection
                        ?>
          </div>
          <div class="col-lg-4"> </div>
        </div>
        <!-- /.row -->
        <div class="row" style="padding-left: 15px;">
          <input type="submit" value="Add" name="btnSearch"/>
          <input type="reset" value="Clear"  name="btnClear"/>
        </div>
        <!-- /.row -->
      </form>
      <div class="row"> </div>
    </div>
    <!-- /.container-fluid --> 
    
  </div>
  <!-- /#page-wrapper --> 
  
</div>
<!-- /#wrapper -->

<?php include_once './inc/footer.php'; ?>
</body>
</html>