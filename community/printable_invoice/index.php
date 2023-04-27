<?php session_start() ?>
<?php 
  if(!isset($_SESSION['login_id']))
  include '../header.php';
?>
<?php
require "config.php";
?>

<html>

<head>
<title>Raise A Paw | Send Receipt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel='stylesheet' href='https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css'>
	<script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>

	<!-- Bootstrap 5 CDN Link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

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

		.btn-hover.color-11 {
			background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
			box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
		}

		body {
			background: rgb(189, 146, 146);
			background: linear-gradient(180deg, rgba(189, 146, 146, 1) 0%, rgba(255, 224, 224, 1) 62%, rgba(224, 250, 255, 1) 100%);

		}

		.text {
			color: #080808;
			font-size: 26px;
			font-weight: 600;
			font-family: 'Poppins';
		}

		.text1 {
			color: #fff;
			font-size: 50px;
			font-weight: 600;
			font-family: 'Poppins';
		}

		.text2 {
			color: #080808;
			font-size: 17px;
			font-weight: 600;
			font-family: 'Poppins';
		}

		thead {
			color: #fff;
			font-size: 21px;
			font-weight: 600;
			font-family: 'Poppins';
		}
	</style>
</head>

<body>
	<?php include '../topbar.php';?>

	<div class='container pt-5'>
		<h1 class='text-center text1'>Invoice Details</h1>
		<hr>
		<?php


		if (isset($_POST["submit"])) {

			// $name = $_POST['name'];

			$invoice_no = $_POST["invoice_no"];
			$invoice_date = date("Y-m-d", strtotime($_POST["invoice_date"]));
			$cname = mysqli_real_escape_string($con, $_POST["cname"]);
			$caddress = mysqli_real_escape_string($con, $_POST["caddress"]);
			$Email = mysqli_real_escape_string($con, $_POST["Email"]);
			$Phone = mysqli_real_escape_string($con, $_POST["Phone"]);
			$acc = mysqli_real_escape_string($con, $_POST["acc"]);
			$acc_name = mysqli_real_escape_string($con, $_POST["acc_name"]);
			$bank = mysqli_real_escape_string($con, $_POST["bank"]);
			$branch = mysqli_real_escape_string($con, $_POST["branch"]);
			$grand_total = mysqli_real_escape_string($con, $_POST["grand_total"]);
			

			$sql = "insert into invoice (INVOICE_NO,INVOICE_DATE,CNAME,CADDRESS,Email,Phone,acc,acc_name,bank,branch,GRAND_TOTAL) values ('{$invoice_no}','{$invoice_date}','{$cname}','{$caddress}','{$Email}','{$Phone}','{$acc}','{$acc_name}','{$bank}','{$branch}','{$grand_total}') ";
			if ($con->query($sql)) {
				$sid = $con->insert_id;
				$sql2 = "insert into invoice_products (SID,PNAME,PRICE,TOTAL) values ";
				$rows = [];
				for ($i = 0; $i < count($_POST["pname"]); $i++) {
					$pname = mysqli_real_escape_string($con, $_POST["pname"][$i]);
					$price = mysqli_real_escape_string($con, $_POST["price"][$i]);
					// $qty=mysqli_real_escape_string($con,$_POST["qty"][$i]);
					$total = mysqli_real_escape_string($con, $_POST["total"][$i]);
					$rows[] = "('{$sid}','{$pname}','{$price}','{$total}')";
					//'{$qty}',
				}
				$sql2 .= implode(",", $rows);
				if ($con->query($sql2)) {
					echo "<div class='alert alert-info'><b>Invoice Added Successfully. <a href='print.php?id={$sid}' target='_BLANK'>Click</a> here to Download Invoice</b></div>";
					// echo "<button><a href='file-upload.php'>share</a></button>";

					echo "
					<form action='file-upload.php' method='post' enctype='multipart/form-data'>
						<div class='row'>
							<div class='col-md-5 mt-3'>
								<div class='form-floating mb-4'>
									<input name='title' type='text' class='form-control' placeholder='Invoice Name' required style='border-radius: 10px;'>
									<label for='floatingInput'>Invoice Name</label>
								</div>
							</div>
							<div class='col-md-5'>
								<label class='text2 mr-3'>File Upload</label>
								<span>
								<input class='form-control' type='file' id='formFile' name='file'>
								</span>
							</div>
							<div class='col-md-2'>
								<input type='submit' name='submit' class='btn btn-hover w-100 color-5 my-4 mt-3' style='color: #fff; font-weight: 600;'>	
							</div>
						</div>
					</form>";
				} else {
					echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
				}
			} else {
				echo "<div class='alert alert-danger'>Invoice Added Failed.</div>";
			}
		}
		?>


		<form method='post' action='index.php' autocomplete='off'>
			<div class='row mt-5'>
				<div class='col-md-6'>
					<h5 class='text mb-3'>Doctor Details</h5>
					<div class="form-floating mb-4">
						<input name="cname" type="text" class="form-control" placeholder="Name" required style="border-radius: 10px;">
						<label for="floatingInput">Name</label>
					</div>
					<div class="form-floating mb-4">
						<input name="caddress" type="text" class="form-control" placeholder="Address" required style="border-radius: 10px;">
						<label for="floatingInput">Address</label>
					</div>
					<div class="form-floating mb-4">
						<input name="Email" type="text" class="form-control" placeholder="Email Address" required style="border-radius: 10px;">
						<label for="floatingInput">Email Address</label>
					</div>
					<div class="form-floating mb-4">
						<input name="Phone" type="text" class="form-control" placeholder="Tel No" required style="border-radius: 10px;">
						<label for="floatingInput">Tel No</label>
					</div>
					<!-- <div class='form-group'>
						<label>Name</label>
						<input type='text' name='cname' required class='form-control'>
					</div>
					<div class='form-group'>
						<label>Address</label>
						<input type='text' name='caddress' required class='form-control'>
					</div>
					<div class='form-group'>
						<label>Email</label>
						<input type='text' name='Email' required class='form-control'>
					</div>

					<div class='form-group'>
						<label>Phone</label>
						<input type='text' name='Phone' required class='form-control'>
					</div> -->
				</div>
				<div class='col-md-6'>
					<h5 class='text mb-3'>Bank Details</h5>
					<div class="form-floating mb-4">
						<input name="acc" type="text" class="form-control" placeholder="Name" required style="border-radius: 10px;">
						<label for="floatingInput">Bank Account Number</label>
					</div>
					<div class="form-floating mb-4">
						<input name="acc_name" type="text" class="form-control" placeholder="Account Name" required style="border-radius: 10px;">
						<label for="floatingInput">Account Name</label>
					</div>
					<div class="form-floating mb-4">
						<input name="bank" type="text" class="form-control" placeholder="Bank Name" required style="border-radius: 10px;">
						<label for="floatingInput">Bank Name</label>
					</div>
					<div class="form-floating mb-4">
						<input name="branch" type="text" class="form-control" placeholder="Branch" required style="border-radius: 10px;">
						<label for="floatingInput">Branch</label>
					</div>
					<!-- <div class='form-group'>
						<label>Bank account number</label>
						<input type='text' name='acc' required class='form-control'>
					</div>

					<div class='form-group'>
						<label>acc_name</label>
						<input type='text' name='acc_name' required class='form-control'>
					</div>

					<div class='form-group'>
						<label>Bank name</label>
						<input type='text' name='bank' required class='form-control'>
					</div>
					<div class='form-group'>
						<label>Branch name</label>
						<input type='text' name='branch' required class='form-control'>
					</div> -->
				</div>
			</div>
			<div class="row">
				<div class='col-md-6'>
					<h5 class='text mb-3 mt-4'>Invoice Details</h5>
					<div class="form-floating mb-4">
						<input name="invoice_no" type="text" class="form-control" placeholder="Invoice Details" required style="border-radius: 10px;">
						<label for="floatingInput">Invoice Details</label>
					</div>
					<div class="form-floating mb-4">
						<input name="invoice_date" type="text" id='date' class="form-control" placeholder="Date" required style="border-radius: 10px;">
						<label for="floatingInput">Invoice Date</label>
					</div>
					<!-- <h5 class='text mb-3'>Invoice Details</h5>
					<div class='form-group'>
						<label>Invoice No</label>
						<input type='text' name='invoice_no' required class='form-control'>
					</div>
					<div class='form-group'>
						<label>Invoice Date</label>
						<input type='text' name='invoice_date' id='date' required class='form-control'>
					</div> -->
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<h5 class='text mb-3 mt-4'>Service Details</h5>
					<table class='table table-bordered table-hover'>
						<thead class="table-dark">
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id='product_tbody'>
							<tr>
								<td><input type='text' required name='pname[]' class='form-control'></td>
								<td><input type='text' required name='price[]' class='form-control price'></td>
								<td><input type='text' required name='total[]' class='form-control total'></td>
								<td><input type='button' value='x' class="btn btn-hover w-25 color-11 btn-row-remove" style="color: #fff; font-weight: 600;"></td>
								<!-- <td><input type='button' value='x' class='btn btn-danger btn btn-row-remove'> </td> -->
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td><input type='button' value='+ Add Row' class="btn btn-hover w-100 color-9" id='btn-add-row' style="color: #fff; font-weight: 600;"></td>
								<!-- <td><input type='button' value='+ Add Row' class='btn btn-primary btn-sm' id='btn-add-row'></td> -->
								<td colspan='2' class='text-right'>Total</td>
								<td><input type='text' name='grand_total' id='grand_total' class='form-control' required></td>
							</tr>
						</tfoot>
					</table>
					<input type='submit' name='submit' value='Save Invoice' class="btn btn-hover w-25 color-5 my-4 float-right mt-3" style="color: #fff; font-weight: 600;">
					<!-- <input type='submit' name='submit' value='Save Invoice' class='btn btn-success float-right mt-3'> -->
				</div>
			</div>
		</form>
	</div>
	<script>
		$(document).ready(function() {
			$("#date").datepicker({
				dateFormat: "dd-mm-yy"
			});

			$("#btn-add-row").click(function() {
				var row = "<tr> <td><input type='text' required name='pname[]' class='form-control'></td> <td><input type='text' required name='price[]' class='form-control price'></td>  <td><input type='text' required name='total[]' class='form-control total'></td> <td><input type='button' value='x' class='btn btn-hover w-25 color-11 btn-row-remove' style='color: #fff; font-weight: 600;'></td> </tr>";
				$("#product_tbody").append(row);
			});

			$("body").on("click", ".btn-row-remove", function() {
				if (confirm("Are You Sure?")) {
					$(this).closest("tr").remove();
					grand_total();
				}
			});

			$("body").on("keyup", ".price", function() {
				var price = Number($(this).val());
				// var qty=Number($(this).closest("tr").find(".qty").val());
				$(this).closest("tr").find(".total").val(price++);
				grand_total();
			});

			$("body").on("keyup", ".qty", function() {
				var qty = Number($(this).val());
				var price = Number($(this).closest("tr").find(".price").val());
				$(this).closest("tr").find(".total").val(price++);
				grand_total();
			});

			function grand_total() {
				var tot = 0;
				$(".total").each(function() {
					tot += Number($(this).val());
				});
				$("#grand_total").val(tot);
			}
		});
	</script>
</body>

</html>