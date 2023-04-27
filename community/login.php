<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'db.php';
include 'db1.php';
?>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Login | Raise A Paw</title>

	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS Link -->
	<!-- <link rel="stylesheet" href="assets/css/SigninStyle.css"> -->

	<?php include('./header.php'); ?>
	<?php
	if (isset($_SESSION['login_id']))
		header("location:index.php?page=home");

	?>

</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

	body {
		/* padding: 0 0 100px; */
		background-image: url("assets/images/image1.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		min-height: 100%;
		width: 100%;
		height: calc(100%);
		position: fixed;
		top: 0;
		left: 0
			/*background: #007bff;*/
	}

	main#main {
		width: 100%;
		height: calc(100%) !important;
		display: flex;
	}

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

	.btn-hover.color-5 {
		background-image: linear-gradient(to right, #0ba360, #3cba92, #30dd8a, #2bb673);
		box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
	}

	.btn-hover.color-9 {
		background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
		box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
	}

	@media screen and (max-width: 720px) {
		b{
			font-size: 2.8rem;
		}

		h3{
			font-size: 1.8rem;
		}
	}

	@media screen and (max-width: 480px) {
		b{
			font-size: 2rem;
		}

		h3{
			font-size: 1.2rem;
		}
		
	}
</style>

<body class="bg-light">


	<main id="main">
		<div class="col-md-5 offset-md-1">
			<div class="d-flex justify-content-center align-items-center w-100 h-100">
				<span class="m-4 p-2">
					<h1 class="text-primary" style="font-size: 4rem"><b style="font-family: 'Poppins';"><i class="fa fa-paw"></i> Raise <br>A Paw</b></h1>
					<br>
					<h3 style="color: white;">Saving one animal won't change the world, but it will change the world for that one animal.</h3>
					<br>
					<br>
				</span>
			</div>
		</div>
		<div class="col-md-6 d-flex justify-content-center">
			<div id="login-center" class="row justify-content-center align-self-center w-100" style="background: transparent;">
				<div class="card col-sm-7 pt-3 pb-3" style="border-radius: 20px;">
					<div class="card-body">
						<form id="login-form">
							<h3 class="fw-bolder fs-4 mb-4" style="font-family: 'Poppins';">Sign In to <span class="text-danger">RAISE A PAW</span> </h3>
							<div class="form-floating mb-3">
								<input name="email" type="text" class="form-control" id="email" placeholder="name@example.com" required style="border-radius: 10px;">
								<label for="floatingInput">Email address</label>
							</div>
							<div class="form-floating">
								<input name="password" type="password" class="form-control" id="password" placeholder="Password" required style="border-radius: 10px;">
								<label for="floatingPassword ">Password</label>
							</div>
							<div class="mt-3 m-3 text-end ">
								<a href="ForgetPassword.php" class="text-primary fw-bold text-decoration-none">Forget Password?</a>
							</div>

							<center><button class="btn btn-hover w-100 color-9 my-1">Sign In</button></center>
							<hr>
							<center><button type="button" class="btn btn-hover w-100 color-5 my-1" type="button" id="new_account"> New Account</a></button></center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<div class="modal fade" id="uni_modal" role='dialog'>
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title"></h5>
					<button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><b>&times;</b></span>
					</button>
				</div>
				<div class="modal-body">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- PAGE assets/plugins -->
<!-- jQuery Mapael -->
<script src="assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="assets/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard2.js"></script>
<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jszip/jszip.min.js"></script>
<script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
	window.start_load = function() {
		$('body').prepend('<div id="preloader2"></div>')
	}
	window.end_load = function() {
		$('#preloader2').fadeOut('fast', function() {
			$(this).remove();
		})
	}
	window.viewer_modal = function($src = '') {
		start_load()
		var t = $src.split('.')
		t = t[1]
		if (t == 'mp4') {
			var view = $("<video src='" + $src + "' controls autoplay></video>")
		} else {
			var view = $("<img src='" + $src + "' />")
		}
		$('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
		$('#viewer_modal .modal-content').append(view)
		$('#viewer_modal').modal({
			show: true,
			backdrop: 'static',
			keyboard: false,
			focus: true
		})
		end_load()

	}
	window.uni_modal = function($title = '', $url = '', $size = "") {
		start_load()
		$.ajax({
			url: $url,
			error: err => {
				console.log()
				alert("An error occured")
			},
			success: function(resp) {
				if (resp) {
					$('#uni_modal .modal-title').html($title)
					$('#uni_modal .modal-body').html(resp)
					if ($size != '') {
						$('#uni_modal .modal-dialog').addClass($size)
					} else {
						$('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
					}
					$('#uni_modal').modal({
						show: true,
						backdrop: 'static',
						keyboard: false,
						focus: true
					})
					end_load()
				}
			}
		})
	}
	window._conf = function($msg = '', $func = '', $params = []) {
		$('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
		$('#confirm_modal .modal-body').html($msg)
		$('#confirm_modal').modal('show')
	}
	window.alert_toast = function($msg = 'TEST', $bg = 'success', $pos = '') {
		var Toast = Swal.mixin({
			toast: true,
			position: $pos || 'top-end',
			showConfirmButton: false,
			timer: 5000
		});
		Toast.fire({
			icon: $bg,
			title: $msg
		})
	}
	$('#new_account').click(function() {
		uni_modal("<h3 class='text-dark fw-bolder fs-4 m-3'>Sign Up to <span>RAISE A PAW</span> </h3>", "signup.php")
		// <h3 class="text-dark fw-bolder fs-4 mb-4">Sign Up to <span>RAISE A PAW</span> </h3>
	})
	$('#login-form').submit(function(e) {
		e.preventDefault()
		start_load()
		if ($(this).find('.alert-danger').length > 0)
			$(this).find('.alert-danger').remove();
		$.ajax({
			url: 'ajax.php?action=login',
			method: 'POST',
			data: $(this).serialize(),
			error: err => {
				console.log(err)
				end_load()
			},
			success: function(resp) {
				if (resp == 1) {
					location.href = 'index.php';
				} else {
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					end_load()
				}
			}
		})
	})
	$('.number').on('input keyup keypress', function() {
		var val = $(this).val()
		val = val.replace(/[^0-9 \,]/, '');
		val = val.toLocaleString('en-US')
		$(this).val(val)
	})
</script>

</html>