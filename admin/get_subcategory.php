<?php
include('includes/config.php');
if(!empty($_POST["catid"])) 
{
 $id=intval($_POST['catid']);
$query=mysqli_query($con,"SELECT * FROM table_subcategory WHERE CategoryId=$id and Is_Active=1");
?>
<option value="">Select Subcategory</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['SubCategoryId']); ?>"><?php echo htmlentities($row['Subcategory']); ?></option>
  <?php
 }
}
?>