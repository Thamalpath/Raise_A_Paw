<?php
date_default_timezone_set('Asia/Calcutta');
ob_start();
session_start();
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
//include 'inc/config.php';
if (isset($_POST['B1'])) {
    include 'inc/db.php';
    $uname = str_replace("'", "''", $_POST['T1']);
    $pwd = str_replace("'", "''", $_POST['T2']);
    $stmt = $dbh->prepare("SELECT id FROM tbl_usr where un = ? and pw = ? ");
    $stmt->bindParam(1, $uname);
    $stmt->bindParam(2, $pwd);

    $stmt->execute();
    if ($stmt->rowCount() == 0) {
        $msg = "Wrong Username or Password";
    } else {
        $row = $stmt->fetch();
        session_regenerate_id();
        $_SESSION["u_id"] = $row[0];
        header('location: validate.php?r=1');
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Admin Panel</title>


    <!-- Bootstrap 5 CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS Link -->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/SigninStyle.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <style>
        .btn-hover {
		font-size: 20px;
		font-weight: 600;
		color: #fff;
		cursor: pointer;
		height: 50px;
		text-align: center;
		border: none;
		background-size: 300% 100%;
		border-radius: 15px;
		-moz-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		-webkit-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;
	}

	.btn-hover:hover {
		background-position: 100% 0;
		-moz-transition: all .4s ease-in-out;
		-o-transition: all .4s ease-in-out;
		-webkit-transition: all .4s ease-in-out;
		transition: all .4s ease-in-out;
	}

	.btn-hover:focus {
		outline: none;
	}

	.btn-hover.color-9 {
		background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
		box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
	}
    </style>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-dark fw-bolder fs-4 m-sm-3 mb-2 mt-2">Sign In to <span>RAISE A PAW ADMIN</span> </h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if (isset($msg)) {
                                        echo ("<div class='alert alert-error alert-danger'> <button type='button' class='close' data-dismiss='alert'>&times;</button><strong>$msg</strong> </div>");
                                    }
                                    ?>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress"><b style="font-size: 16px;">User Name</b></label>
                                            <div class="form-floating mb-3">
                                                <input name="T1" type="text" class="form-control" id="inputEmailAddress" placeholder="Enter User Name" required style="border-radius: 10px;">
                                                <label for="floatingInput">Enter User Name</label>
                                            </div>

                                            <!-- <input class="form-control py-4" id="inputEmailAddress" type="text" name="T1" placeholder="Enter User ID" /> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword"><b style="font-size: 16px;">Password</b></label>
                                            <div class="form-floating mb-3">
                                                <input name="T2" type="password" class="form-control" id="inputPassword" placeholder="Enter Password" required style="border-radius: 10px;">
                                                <label for="floatingInput">Enter Password</label>
                                            </div>

                                            <!-- <input class="form-control py-4" id="inputPassword" type="password" name="T2" placeholder="Enter password" /> -->
                                        </div>

                                        <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div> -->

                                        <div class="mt-4 m-4 text-end ">
                                            <a href="forget_password.php" class="text-primary fw-bold text-decoration-none">Forget Password?</a>
                                        </div>

                                        <center><button class="btn btn-hover w-100 color-9 my-1 mb-4" type="submit" value=" LOGIN " name="B1">Sign In</button></center>


                                        <!-- <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <input type="submit" value=" LOGIN " name="B1" class="btn btn-primary">
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted" style="font-size: 16px;">Copyright &copy; Raise A Paw 2022</div>
                        <div style="font-size: 16px;">
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>