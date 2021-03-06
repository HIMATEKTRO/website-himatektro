<?php 
session_start();
include('includes/config.php');
error_reporting(0);
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);

// Set Time Local
date_default_timezone_set('Asia/Jakarta');// change according timezone
$currentTime = date("Y-m-d G:i:s");

$st1='0';
$query=mysqli_query($con,"insert into table_comments(postId,name,email,comment,status, PostingDate) values('$postid','$name','$email','$comment','$st1','$currentTime')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
$pages=$_GET['page'];
 $query=mysqli_query($con,"select table_posts.PostTitle as posttitle, table_posts.PostImage, table_category.CategoryName as category, table_category.id as cid, table_subcategory.Subcategory as subcategory, table_posts.PostDetails as postdetails, table_posts.PostingDate as postingdate, table_posts.PostUrl as url from table_posts left join table_category on table_category.id=table_posts.CategoryId left join table_subcategory on table_subcategory.SubCategoryId=table_posts.SubCategoryId where table_posts.id='$pid' and table_posts.PostUrl='$pages'");
if($pid == true and $pages == true){
while ($row=mysqli_fetch_array($query)) {

?>

    <title> <?php echo htmlentities($row['posttitle']); ?> | HIMPUNAN MAHASISWA TEKNIK ELEKTRO | UNIVERSITAS SYIAH KUALA </title>
    
    <!-- Set favicon icon in head-->
    <link rel="shortcut icon" type="image/png" href="./himatektro-icon.png">

    <!-- JavaScript FontAwesome -->
    <script src="https://kit.fontawesome.com/ad0d081d8e.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>
   <br />

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
        <br /><br />
          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p><b>Bidang : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |
                <b>Category : </b><?php echo htmlentities($row['subcategory']);?> <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                <hr />

 <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?> " style="max-width: auto; height: auto; margin-bottom: 30px;">
  
              <p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php }
    } else { 
        echo "<script type='text/javascript'> document.location = '404page.php'; </script>";
    } ?>
       

      

     

        </div>
        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->
<!---Comment Section --->

 <div class="row" style="margin-top: -8%">
   <div class="col-md-8">
       <br /> <br /><br />
<div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form name="Comment" method="post">
      <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </form>
            </div>
          </div>
          <div class="card my-4">
              <h5 class="card-header"></h5>
                  <div class="card-body">
                      <!---Comment Display Section --->
                     <?php 
                     $sts=1;
                     $query=mysqli_query($con,"select name,comment,postingDate from  table_comments where postId='$pid' and status='$sts'");
                    while ($row=mysqli_fetch_array($query)) {
                    ?>
                    <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
                                <div class="media-body">
                                  <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                                      <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
                                </h5>
                               
                                 <?php echo htmlentities($row['comment']);?>            </div>
                              </div>
                    <?php } ?>
                      
                  </div>
       </div>
        </div>
      </div>
    </div>

  
      <?php include('includes/footer.php');?>
      
      


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!--
  </body>

</html>
-->
    
