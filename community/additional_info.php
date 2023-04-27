
<?php
if (isset($_SESSION['login_status'])) {

	// if($_SESSION['login_status']== 2){
	// 	echo "<script> location.replace('index.php?page=setup_profile')</script>";
	// }
}
?>
<div class="col-lg-12">
	<div class="container py-2">
		<div class="col-md-12 mt-5 d-flex h-100 w-100 align-items-center justify-content-center">
			<div class="card" style="width:50rem">
				<div class="card-header">
					<h5 class="card-title"><b>Additional Information</b></h5>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<form action="" id="additional-info">
							<input type="hidden" name="id" value="<?php echo $_SESSION['login_id'] ?>">
							<input type="hidden" name="status" value="2">
							<b>Gender</b>
							<div class="row mt-2">
								<div class="form-floating col-md-6 mb-3">
									<input name="contact" type="text" class="form-control" placeholder="Contact" required style="border-radius: 10px;">
									<label for="floatingInput">Contact</label>
								</div>
								<!-- <div class="form-group col-md-6">
									<label for="">Contact</label>
									<input type="text" name="contact" class="form-control form-control-sm" required="">
								</div> -->
							</div>
							<b>Address</b>
							<div class="row mt-2">
								<div class="form-group col-md-6">
									<textarea id="" cols="30" rows="5" name="address" placeholder="Address" class="form-control" required style="border-radius: 10px;"></textarea>
								</div>
							</div>
							<b>Describe Yourself</b>
							<div class="row mt-2">
								<div class="form-group col-md-6">
									<!-- <label for="">Describe Yourself</label> -->
									<textarea id="" cols="30" rows="6" name="bio" class="form-control" placeholder="Describe Yourself" required style="border-radius: 10px;"></textarea>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="card-footer">
					<div class="">
						<button class="btn btn-hover w-100 color-9 my-4" form="additional-info" style="color: #fff; font-weight: 600;">Submit</button>
						<!-- <button class="btn btn btn-primary align-self-end" form="additional-info">Submit</button> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#additional-info').submit(function(e) {
		e.preventDefault()
		start_load()
		$.ajax({
			url: "ajax.php?action=signup",
			method: "POST",
			data: $(this).serialize(),
			success: function(resp) {
				if (resp == 1) {
					location.replace("index.php?page=setup_profile")
				}
			}
		})
	})
</script>