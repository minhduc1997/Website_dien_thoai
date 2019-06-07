<?php
if(!defined("T")){
	header("location:login.php");
	}
ob_start();

include_once("../config/connect.php");
$prd_id=$_GET['prd_id'];

$sql="select * from product  where prd_id = ' $prd_id' ";
$query=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($query);

$query_cat=mysqli_query($conn,"select*from category");

 ?>

 <script>
// Xem hình ảnh trước khi upload
function previewImg(event) {
    // Gán giá trị các file vào biến files
    var files = document.getElementById('img_file').files; 

    // Dùng vòng lặp for để thêm các thẻ img vào khung chứa ảnh xem trước
    for (i = 0; i < files.length; i++)
    {
        // Thêm thẻ img theo i
        $('#formUpload .box-preview-img').append('<img src="" id="' + i +'">');
 		$('img').width(150);
        // Thêm src vào mỗi thẻ img theo id = i
        $('#formUpload .box-preview-img img:eq('+i+')').attr('src', URL.createObjectURL(event.target.files[i]));
    }   
}


</script>




<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
<script>
    $(document).ready(function(){
        $("input[value='hien']").click(function(){
            $("#div2").show();
        })
        $("#img_file").click(function(){
            $("#div2").hide();
        })
    })
</script>


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý sản phẩm</a></li>
            <li class="active">Sản phẩm số <?php echo $rows['prd_id'] ?></li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sản phẩm: Sản phẩm số <?php echo $rows['prd_id'] ?></h1>
        </div>
    </div><!--/.row-->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="prd_name" required class="form-control" value="<?php echo  $rows['prd_name'] ;?> "  placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="number" name="prd_price" required value="<?php echo $rows['prd_price']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Bảo hành</label>
                                    <input type="text" name="prd_warranty" required value="<?php echo  $rows['prd_warranty'] ?>" class="form-control">
                                </div>    
                                <div class="form-group">
                                    <label>Phụ kiện</label>
                                    <input type="text" name="prd_accessories" required value="<?php echo  $rows['prd_accessories'] ?>" class="form-control">
                                </div>                  
                                <div class="form-group">
                                    <label>Khuyến mãi</label>
                                    <input type="text" name="prd_promotion" required value="<?php echo  $rows['prd_promotion'] ?>" class="form-control">
                                </div>  
                                <div class="form-group">
                                    <label>Tình trạng</label>
                                    <input type="text" name="prd_new" required value="<?php echo  $rows['prd_new'] ?>" type="text" class="form-control">
                                </div>  
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                
                                
                                
                                
                                
                                
                                
                                    <label>Ảnh sản phẩm</label>
                             		 
        	<div id="formUpload">
            <input type="file" name="img_file" multiple onchange="previewImg(event);" id="img_file" accept="image/*">
            <div  class="box-preview-img"> 	</div>    
</div>  							
   			
                                    </div>
                                    <img width="160px" id="div2" src="img/images/<?php echo $rows['prd_image']; ?>" />
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="cat_id" class="form-control">
                                    
                                    <?php while($row_Cat=mysqli_fetch_array($query_cat)){ ?>
                                        <option value="<?php echo $row_Cat['cat_id']; ?>"<?php if ($rows['cat_id']==$row_Cat['cat_id']){echo  "selected";} else{ echo "";} ?> value=1 ><?php echo $row_Cat['cat_name']; ?></option>
                                       					<?php }?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="prd_status" class="form-control">
                                        <option <?php if ($rows['prd_status']==1 ){echo  "selected";} else{ echo "";} ?> value=1>Còn hàng</option>
                                        <option <?php if ($rows['prd_status']==0 ){echo  "selected";} else{ echo "";} ?> value=2>Hết hàng</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Sản phẩm nổi bật</label>
                                    <div class="checkbox">
                                        <label>
                                            <input name="prd_featured" type="checkbox" <?php if ($rows['prd_featured']==1 ){echo  "checked";} else{ echo "";} ?> value=1>Nổi bật
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea  name="prd_details" required class="form-control"  rows="3"><?php echo  $rows['prd_details'] ?></textarea>
                                    </div>
                                <button type="submit" name="sbm" class="btn btn-primary">
                                
                          Cập nhật</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery.form.js"></script>
</div>	<!--/.main-->	

 <?php

if(isset($_POST['sbm'])){
		 $prd_image='';
		 $prd_name=$_POST['prd_name'];
		 $prd_price=$_POST['prd_price'];
		 $prd_warranty=$_POST['prd_warranty'];
		 $prd_accessories=$_POST['prd_accessories'];
		 $prd_promotion=$_POST['prd_promotion'];
		 $prd_new=$_POST['prd_new'];
		if($_FILES['img_file']['name']==''){
			$prd_image= $rows['prd_image'];}
		else{
		$prd_image= $_FILES['img_file']['name'];
		} 
		 $cat_id=$_POST['cat_id'];
		 $prd_status=$_POST['prd_status'];
		 $prd_featured=$_POST['prd_featured'];
		 $prd_details=$_POST['prd_details'];
	
	
	
	
		$sql_up = "UPDATE `product` SET `cat_id`='$cat_id',`prd_name`='$prd_name'								   ,`prd_image`='$prd_image',`prd_price`='$prd_price',`prd_warranty`='$prd_warranty',
		`prd_accessories`='$prd_accessories',`prd_new`='$prd_new',`prd_promotion`='$prd_promotion',
		`prd_status`='$prd_status',`prd_featured`='$prd_featured',`prd_details`='$prd_details' WHERE prd_id='$prd_id'";
$query=mysqli_query($conn,$sql_up);


header ('location:index.php?page_layout=product');
}


 ?>
 