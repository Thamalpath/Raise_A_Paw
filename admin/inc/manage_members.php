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
                    <h3 class="text-center my-3 text"><i class="fas fa-table mr-3"></i>List Of Members</h3>
                </b>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Frist Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $sql = "select * from users order by id desc";
                            $i = 1;

                            foreach ($dbh->query($sql) as $rs) {


                            ?>
                                <tr>
                                    <td><?php echo $rs['firstname']; ?></td>
                                    <td><?php echo $rs['lastname']; ?></td>
                                    <td><?php echo $rs['gender']; ?></td>
                                    <td><?php echo $rs['role']; ?></td>
                                    <td><?php echo $rs['email']; ?></td>
                                    <td><?php echo $rs['address']; ?></td>
                                    <td><?php echo $rs['contact']; ?></td>
                                    <td><?php echo $rs['dob']; ?></td>
                                    <!-- <td><?php echo $rs['cdate']; ?></td> -->


                                    <td><a href="delete_members.php?id=<?php echo $rs['id']; ?>"> <input type='submit' value='Delete' class='btn btn-danger'></a></td>
                                </tr>






                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>