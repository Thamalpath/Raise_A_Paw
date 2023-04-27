<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
</style>


<!-- Navbar -->
<nav class="main-header navbar navbar-expand py-2" style="height: 70px; background-color: #BD9292;">
  <!-- Left navbar links -->
  <div class="container">
    <ul class="navbar-nav">
      <?php if (isset($_SESSION['login_id'])) : ?>
        <li class="nav-item ">
          <div class="d-flex position-relative">
            <h1 class="text-primary position-absolute" style="top:-25px">
              <i class="fa fa-paw  text-primary" style="color:#F7941D !important"></i>
            </h1>
          </div>
        </li>
      <?php endif; ?>
      <!-- <li>
          <a class="nav-link text-white"  href="./" role="button"> <large><b>Raise A Paw</b></large></a>
        </li> -->
    </ul>

    <ul class="navbar-nav">
      <li>
        <a style="margin-left: 60px; color: #fff; font-weight: 600; font-size: 30px; font-family: 'Poppins'" href="./">Raise A Paw</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">

      <?php if (isset($_GET['page']) && $_GET['page'] != 'additional_info') : ?>
        <li class="nav-item">
          <!-- <a class="nav-link nav-home mt-1" href="./">
            <b>Home</b>
          </a> -->
        </li>
      <?php endif; ?>
      <li class="nav-item dropdown mb-3">
        <a class="nav-link" data-toggle="dropdown" aria-expanded="true" href="javascript:void(0)">
          <span>
            <div class="d-flex badge-pill align-items-center bg-gradient-primary" style="background: #337cca47 linear-gradient(180deg,#268fff17,#007bff66) repeat-x!important; color: #fff; border:50px; height: 40px; width: 160px;">
              <?php if (isset($_SESSION['login_profile_pic']) && !empty($_SESSION['login_profile_pic'])) : ?>
                <div class="rounded-circle mr-1" style="width: 25px;height: 25px;top:-5px;left: -40px">
                  <img src="assets/uploads/<?php echo $_SESSION['login_profile_pic'] ?>" class="image-fluid image-thumbnail rounded-circle" alt="" style="max-width: calc(100%);height: calc(100%);">
                </div>
              <?php else : ?>
                <span class="fa fa-user mr-2" style="width: 25px;height: 25px;top:-5px;left: -40px"></span>
              <?php endif; ?>
              <span><b><?php echo ucwords($_SESSION['login_firstname']) ?></b></span>
              <span class="fa fa-angle-down ml-2"></span>
            </div>
          </span>
        </a>

        <div class="dropdown-menu mt-3" aria-labelledby="account_settings" style="left: -2.5em;">
          <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> <span class="ml-2">Manage Account</span></a>
          <a class="dropdown-item" href="printable_invoice/index.php" id=""><?php if($_SESSION['login_role'] == 'doctor')echo '<i class="fa fa-share-square"></i><span class="ml-2">Send Receipt</span>' ?></a>
          <a class="dropdown-item" href="receive_receipt.php" id=""><?php if($_SESSION['login_role'] == 'doctor')echo '<i class="fa fa-reply"></i><span class="ml-2">Receive Receipt</span>' ?></a>
          <a><hr class="dropdown-divider"></a>
          <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> <span class="ml-2">Logout</span></a>
        </div>

      </li>
    </ul>
  </div>
</nav>
<style>
  .cart-img {
    width: calc(25%);
    max-height: 13vh;
    overflow: hidden;
    padding: 3px
  }

  .cart-img img {
    width: 100%;
    /*height: 100%;*/
  }

  .cart-qty {
    font-size: 14px
  }

  .dropdown-menu a:hover{
    color: #F7941D;
  }

  .nav-home b{
    font-family: Poppins;
    font-size: 20px;
    color: #fff;
  }

  .nav-home b:hover{
    color: #F7941D;
  }

  @media screen and (max-width: 480px) {
		.fa-paw {
			font-size: 35px;
      margin-left: 10px;
      margin-bottom: 5px;
		} 
	}
</style>
<!-- /.navbar -->
<script>
  $(document).ready(function() {
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
    if ($('.nav-link.nav-' + page).length > 0) {
      $('.nav-link.nav-' + page).addClass('active')
      console.log($('.nav-link.nav-' + page).hasClass('tree-item'))
      if ($('.nav-link.nav-' + page).hasClass('tree-item') == true) {
        $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active')
        $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open')
      }
      if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true) {
        $('.nav-link.nav-' + page).parent().addClass('menu-open')
      }

    }
    $('#manage_my_account').click(function() {
      uni_modal('Manage Account', 'manage_account.php')
    })
  })
</script>