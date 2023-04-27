<?php
include 'db.php';
include 'db1.php';
?>

<style>
	@media screen and (max-width: 720px) {
		b{
			font-size: 25px;
		}
	}

	@media screen and (max-width: 480px) {
		b{
			font-size: 21px;
		}
		
	}
</style>

<div class="container-fluid">
	<form action="" id="signup">
		<div class="col-lg-12">
			<div id="msg"></div>
			<div class="row">
				<div class="form-floating col-md-6 mb-3">
					<input name="firstname" type="text" class="form-control" placeholder="First Name" required style="border-radius: 10px;">
					<label for="floatingInput">First Name</label>
				</div>
				<div class="form-floating col-md-6 mb-3">
					<input name="lastname" type="text" class="form-control" placeholder="Last Name" required style="border-radius: 10px;">
					<label for="floatingInput">Last Name</label>
				</div>
				<div class="form-floating col-md-12 mb-3">
					<input name="email" type="email" class="form-control" placeholder="Email Address" required style="border-radius: 10px;">
					<label for="floatingInput">Email Address</label>
				</div>
				<div class="form-floating col-md-12 mb-3">
					<input name="password" type="password" class="form-control" placeholder="Password" required style="border-radius: 10px;">
					<label for="floatingInput">Password</label>
				</div>
				
			</div>
			<b>Birthday</b>
			<div class="row mt-2">
				<div class="form-group col-md-4">
					<select name="month" id="month" class="custom-select" style="border-radius: 10px; height: 40px;">
						<?php
						$month = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
						for ($i = 1; $i <= 12; $i++) :
						?>
							<option value="<?php echo $i ?>" <?php $i == abs(date("m")) ? "selected" : '' ?>><?php echo ucwords($month[$i]) ?></option>
						<?php endfor; ?>
					</select>
				</div>
				<div class="form-group col-md-4">
					<select name="day" id="day" class="custom-select" style="border-radius: 10px; height: 40px;">
						<?php
						for ($i = 1; $i <= 31; $i++) :
						?>
							<option value="<?php echo $i ?>" <?php $i == abs(date("d")) ? "selected" : '' ?>><?php echo $i ?></option>
						<?php endfor; ?>
					</select>
				</div>
				<div class="form-group col-md-4">
					<select name="year" id="year" class="custom-select" style="border-radius: 10px; height: 40px;">
						<?php
						for ($i = abs(date('Y')); $i >= abs(date('Y')) - 100; $i--) :
						?>
							<option value="<?php echo $i ?>" <?php $i == abs(date("Y")) ? "selected" : '' ?>><?php echo $i ?></option>
						<?php endfor; ?>
					</select>
				</div>
			</div>
			<b>Gender</b>
			<div class="row mt-2">
				<div class="form-group col-md-6">
					<div class="d-flex w-100 justify-content-between p-1 border rounded align-items center">
						<label for="gfemale">Female</label>
						<div class="form-check d-flex w-100 justify-content-end">
							<input class="form-check-input" type="radio" checked="" id="gfemale" name="gender" value="Female">
						</div>
					</div>
				</div>
				<div class="form-group col-md-6">
					<div class="d-flex w-100 justify-content-between p-1 border rounded align-items center">
						<label for="gmale">Male</label>
						<div class="form-check d-flex w-100 justify-content-end">
							<input class="form-check-input" type="radio" id="gmale" name="gender" value="Male">
						</div>
					</div>
				</div>
			</div>

			<b>User Type</b>
			<select class="form-select mt-2" name="role" aria-label="Default select example" required style="border-radius: 10px; height: 40px;">
				<option value="member">Member</option>
				<option value="doctor">Doctor</option>
			</select>

			<div class="form-check d-flex align-items-center mt-3">
				<input class="form-check-input" type="checkbox" id="gridCheck" required>
				<label class="form-check-label ms-2" for="gridCheck">
					I Agree <a href="#">Terms and conditions</a>.
				</label>
			</div>
			<div class="row justify-content-center">
				<!-- <button class="btn btn-block btn-success col-sm-5 align-self-center"><b>Sign Up</b></button> -->
				<center><button class="btn btn-hover w-100 color-9 my-4">Sign Up</button></center>
			</div>
		</div>
	</form>
</div>
<style>
	#uni_modal .modal-footer {
		display: none
	}
</style>
<script>
	$('#signup').submit(function(e) {
		e.preventDefault()
		$('#msg').html('')
		start_load()
		$.ajax({
			url: "ajax.php?action=signup",
			method: "POST",
			data: $(this).serialize(),
			success: function(resp) {
				if (resp == 1) {
					location.replace("index.php?page=additional_info")
				} else if (resp == 2) {
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>")
					end_load()
				}
			}
		})
	})
</script>