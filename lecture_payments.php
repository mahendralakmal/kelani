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
<script src="js/jquery.js"></script>
<script type="text/javascript">

	$(document).ready(function(e) {
					
		$('#cmbSubject').change(function(e){
			GetNoofStudent();
		});

		function GetNoofStudent(){
			var SubjectCource  = document.getElementById("cmbSubject").value;
			var DDate = document.getElementById("dtpDate").value;
				$.ajax({
					type:'POST',
					url:"GetNoofStudents.php",
					dataType:"json",
					data:{subjectID:SubjectCource, dtDate:DDate},
					success: function(data){
					var i = 0;
					var text = "";		
					document.getElementById("txtxPresentStudents").value ="0";
					document.getElementById("txtSubjectAmount").value = "0.00";			
					while(data.length > 0){

						document.getElementById("txtxPresentStudents").value = data[i]['sCount'];
						document.getElementById("txtSubjectAmount").value = data[i]['price'];
						i++;
						$("#txtCommissionPercentage").focus();
						if(i == data.length){
							break;
						}						
					}					
				}
			});
		}		
	});
	
	function comm(){
		
		var studentx = Number(document.getElementById('txtxPresentStudents').value);
		var subjectpricex = Number(document.getElementById('txtSubjectAmount').value);
		var amountx = studentx*subjectpricex;
		
		var commitionx = Number(document.getElementById('txtCommissionPercentage').value);
		
		var salaryx = (amountx*commitionx)/100;
			document.getElementById('txtSalary').value = salaryx;
	}
	
	function paymentx(){
		var salaryxx = Number(document.getElementById('txtSalary').value);
		var allowancex = Number(document.getElementById('txtAllowance').value);
		var total = salaryxx + allowancex;
			document.getElementById('txtTotal').value = total;
		var tempAmount = Number(document.getElementById('v_txtExistingTempAmount').value);
		var newAmount = tempAmount - allowancex;
			document.getElementById('v_txtTempAmount').value = newAmount;
	}
	
</script>
</head>
<body>
<?php
include_once './inc/top.php';
include_once 'dbconfig.php';

$query = "SELECT amount FROM tempamount_tbl";
$result = getData($query);
$amount = '0';
if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while ($row = mysqli_fetch_assoc($result)) {
		
		$amount=$row['amount'];
	}
}
else{
	$amount = '0';	
}

?>
    <div id="wrapper">
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Lecturer Payment
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Lecturer Payment
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <form method="post" action="controller/lecture_paymentsController.php" target="_parent" data-toggle="validator">                
                <div class="row">
                    <div class="col-lg-4">
                    <label class="">Date</label>&nbsp;<label for="date" id="dtDate"><?php echo date("Y/m/d") ; ?></label>
                    <label class="">Time</label>&nbsp;<label for="time"><?php date_default_timezone_set("Asia/Colombo");
                    echo $today = date("H:i:s");?></label><br/>
                    <input type="hidden" name="dtpdate" value="<?php echo date('Y-m-d'); ?>"/>
                	</div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <label>Date</label><br />
                        <input type="date" name="dtpDate" size="50" required id="dtpDate" data-date-format="DD/MM/YYYY"/><br/>
                    </div>
                    <div class="col-lg-4">
                        <label>Subject</label><br/>
                            <select name="cmbSubject" id="cmbSubject">
                                <?php
                                include_once 'dbconfig.php';
                                $query = 'SELECT ssc.id, ssc.AcadamicYear, c.`Name`, ssc.Part, s.subjectname, ssc.Price
FROM subject_tbl s, student_subject_course_tbl ssc , course_tbl c
WHERE s.id = ssc.Subject_Course_tbl_Subject_tbl_id AND c.id=ssc.Subject_Course_tbl_Course_tbl_id';
                                $result = getData($query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
										echo "<option value='".$row['id']."'>".$row['AcadamicYear']." ".$row['Name']." ".$row['Part']." ".$row['subjectname']."</option>";
                                    }
                                }
                                ?>
                            </select><br />
                        
                    </div>
                    <div class="col-lg-4">
                        <label>Lecturer</label><br/>
                            <select name="cmbLecturer">
                                <?php
                                include_once 'dbconfig.php';
                                $query = "SELECT * FROM employee_tb WHERE Designation_tbl_id = '2'";
                                $result = getData($query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
										echo "<option value='".$row['Emp_id']."'>".$row['Name']."</option>";
                                    }
                                }
                                ?>
                            </select><br />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        
                        <table width="100%" class="paymenttable">
                            <tr>
                                <td width="75%">Student Count</td>
                                <td  width="25%" align="right"><input type="text" name="txtxPresentStudents" value="0" size="10" readonly id="txtxPresentStudents"/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                            <tr>
                                <td>Subject Amount</td>
                                <td align="right"><input type="text" name="txtSubjectAmount" size="10" value="0.00" readonly id="txtSubjectAmount"/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                            <tr>
                                <td>Commission Percentage</td>
                                <td align="right"><input type="text" name="txtCommissionPercentage" size="5" required id="txtCommissionPercentage" onKeyUp="comm()"/><label>&nbsp;%</label></td>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td>SALARY</td>
                                <td align="right"><input type="text"  style="font-weight:bold;" name="txtSalary" id="txtSalary" size="10" value="0.00" readonly/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                            <tr>
                                <td>Allowance / Deduction</td>
                                <td align="right"><input type="text" name="txtAllowance" id="txtAllowance" size="10" value="0.00" onKeyUp="paymentx()"/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td>TOTAL SALARY</td>
                                <td align="right"><input type="text"  style="font-weight:bold;" name="txtTotal" id="txtTotal" size="10" value="0.00" readonly/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                       <table width="100%" class="paymenttable">
                            <tr>
                                <td>Existing Amount</td>
                                <td align="right"><input type="text" id="v_txtExistingTempAmount" value="<?php echo $amount; ?>" name="v_txtExistingTempAmount" size="5" readonly/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                            <tr>
                                <td>New Temp Amount</td>
                                <td align="right"><input type="text" id="v_txtTempAmount" value="0.00" name="v_txtTempAmount" size="5" readonly/><label>&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
                <!-- /.row -->
                <div class="row" style="padding-left: 15px;">
                    <input type="submit" value="Add" name="btnAdd"/>
                    <input type="button" value="Update" name="btnUpdate"/>
                    <input type="button" value="Delete" name="btnDelete"/>
                    <input type="reset" value="Clear" name="btnClear"/>
                </div>
                <!-- /.row -->
                </form>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once './inc/footer.php'; ?>
</body></html>