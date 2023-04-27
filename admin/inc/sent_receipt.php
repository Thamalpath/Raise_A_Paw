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
                    <h3 class="text-center my-3 text"><i class="fas fa-table mr-3"></i>List Of Admin Receipt</h3>
                </b>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Doctor's Email</th>
                                <th>File</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            // $sql = "select * from fileup order by id desc";
                            // $i = 1;

                            // foreach ($dbh->query($sql) as $rs) {


                            include 'db.php';
                            include 'db1.php';

                            $sql = "SELECT * from admin_invoice";
                            $query = mysqli_query($con, $sql);
                            while ($info = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $info['id']; ?></td>
                                    <td><?php echo $info['email']; ?></td>
                                    <td>Open a PDF file. <a href="\Projects\Websites\Final\admin\inc\image\<?php echo $info['image']; ?>">View</a></td>
                                    <td><?php echo $info['date']; ?></td>
                                    <td><a href="delete_admin_receipt.php?id=<?php echo $info['id']; ?>"> <input type='submit' value='Delete' class='btn btn-danger'></a></td>
                                </tr>
                            <?php
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>