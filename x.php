<?php
include_once './inc/top.php';
include_once './inc/header.php';
?>
    <div id="wrapper">
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Branch Details
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Branch Details
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="col-lg-12">
                        <form data-toggle="validator" role="">

                                <label for="inputName" class="control-label">Name</label>
                                <input type="text" class="" id="" placeholder="Cina Saffary" required>

                            <div class="form-group has-feedback">
                                <label for="inputTwitter" class="control-label">Twitter</label>
                                <div class="input-group">
                                    <span class="input-group-addon">@</span>
                                    <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
                                </div>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <span class="help-block with-errors">Hey look, this one has feedback icons!</span>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="control-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="control-label">Password</label>
                                <div class="form-group col-sm-6">
                                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                    <span class="help-block">Minimum of 6 characters</span>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="underwear" required>
                                Boxers
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="underwear" required>
                                Briefs
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                                Check yourself
                            </label>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row" style="padding-left: 15px;">
                    <form role="form" data-toggle="validator">

                            <label for="inputEmail">Email</label>
                            <input type="email" id="inputEmail">
                            <div class="help-block with-errors"></div>

                    </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include_once './inc/footer.php'; ?>
