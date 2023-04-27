<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .text {
        font-size: 35px;
        font-weight: 600;
        font-family: 'Poppins';
    }
</style>

<main>
    <div class="container-fluid">
        <div class="card-header">
            <b>
                <h3 class="text-center my-4 text">Add What We Do</h3>
            </b>
        </div>
        <br>
        <div class="container mt-3">
            <form action="whatweform.php" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-4">

                        <h3>Title</h3><br>
                        <input type="text" / name="title">
                    </div>



                    <div class="col-md-4">

                        <h3>Image</h3><br>
                        <input type="file" / name="img1">
                    </div>


                    <div class="col-md-4">

                        <h3>Description</h3>

                        <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
                        <textarea name="content" cols="5" rows="5"> </textarea>

                        <script>
                            CKEDITOR.replace('content');
                        </script>
                    </div>

                </div>
                <br>
                <input type="submit" value="Submit" name="whatdo" class="btn btn-primary" id="btn_job">
            </form>
        </div>
    </div>
</main>