<br>




<?php
 include('db1.php');
$sql="SELECT id,title FROM blog ";
$results_per_page=100;
$re=mysqli_query($con,$sql);
$number_of_results=mysqli_num_rows($re);
$number_of_pages=ceil($number_of_results/$results_per_page);
if(!isset($_GET['del']))
{
	$del=1;

}
else
{
	$del=$_GET['del'];

}
$this_page_first_result=($del-1)*$results_per_page;
$sql="SELECT id,title FROM blog  LIMIT ". $this_page_first_result .','. $results_per_page;
$re=mysqli_query($con,$sql);

 
   

 
?>


<div class="container">
    <form action="insideblogform.php" method="post" enctype="multipart/form-data">
    <div class="row">
        
        <div class="col-md-7">
            
            <h3>Select Blog</h3><br>
           <select name="bloglist" style="width:412px;" >
      <?php  while($row=mysqli_fetch_assoc($re)) { ?>
    <option ><?php echo $row['title'];?></option>
     <?php } ?>
  </select>
        </div>
        
        
     
        
            <div class="col-md-5">
            
            <h3>Description</h3>
            
	<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
         <textarea name="content" cols="5" rows="5"> </textarea>
         
           <script>
                        CKEDITOR.replace( 'content' );
                </script>
        </div>
        
    </div>
    <br>
     
                              <input type="submit" value="Submit" name="blogbutton" class="btn btn-primary"  id="btn_job">
                              
                              
                            </form>
    
    
</div>