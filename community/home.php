<?php
include 'db.php';
include 'db1.php';
?>

<?php
if (isset($_POST["acc"])) {
	$stmt = $dbh->prepare("update posts set status =0 where id = $_POST[id]");

	$stmt->execute();
}
if (isset($_POST["accptd"])) {
	$stmt = $dbh->prepare("update posts set status =1 where id = $_POST[id]");
	// $stmt = $dbh->prepare("update posts set accept ={$_SESSION['login_id']} where id = $_POST[id]");
	$stmt->execute();
}
?>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

	.left-panel {
		width: calc(20%);
		height: calc(100% - 3rem);
		overflow: auto;
		position: fixed;
	}

	.center-panel {
		left: calc(21%);
		width: calc(55%);
		height: calc(100% - 3rem);
		overflow: auto;
		position: fixed;
	}

	.side-nav:hover,
	.post-link:hover {
		background: #00000026
	}

	.btn-hover {
		font-size: 16px;
		font-weight: 600;
		color: #fff;
		cursor: pointer;
		height: 40px;
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

	@media screen and (max-width: 720px) {
		.left-panel {
			width: calc(30%);
			height: calc(100% - 3rem);
		}

		.center-panel {
			left: calc(25%);
			width: calc(75%);
			height: calc(100% - 3rem);
		}
	}

	@media screen and (max-width: 480px) {
		.left-panel .side-nav span b {
			display: none;
		}

		.left-panel {
			width: calc(15%);
			height: calc(100% - 3rem);
		}

		.center-panel {
			left: calc(15%);
			width: calc(85%);
			height: calc(100% - 3rem);
		}
		.gallery{
			width: 100%;
			height: 100%;
		}
	}
</style>
<div class="d-flex w-100 h-100">
	<div class="left-panel mt-3">
		<a href="index.php?page=profile" class="d-flex py-2 px-1 text-dark side-nav rounded">
			<?php if (isset($_SESSION['login_profile_pic']) && !empty($_SESSION['login_profile_pic'])) : ?>
				<div class="rounded-circle  mr-1" style="width: 40px;height: 40px;top:-5px;left: -40px">
					<img src="assets/uploads/<?php echo $_SESSION['login_profile_pic'] ?>" class="image-fluid image-thumbnail rounded-circle mt-2" alt="" style="max-width: calc(100%);height: calc(100%);">
				</div>
			<?php else : ?>
				<span class="fa fa-user mr-2" style="width: 30px;height: 30px;top:-5px;left: -40px"></span>
			<?php endif; ?>
			<span class="ml-3 mt-3"><b style="font-size: 18px; font-family: 'Poppins'"><?php echo ucwords($_SESSION['login_firstname'] . ' ' . $_SESSION['login_lastname']) ?></b></span>
		</a>
		<hr>
	</div>
	<div class="center-panel py-3 px-2">
		<div class="container-fluid">
			<div class="col-md-12 mt-4">
				<div class="card card-widget">
					<div class="card-body">
						<div class="container-fluid">
							<div class="d-flex w-100 mt-3">
								<div class="rounded-circle" style="width: 40px;height: 40px;top:-5px;left: -40px">
									<img src="assets/uploads/<?php echo $_SESSION['login_profile_pic'] ?>" class="image-fluid image-thumbnail rounded-circle" alt="" style="max-width: calc(100%);height: calc(100%);">
								</div>
								<button class="btn btn-default ml-5 text-left" id="write_post" type="button" style="width:calc(80%);border-radius: 50px !important;"><span>What's on your mind, <?php echo ucwords($_SESSION['login_firstname']) ?>?</span></button>
							</div>
							<br>
							<hr>
							<div class="d-flex w-100 justify-content-center">
								<a href="javascript:void(0)" id="upload_post" class="text-dark post-link px-3 py-1" style="border-radius: 50px !important;"><span class="fa fa-photo-video text-success"></span> Photo/Video</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php

			$posts = $con->query("SELECT p.*,concat(u.firstname,' ',u.lastname) as name,u.profile_pic from posts p inner join users u on u.id = p.user_id  where p.type = 0 order by unix_timestamp(p.date_created) desc");
			while ($row = $posts->fetch_assoc()) :
				$row['content'] = str_replace("\n", "<br/>", $row['content']);
				$is_liked =  $con->query("SELECT * FROM likes where user_id = {$_SESSION['login_id']} and post_id = {$row['id']} ")->num_rows ? "text-primary" : "";
				$liked =  $con->query("SELECT * FROM likes where post_id = {$row['id']} ")->num_rows;
				$commented =  $con->query("SELECT * FROM comments where post_id = {$row['id']} ")->num_rows;

			?>
				<div class="col-md-12">

					<div class="card card-widget post-card" data-id="<?php echo $row['id'] ?>">
						<div class="card-header">
							<div class="user-block">
								<img class="img-circle" src="assets/uploads/<?php echo $row['profile_pic'] ?>" alt="User Image">
								<span class="username"><a href="#" style="font-family: 'Poppins'"><?php echo $row['name'] ?></a></span>
								<span class="description">Posted - <?php echo date("M d,Y h:i a", strtotime($row['date_created'])) ?></span>
							</div>
							<!-- /.user-block -->
							<div class="card-tools">
								<?php if ($_SESSION['login_id'] == $row['user_id']) : ?>
									<div class="dropdown">
										<button type="button" class="btn btn-tool" data-toggle="dropdown" title="Manage">
											<i class="fa fa-ellipsis-v"></i>
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item edit_post" data-id="<?php echo $row['id'] ?>" href="javascript:void(0)">Edit</a>
											<a class="dropdown-item delete_post" data-id="<?php echo $row['id'] ?>" href="javascript:void(0)">Delete</a>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<!-- /.card-tools -->
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<!-- post text -->
							<p class="content-field"><?php echo $row['content'] ?></p>

							<a href="javascript:void(0)" class="d-none show-content">Show More</a>
							<?php if (is_dir('assets/uploads/' . $row['id'])) : ?>
								<div class="gallery mb-2">
									<?php
									$gal = scandir('assets/uploads/' . $row['id']);
									unset($gal[0]);
									unset($gal[1]);
									$count = count($gal);
									$i = 0;
									foreach ($gal as $k => $v) :
										$mime = mime_content_type('assets/uploads/' . $row['id'] . '/' . $v);
										$i++;
										if ($i > 4)
											break;
										$style = '';
										if ($count == 1) {
											$style = "grid-column-start: 1;grid-column-end: 3;grid-row-start: 1;grid-row-end: 3;";
										} elseif ($count == 2) {
											// if($i==1)
											$style = "grid-column-start: {$i};grid-column-end: " . ($i + 1) . ";grid-row-start: 1;grid-row-end: 3;";
										} elseif ($count == 3) {
											if ($i == 1)
												$style = "grid-column-start: {$i};grid-column-end: " . ($i + 1) . ";grid-row-start: 1;grid-row-end: 3;";
										}
									?>
										<figure class="gallery__item position-relative" style="<?php echo $style ?>">
											<?php if ($i == 4 && $count > 4) : ?>
												<div class="position-absolute d-flex justify-content-center align-items-center h-100 w-100" style="top:0;left:0;z-index:1">
													<a href="javascript:void(0)" class="text-white view_more" data-id="<?php echo $row['id'] ?>">
														<h4 class="text-white text-center"><?php echo '+ ' . ($count - 4) ?> More</h4>
													</a>
												</div>
											<?php endif; ?>
											<?php if (strstr($mime, 'image')) : ?>
												<a href="assets/uploads/<?php echo $row['id'] . '/' . $v ?>" class="lightbox-items" data-toggle="lightbox<?php echo $row['id'] ?>" data-slide="<?php echo $k ?>" data-title="" data-gallery="gallery" data-id="<?php echo $row['id'] ?>">
													<img src="assets/uploads/<?php echo $row['id'] . '/' . $v ?>" class="gallery__img" alt="Image 1">
												</a>
											<?php else : ?>
												<?php if ($count > 1) : ?>
													<a href="assets/uploads/<?php echo $row['id'] . '/' . $v ?>" class="lightbox-items" data-toggle="lightbox<?php echo $row['id'] ?>" data-slide="<?php echo $k ?>" data-title="" data-gallery="gallery">
													<?php endif; ?>
													<video <?php echo $count == 1 ? "controls" : '' ?> class="gallery__img">
														<source src="assets/uploads/<?php echo $row['id'] . '/' . $v ?>" type="<?php echo $mime ?>">
													</video>
													<?php if ($count > 1) : ?>
													</a>
													<a href="javascript:void(0)" class="text-white view_more" data-id="<?php echo $row['id'] ?>">
														<div class="position-absolute d-flex justify-content-center align-items-center h-100 w-100" style="top:0;left:0;z-index:1">
															<h3 class="text-white text-center rounded-circle "><i class="fa fa-play-circle "></i></h3>
														</div>
													</a>
												<?php endif; ?>

											<?php endif; ?>

										</figure>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>

							<!-- Social sharing buttons -->
							<!-- <button type="button" id="btn" value="accept" class="btn btn-default btn-sm like" data-id="<?php echo $row['id'] ?>"> -->
							<?php if ($_SESSION['login_role'] == 'doctor') {

								$sql = "select * from posts where id={$row['id']}";
								$i = $_SESSION['login_firstname'];

								foreach ($dbh->query($sql) as $rs) {
									if ($rs['status'] == 0) {
										$color = 'red';
									} else {
										$color = '#000';
									}
							?>
									<tr style="color:<?php echo $color; ?>">
										<!-- <td><?php echo $i; ?></td> -->
										<td>
											<form action="" method="post" onSubmit="if(!confirm('Do You Sure ?')){return false;}">
												<?php
												if ($rs['status'] == 1) {
													echo '<input type="submit" value="Accepted" name="acc" class="btn btn-hover color-11 my-1"  id="btn_job">';
												} else {
													echo '<input type="submit" value="Accept" name="accptd" class="btn btn-hover color-9 my-1"  id="btn_job">';
												}
												?>
												<input type="hidden" value="<?php echo ("$rs[0]") ?>" name="id" />
											</form>
										</td>
									</tr>
							<?php
									// $i++;
								}
							} ?>

							</button>
							<!-- <span class="float-right text-muted counts"><span class="like-count"><?php echo number_format($liked) ?></span> <?php echo $liked > 1 ? "likes" : "like" ?> - <span class="comment-count"><?php echo number_format($commented) ?></span> comments</span> -->
						</div>
						<!-- /.card-body -->
						<div class="card-footer card-comments">
							<?php
							$comments = $con->query("SELECT c.*,concat(u.firstname,' ',u.lastname) as name,u.profile_pic FROM comments c inner join users u on u.id = c.user_id where c.post_id = {$row['id']} order by unix_timestamp(c.date_created) asc ");
							while ($crow = $comments->fetch_assoc()) :
							?>
								<div class="card-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="assets/uploads/<?php echo $crow['profile_pic'] ?>" alt="User Image">

									<div class="comment-text">
										<span class="username">
											<span class="uname"><?php echo $crow['name'] ?></span>
											<span class="text-muted float-right timestamp"><?php echo date("M d,Y h:i A", strtotime($crow['date_created'])) ?></span>
										</span><!-- /.username -->
										<span class="comment">
											<?php echo str_replace("\n", "<br/>", $crow['comment']) ?>
										</span>
									</div>
									<!-- /.comment-text -->
								</div>
							<?php endwhile; ?>
						</div>
						<!-- /.card-footer -->
						<div class="card-footer">
							<form action="#" method="post">
								<i style="color: #71706E;" class="img-fluid img-circle img-sm fa fa-comment"></i>
								<!-- .img-push is used to add margin to elements next to floating images -->
								<div class="img-push">
									<textarea cols="30" rows="1" class="form-control comment-textfield" style="border-radius: 15px; resize:none" placeholder="Press enter to post comment" data-id="<?php echo $row['id'] ?>"></textarea>
								</div>
							</form>
						</div>
						<!-- /.card-footer -->
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	</div>
</div>
<style>
	.gallery__img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	.gallery {
		display: grid;
		grid-template-columns: repeat(2, 50%);
		grid-template-rows: repeat(2, 30vh);
		grid-gap: 3px;
		grid-row-gap: 3px;
	}

	.gallery__item {
		margin: 0
	}
</style>
<div class="d-none " id="comment-clone">
	<div class="card-comment">
		<!-- User image -->
		<img class="img-circle img-sm" src="" alt="User Image">

		<div class="comment-text">
			<span class="username">
				<span class="uname">Maria Gonzales</span>
				<span class="text-muted float-right timestamp">8:03 PM Today</span>
			</span><!-- /.username -->
			<span class="comment">
				It is a long established fact that a reader will be distracted
				by the readable content of a page when looking at its layout.
			</span>
		</div>
		<!-- /.comment-text -->
	</div>
</div>
<script>
	$('.comment-textfield').on('keypress', function(e) {
		if (e.which == 13 && e.shiftKey == false) {
			if ($('#preload2').length <= 0) {
				start_load();
			} else {
				return false;
			}
			var post_id = $(this).attr('data-id')
			var comment = $(this).val()
			$(this).val('')
			$.ajax({
				url: 'ajax.php?action=save_comment',
				method: 'POST',
				data: {
					post_id: post_id,
					comment: comment
				},
				success: function(resp) {
					if (resp) {
						resp = JSON.parse(resp)
						if (resp.status == 1) {
							var cfield = $('#comment-clone .card-comment').clone()
							cfield.find('.img-circle').attr('src', 'assets/uploads/' + resp.data.profile_pic)
							cfield.find('.uname').text(resp.data.name)
							cfield.find('.comment').html(resp.data.comment)
							cfield.find('.timestamp').text(resp.data.timestamp)
							$('.post-card[data-id="' + post_id + '"]').find('.card-comments').append(cfield)
							var cc = $('.post-card[data-id="' + post_id + '"]').find('.comment-count').text();
							cc = cc.replace(/,/g, '');
							cc = parseInt(cc) + 1
							$('.post-card[data-id="' + post_id + '"]').find('.comment-count').text(cc)
						} else {
							alert_toast("An error occured", "danger")
						}
						end_load()
					}
				}
			})
			return false;
		}
	})
	$('.comment-textfield').on('change keyup keydown paste cut', function(e) {
		if (this.scrollHeight <= 117)
			$(this).height(0).height(this.scrollHeight);
	})
	$('#write_post').click(function() {
		uni_modal("<center><b>Create Post</b></center></center>", "create_post.php")
	})
	$('.edit_post').click(function() {
		uni_modal("<center><b>Edit Post</b></center></center>", "create_post.php?id=" + $(this).attr('data-id'))
	})
	$('.delete_post').click(function() {
		_conf("Are you sure to delete this post?", "delete_post", [$(this).attr('data-id')])
	})

	function delete_post($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_post',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
	$('#upload_post').click(function() {
		uni_modal("<center><b>Create Post</b></center></center>", "create_post.php?upload=1")
	})
	$('.content-field').each(function() {
		var dom = $(this)[0]
		var divHeight = dom.offsetHeight
		if (divHeight > 117) {
			$(this).addClass('truncate-5')
			$(this).parent().children('.show-content').removeClass('d-none')
		}
	})
	$('.show-content').click(function() {
		var txt = $(this).text()
		if (txt == "Show More") {
			$(this).parent().children('.content-field').removeClass('truncate-5')
			$(this).text("Show Less")
		} else {
			$(this).parent().children('.content-field').addClass('truncate-5')
			$(this).text("Show More")
		}
	})
	$('.lightbox-items').click(function(e) {
		e.preventDefault()
		uni_modal("", "view_attach.php?id=" + $(this).attr('data-id'), "large")
	})
	$('.view_more').click(function(e) {
		e.preventDefault()
		uni_modal("", "view_attach.php?id=" + $(this).attr('data-id'), "large")
	})
	$('.like').click(function() {
		var _this = $(this)
		$.ajax({
			url: 'ajax.php?action=like',
			method: 'POST',
			data: {
				post_id: $(this).attr('data-id')
			},
			success: function(resp) {
				if (resp == 1) {
					_this.addClass('text-primary')
					var lc = _this.siblings('.counts').find('.like-count').text();
					lc = lc.replace(/,/g, '');
					lc = parseInt(lc) + 1
					_this.siblings('.counts').find('.like-count').text(lc)
				} else if (resp == 0) {
					_this.removeClass('text-primary')
					var lc = _this.siblings('.counts').find('.like-count').text();
					lc = lc.replace(/,/g, '');
					lc = parseInt(lc) - 1
					_this.siblings('.counts').find('.like-count').text(lc)
				}
			}
		})
	})
</script>