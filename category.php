<?php 
session_start();
error_reporting(0);
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Category  Page | HIMPUNAN MAHASISWA TEKNIK ELEKTRO | UNIVERSITAS SYIAH KUALA </title>
    
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
   
      <!-- Page Content -->
      <div class="container">
          
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <br />

          <!-- Blog Post -->
<?php 
        if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}
             






     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM table_posts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select table_posts.id as pid, table_posts.PostTitle as posttitle, table_posts.PostImage, table_category.CategoryName as category, table_subcategory.Subcategory as subcategory, table_posts.PostDetails as postdetails, table_posts.PostingDate as postingdate, table_posts.PostUrl as url from table_posts left join table_category on table_category.id=table_posts.CategoryId left join  table_subcategory on  table_subcategory.SubCategoryId=table_posts.SubCategoryId where table_posts.CategoryId='".$_SESSION['catid']."' and table_posts.Is_Active=1 order by table_posts.id desc LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
    ?>
    <br /><br />
    <h5 style="text-align: center; margin-top: auto;">No pages found</h5>
    <?php
}
else {
while ($row=mysqli_fetch_array($query)) {


?>
<br />
          <div class="card mb-4">
              <h1 class="card-header"><?php echo htmlentities($row['category']);?> News</h1>
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p><?php $pt=$row['postdetails']; echo  (substr($pt, 0, 110));?> ...</p>
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>&page=<?php echo htmlentities($row['url'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>" style="max-width:auto; height:auto; margin:auto; margin-bottom:auto;">
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>

    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
       

      

          <!-- Pagination -->




        </div>
        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

 
<!--
  </body>

</html>
-->
