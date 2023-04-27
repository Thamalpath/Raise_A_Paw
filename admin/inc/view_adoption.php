<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .text {
        font-size: 30px;
        font-weight: 600;
        font-family: 'Poppins';
    }
</style>

<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <b>
                    <h3 class="text-center my-3 text"><i class="fas fa-table mr-3"></i>List Of Adoption Post</h3>
                </b>
            </div>
            <br>

            <div class="container">
                <div class="row">


                    <?php

                    //echo(mysql_num_rows($result));
                    $sql = "Select * from adoption order by id desc";
                    $isl = 0;

                    foreach ($dbh->query($sql) as $row) {
                        echo ("<div class='col-md-4'>

        <img src='../slide/$row[2]' width='260px' height='175px' class='img-thumbnail' />
        <h3>   $row[1]</h3>
        <p >  $row[3]</p>
        <form method='POST' action='delete_adoption.php' style='margin-bottom:20px;'><br>
    
    <input type='submit' value='Delete' name='B5' class='btn btn-danger'>
    <input type='hidden' name='id' value='$row[0]'>
    <input type='hidden' name='img' value='$row[1]'>
</form>                                                        

</div>");
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</main>