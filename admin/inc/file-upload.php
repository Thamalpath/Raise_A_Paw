<!DOCTYPE html>
<html>

<head>
    

    <!-- Bootstrap 5 CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        .text {
            font-size: 35px;
            font-weight: 600;
            font-family: 'Poppins';
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

        .btn-hover.color-11 {
            background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);
            box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
        }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="card-header">
        <b>
            <h3 class="text-center my-4 text">Send Doctor Receipt</h3>
        </b>
    </div>
</div>

    <form method='post' enctype='multipart/form-data'>
        <div class="container-fluid">
            <div class='row m-5'>
                <div class='col-md-6'>
                    <div class='form-floating mb-4'>
                        <input name='email' type='text' class='form-control' placeholder='Doctor's Email' required style='border-radius: 10px;'>
                        <label for='floatingInput'>Doctor's Email</label>
                    </div>
                </div>
                <!-- <div class='col-md-6'>
                    <div class='form-floating mb-4'>
                        <input name='dname' type='text' class='form-control' placeholder='Doctor Name' required style='border-radius: 10px;'>
                        <label for='floatingInput'>Doctor Name</label>
                    </div>
                </div> -->
            </div>
            <div class="row m-5">
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
        </div>
    </form>
</body>

</html>

<?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "final_db";  #database name

#connection string
$conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if (isset($_POST["submit"])) {
    #retrieve file title
    $email = $_POST["email"];
    // $dname = $_POST["dname"];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'inc/image';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    #sql query to insert into database
    $sql = "INSERT into admin_invoice(email,image) VALUES('$email','$pname')";

    if (mysqli_query($conn, $sql)) {

        echo "<b class='text-success'>File Sucessfully uploaded</b>";
        // header("Location: index.php");
    } else {
        echo "<b class='text-danger'>Error</b>";
    }
}

?>