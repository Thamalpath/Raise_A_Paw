<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .text {
        font-size: 30px;
        font-weight: 600;
        font-family: 'Poppins';
    }
</style>

<?php
if (isset($_POST["del"])) {
    $stmt = $dbh->prepare("update posts set type =0 where id = $_POST[id]");
    $stmt->execute();
}
if (isset($_POST["show"])) {
    $stmt = $dbh->prepare("update posts set type =1 where id = $_POST[id]");
    $stmt->execute();
}
?>

<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <b>
                    <h3 class="text-center my-3 text"><i class="fas fa-table mr-3"></i>List Of Community Post</h3>
                </b>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Content</th>
                                <th>Location</th>
                                <th>Accepted By</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php

                            include 'db.php';
                            include 'db1.php';

                            $sql = "SELECT * from posts";
                            $i = 1;
                            $query = mysqli_query($con, $sql);
                            while ($info = mysqli_fetch_array($query)) {
                                if ($info['type'] == 0) {
                                    $color = 'red';
                                } else {
                                    $color = '#000';
                                }
                            ?>
                                <tr>
                                    <!-- <td><?php echo $i; ?></td> -->
                                    <td><?php echo $info['id']; ?></td>
                                    <td><?php echo $info['user_id']; ?></td>
                                    <td><?php echo $info['content']; ?></td>
                                    <td><?php echo $info['location']; ?></td>
                                    <td><?php echo $info['accept']; ?></td>
                                    <td><?php echo $info['date_created']; ?></td>
                                    <td><a href="delete_community_post.php?id=<?php echo $info['id']; ?>"> <input type='submit' value='Delete' class='btn btn-danger'></a>
                                        <form action="" method="post" onSubmit="if(!confirm('Do You Sure ?')){return false;}">
                                            <?php
                                            if ($info['type'] == 1) {
                                                echo '<input type="submit" value="Hide" name="del" class="btn btn-danger " id="btn_job">';
                                            } else {
                                                echo '<input type="submit" value="Active" name="show" class="btn btn-success" id="btn_job">';
                                            }
                                            ?>
                                            <input type="hidden" value="<?php echo ("$info[0]") ?>" name="id" />
                                        </form>
                                    </td>
                                </tr>
                            <?php
                                $i++;
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>