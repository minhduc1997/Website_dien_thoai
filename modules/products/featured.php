 <style>
  .products1
  {
   position: relative;
  
   font-family: tahoma;
   font-size: 12px;
 
   cursor: pointer;
  }
 

 .pd-img:hover
 {
  opacity: 0.5;
 }
 
 .pd-des
 {
  position: absolute;
  bottom: 0px;
  height: 0;
  width: 100%;
  background-color: #cee6efe6;
  overflow: hidden;
  transition: height 1s;
  text-align: center;
      left: 0px;

 }
 
 .products1:hover .pd-des
 {
  height: 100%;
  transition: height 1s;
 }
  </style>

<script>
	function byNow(){
		
			document.getElementById('frm').submit();
	}
	
</script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
<script>
  //  $(document).ready(function(){
      //  $("input[name='ok']").click(function(){
          //  $("#check").show();
       // })
       // $("#img_file").click(function(){
         //   $("#div2").hide();
     //  })
   // })
</script>
<?php
$sql = "SELECT * FROM product
		WHERE prd_featured = 1
		ORDER BY prd_id DESC
		LIMIT 6";
$query = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($query);

?>
<!--	Feature Product	-->
<form id="frm" method="post">
<div class="products">
    <h3>Sản phẩm nổi bật</h3>    
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
        <div class="product-item card text-center products1">
        
            <a class="pd-img" href="index.php?page_layout=product&prd_id=<?php  echo $row['prd_id']?>"><img src="admin/img/images/<?php echo $row['prd_image'];?>"></a>
            <h4><a href="#"><?php echo $row['prd_name'];?></a></h4>
            <p>Giá Bán: <span><?php echo $row['prd_price'];?></span></p>
            
            
          
            <?php  //include("rating/index1.php"); ?>
            <a href="index.php?page_layout=product&prd_id=<?php  echo $row['prd_id']?>" > <div class="pd-des">
             	 <h3><?php echo  $row['prd_name']; ?></h3>
            <ul style="line-height:28px">
                <li><span>Bảo hành:</span> <?php echo  $row['prd_warranty']; ?></li>
                <li><span>Đi kèm:</span> <?php echo  $row['prd_accessories']; ?></li>
                <li><span>Tình trạng:</span> <?php echo  $row['prd_new']; ?></li>
                <li><span>Khuyến Mại:</span> <?php echo  $row['prd_promotion']; ?></li>
                <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                <li id="price-number"><?php echo  $row['prd_price']; ?></li>
                <li id="status" <?php if($row['prd_status']==1)echo  "style='color:green'";else echo  "style='color:red'";?>><?php if($row['prd_status']==1)echo  "còn hàng ";else echo  "hết hàng";?></li>
            </ul>
             </div>
			</a>
         
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
			echo '</div>';}?>
</div>
<input onclick="show_check()" type="submit" name="ok"  />
</form>
<?php
/*
if(isset($_POST['ok'])){
	$vl=  array();
foreach($_POST['check'] as $key => $values){
	
	$vl[]=  $values;
	
	}
			$_SESSION['ss_id']=  $str_id = implode(',', $vl);
			header('location:index.php?page_layout=compare');
	
				
	}
*/
 ?>
<!--	End Feature Product	-->