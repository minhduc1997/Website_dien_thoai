<?php

echo $str_id = $_SESSION['ss_id'];

if(($_SESSION['ss_id'])==""){
	echo " Không có sản phẩm nào được chọn"; 
	
	}
else
{
$sql = "SELECT * FROM product
			WHERE prd_id IN ($str_id)";
			$query = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_array($query)){
				
				
				

 ?>
 <div id="product">
    <div id="product-head" class="row">
    
    
        <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
            <img src="admin/img/images/<?php echo  $row['prd_image']; ?>">
        </div>
        <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
            <h1><?php echo  $row['prd_name']; ?></h1>
            <ul>
                <li><span>Bảo hành:</span> <?php echo  $row['prd_warranty']; ?></li>
                <li><span>Đi kèm:</span> <?php echo  $row['prd_accessories']; ?></li>
                <li><span>Tình trạng:</span> <?php echo  $row['prd_new']; ?></li>
                <li><span>Khuyến Mại:</span> <?php echo  $row['prd_promotion']; ?></li>
                <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                <li id="price-number"><?php echo  $row['prd_price']; ?></li>
                <li id="status"><?php if($row['prd_status']==1)echo  "còn hàng ";else echo  "hết hàng";?></li>
            </ul>
            <div id="add-cart"><a href="../cart/add_cart.php?prd_id=<?php echo $row['prd_id']; ?>">Mua ngay</a></div>
        </div>
    </div>
    <div id="product-body" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Đánh giá về <?php echo  $row['prd_image']; ?></h3>
           <?php echo  $row['prd_details']; ?>
        </div>
 </div>
    </div>
<?php }
}?>