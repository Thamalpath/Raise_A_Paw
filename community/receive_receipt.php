<?php session_start() ?>
<?php
if (!isset($_SESSION['login_id']))
    include 'header.php';
?>
<?php
include 'db.php';
include 'db1.php';
?>
<html>

<head>
    <title>Raise A Paw | Receive Receipt</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel='stylesheet' href='https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css'>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        .text {
            font-size: 30px;
            font-weight: 600;
            font-family: 'Poppins';
        }
    </style>
</head>

<body>
    <?php
    include "topbar.php";
    ?>
    <main>
        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-header">
                    <b>
                        <h3 class="text-center my-3 text"><i class="fas fa-table mr-3"></i>List Of Receipt</h3>
                    </b>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>File</th>
                                    <th>Date</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $sql = "SELECT * from admin_invoice WHERE email='{$_SESSION['login_email']}'";
                                $query = mysqli_query($con, $sql);
                                while ($info = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td>Open a PDF file. <a href="\Projects\Websites\Final\admin\inc\image\<?php echo $info['image']; ?>">View</a></td>
                                        <td><?php echo $info['date']; ?></td>
                                    </tr>
                                <?php
                                }

                                ?>

                                <!-- <tr>
                                    <td><a href="delete_members.php?id=<?php echo $info['id']; ?>"> <input type='submit' value='Delete' class='btn btn-danger'></a></td>
                                </tr> -->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>