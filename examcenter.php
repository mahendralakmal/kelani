<?php
include_once './inc/top.php';
include_once './inc/header.php';
?>
    <div id="wrapper">
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-">
                        <h1 class="page-header">
                            Exam&frasl;Seminar Center
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Exam&frasl;Seminar Center
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- exam/seminar center -->
                <form method="post" action="controller/examcenterController.php" target="_parent" data-toggle="validator">
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Exam&frasl;Seminar Center</label><br/>
                            <input type="text" name="txtCenter" size="40"/><br/>
                        </div>
                        <div class="col-lg-8 selecttable">
                            <?php
                            include_once 'dbconfig.php'; //Connect to database
                            $query = "SELECT `name` FROM examcenter_tbl";
                            $result =getData($query);
                            echo "<table width='100%'>"; // start a table tag in the HTML
                            echo "<tr><th>COURSE NAME</th><th>&nbsp;</th></tr>";
                            while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                echo "<tr><td>" . $row['name'] . "</td><td><input type='button' value='Edit'></td></tr>";  //$row['index'] the index here is a field name
                            }
                            echo "</table>"; //Close the table in HTML
                            connection_close(); //Make sure to close out the database connection
                            ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <input name="btnAdd" type="submit" value="Add"/>
                            <input name="btnUpdate" onclick="" type="submit" value="Update"/>
                            <input name="btnDelete" type="submit" value="Delete"/>
                            <input name="btnClear" type="reset" value="Clear"/>
                        </div>
                    </div>
                </form>
                <!-- /exam/seminar center -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once './inc/footer.php'; ?>
