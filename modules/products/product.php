<?php 
$prd_id=$_GET['prd_id'];
$sql ="select * from product where prd_id = $prd_id";
$query = mysqli_query($conn , $sql);
$row=mysqli_fetch_array($query);
?>
<!--	List Product	-->
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
            <div id="add-cart"><a href="modules/cart/add_cart.php?prd_id=<?php echo $row['prd_id']; ?>">Mua ngay</a></div>
        </div>
    </div>
    <div id="product-body" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Đánh giá về <?php echo  $row['prd_image']; ?></h3>
           <?php echo  $row['prd_details']; ?>
        </div>
    </div>
    
    <!--	Comment	-->
   <div id="comment" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Bình luận sản phẩm</h3>
            <form method="post">
                <div class="form-group">
                    <label>Tên:</label>
                    <input name="comm_name" required type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="comm_mail" required type="email" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label>Nội dung:</label>
                    <textarea name="comm_details" required rows="8" class="form-control"></textarea>     
                </div>
 <table> 
  <tr>
    <td align="left">
      <label for="captcha">Captcha</label>
    </td>
    <td>
      <input required="required" type="text" name="txtCaptcha" maxlength="10" size="32" />
    </td>
    <td> 
      <img src="modules/products/random_image.php" />
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    
  </tr>
</table> 
                <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
                
            </form> 
        </div>
    </div>
     
        <?php
    if(isset($_POST['sbm'])){
		$comm_name = $_POST['comm_name'];	
		$comm_mail = $_POST['comm_mail'];	
		$comm_details = $_POST['comm_details'];	
		
		date_default_timezone_set('Asia/Bangkok');
		$comm_date = date('Y-m-d H:i:s');
		
		
	
		if($_POST['txtCaptcha'] == $_SESSION['security_code'])
		{
			echo "ma lenh hop le";
			
		$sql = "INSERT INTO comment(comm_name, comm_mail, comm_details, comm_date, prd_id)
				VALUES('$comm_name', '$comm_mail', '$comm_details', '$comm_date', '$prd_id')";
				
		mysqli_query($conn, $sql);
			
		}
		
	
		
		
	}
	?>
    <!--	End Comment	-->  
    
    <!--	Comments List	-->
    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="2"></div>
   <div id="comments-list" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php
			
			  $sqla = "SELECT * FROM comment
			WHERE prd_id = $prd_id
			ORDER BY comm_id ASC
			";
	$querya = mysqli_query($conn, $sqla);
	
            while($rowa = mysqli_fetch_array($querya)){
			?>
            <div class="comment-item">
                <ul>
                    <li><b><?php echo $rowa['comm_name'];?></b></li>
                    <li><?php echo $rowa['comm_date'];?></li>
                    <li>
                        <p><?php echo $rowa['comm_details'];?></p>
                    </li>
                </ul>
            </div>
            <?php
			}
			?>
        </div>
    </div>
            
    <!--	End Comments List	-->
</div>
<!--	End Product	--> 
<div id="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    </ul> 
</div> 