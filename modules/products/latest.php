<?php
$sql = "SELECT * FROM product
		ORDER BY prd_id DESC
		LIMIT 6";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);

?>
<!--	Latest Product	-->
<div class="products">
    <h3>Sản phẩm mới</h3>
    <?php
	$j=1;
	$i=1;
    while($row = mysqli_fetch_array($query)){
		if($j==1){
			?>
            <div class="product-list card-deck">
            <?php
		}
    ?>
        <div class="product-item card text-center">
            <a href="index.php?page_layout=product&prd_id=<?php  echo $row['prd_id']?>"><img src="admin/img/images/<?php echo $row['prd_image'];?>"></a>
            <h4><a href="#"><?php echo $row['prd_name'];?></a></h4>
            <p>Giá Bán: <span><?php echo $row['prd_price'];?></span></p>
          	<input type="checkbox" name="check[]" value="<?php echo $row['prd_id']?>" />

            <?php  //include("rating/index1.php"); ?>
        </div>
	<?php
		if($j==3){
			?>
            </div>
            <?php
			$j=1;
		}
		else{
			 $j++;
		}
      
    }
	if($rows%3!=0){
			echo '</div>';}
    ?>
</div>
<!--	End Latest Product	-->