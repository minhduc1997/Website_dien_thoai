<?php 
$cat_id= $_GET['cat_id'];
if(isset($_GET['page'])){
	$page=$_GET['page'];
	
	
	}
	else {
		
		$page=1;
		}
		
		$trang = $page * 6 - 6;
		
		//previous
		$list_page='';
		$page_prv = $page - 1 ;
		if ($page_prv <=0){
			$page_prv=1;
			
			}
			$list_page.='<li class="page-item"><a class="page-link" href="index.php?page_layout=category&cat_id='.$cat_id.'&page='.$page_prv.'">&laquo;</a></li>
';
		//mid  
$sqll="select * from  product where cat_id ='$cat_id'";	

$query1=mysqli_query($conn, $sqll);	

$row1=mysqli_num_rows($query1);
$k = ceil($row1 / 6);
		for($i=1; $i<=$k; $i++){
			
			if ($i==$page){
				$active='active';
				
				}
			 else  
			 $active ='';
			
			$list_page.=' <li class="page-item '.$active.'"><a class="page-link" href="index.php?page_layout=category&cat_id='.$cat_id.'&page='.$i.'"">'.$i.'</a></li>';}
			
 		
	   //next 
	   $next = $page +1 ;
	  
		if ($next > 6){
			$next=6;
			}  
			$list_page.=' <li class="page-item"><a class="page-link" href="index.php?page_layout=category&cat_id='.$cat_id.'&page='.$next.'">&raquo;</a></li>';
	  
		





$sql = "select * from product where cat_id= '$cat_id' limit $trang ,6  ";
$query = mysqli_query($conn , $sql);
$rows = mysqli_num_rows($query);



 ?>
<!--	List Product	-->
<form method="post">
<div class="products">
    <h3>iPhone (hiện có <?php  echo  $rows[''];?> sản phẩm)</h3>
     
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
<input type="submit" name="ok" value="so sánh" />
</form>
<!--	End List Product	-->

<div id="pagination">
    <ul class="pagination">
        <?php 
		echo  $list_page;
		?>
    </ul> 
</div>
<?php

if(isset($_POST['ok'])){
	$vl=  array();
foreach($_POST['check'] as $key => $values){
	
	$vl[]=  $values;
	
	}
			$_SESSION['ss_id']=  $str_id = implode(',', $vl);
			header('location:index.php?page_layout=compare');
	
				
	}

 ?>