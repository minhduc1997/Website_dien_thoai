 <?php


		
		 $prd_name=$_POST['prd_name'];
		 $prd_price=$_POST['prd_price'];
		 $prd_warranty=$_POST['prd_warranty'];
		 $prd_accessories=$_POST['prd_accessories'];
		 $prd_promotion=$_POST['prd_promotion'];
		 $prd_new=$_POST['prd_new'];
	
		$prd_image= $_FILES['img_file']['name']; 
		 $cat_id=$_POST['cat_id'];
		 $prd_status=$_POST['prd_status'];
		 $prd_featured=$_POST['prd_featured'];
		 $prd_details=$_POST['prd_details'];
	
	
	
	
		$sql_up = "UPDATE `product` SET `cat_id`='$cat_id',`prd_name`='$prd_name'								   ,`prd_image`='$prd_image',`prd_price`='$prd_price',`prd_warranty`='$prd_warranty',
		`prd_accessories`='$prd_accessories',`prd_new`='$prd_new',`prd_promotion`='$prd_promotion',
		`prd_status`='$prd_status',`prd_featured`='$prd_featured',`prd_details`='$prd_details' WHERE prd_id='$prd_id'";
$query=mysqli_query($conn,$sql_up);




 ?>