<!DOCTYPE html>
<html style="margin-top: 0px !important;" lang="fr-FR" prefix="og: http://ogp.me/ns#"
      class=" js csstransforms3d no-touch" ng-app="validation">

<head>
    <title>Kelani</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">


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

    <!-- Constant links START -->
    <!--<script src="configuration/constant_links.js"></script>-->
    <!-- Constant links END -->
    <!-- Sign in start -->
<!--    <script src="js/jquery.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    <script type="text/javascript">
//        $('document').ready(function()
//        {
//            /* validation */
//            $("#frmregister").validate({
//                submitHandler: submitForm
//            });
//            /* validation */
//
//            /* login submit */
//            function submitForm()
//            {
//                var data = $("#frmregister").serialize();
//
//                $.ajax({
//
//                    type : 'POST',
//                    url  : 'login_process.php',
//                    data : data,
//                    beforeSend: function()
//                    {
//                        $("#error").fadeOut();
//                        $("#btnlogin").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
//                    },
//                    success :  function(response)
//                    {
//                        if(response=="ok"){
//
//                            $("#btnlogin").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
//                            setTimeout(' window.location.href = "index.php"; ',4000);
//                        }
//                        else{
//
//                            $("#error").fadeIn(1000, function(){
//                                $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
//                                $("#btnlogin").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
//                            });
//                        }
//                    }
//                });
//                return false;
//            }
//            /* login submit */
//        });
//        $(document).ready(function () {
//            $("#btnlogin").click(function () {
//                var username = $("#username").val();
//                var password = $("#password").val();
//                var data = 'username='+username+'&password='+password;
//                console.log(data);
//                console.log('after serialize');
//                $.ajax({
//                    type: "POST",
//                    url: './controller/home_signin.php',
//                    data: data,
//                    success: function (responce) {
//                        console.log('ela');
//                        if (responce == "ok") {
//                            <?php //header('Location: index.php'); ?>
//                        } else {
//                            console.log('yyyy');
//                        }
//                    }
//
//                });
//            });
//        });
    </script>
</head>
<?php ?>
<body>
<div id="">
    <div id="">

        <div class="">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    &nbsp;
                </div>
                <div class="col-lg-3" style="background-color:#FFF;	">
                    <h2 class="page-header">
                        Kelani Institute Management System
                    </h2>

                    <h3 class="page-header">
                        LOGIN
                    </h3>

                    <form id="frmregister" name="frmregister" method="post">

                        </label>USERNAME</label><br>
                        <input type="text" name="username" id="username"><br>

                        <label>PASSWORD</label><br>
                        <input type="password" name="password" id="password"><br>

                        <div id="errortext" class="signin_validation">www</div>
                        <input type="submit" name="btnlogin" id="btnlogin" value="LOGIN">
                        <input type="reset" value="RESET">


                    </form>
                </div>
                <div class="col-lg-3">


                </div>


            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<?php include_once './inc/footer.php'; ?>

</body>
</html>