<?php
if(!defined("T")){
	header("location:login.php");
	}
 ?>
 

<SCRIPT LANGUAGE="JavaScript">
      function confirmAction() {
        return confirm("Bạn muốn thêm sản phẩm này ?")
      }
 
</SCRIPT>
<?php 
$sql="select *  from category  ";
$query = mysqli_query($conn, $sql);
?>

<?php
	 if(isset($_POST['sbm'])){
		 include_once("../config/connect.php");
			
			
		 $prd_name=$_POST['prd_name'];
		 $prd_price=$_POST['prd_price'];
		 $prd_warranty=$_POST['prd_warranty'];
		 $prd_accessories=$_POST['prd_accessories'];
		 $prd_promotion=$_POST['prd_promotion'];
		 $prd_new=$_POST['prd_new'];
		 
		 $prd_image= $_FILES['img_file']['name'];
		 $prd_image_tmp= $_FILES['img_file']['tmp_name'];
		 move_uploaded_file($prd_image_tmp,'img/images/'.$prd_image);
		 
		 $cat_id=$_POST['cat_id'];
		 $prd_status=$_POST['prd_status'];
		 if(isset($_POST['prd_featured'])){
		 $prd_featured=$_POST['prd_featured'];}
		 else {
			 
			 $prd_featured=0;
			 }
		 
		 
		 $prd_details=$_POST['prd_details'];
		
	
		 $sql=
		 "
		 INSERT INTO `product`( `cat_id`, `prd_name`, `prd_image`, `prd_price`, `prd_warranty`, `prd_accessories`, `prd_new`, `prd_promotion`, `prd_status`, `prd_featured`, `prd_details`) 
		 VALUES ('$cat_id','$prd_name','$prd_image','$prd_price','$prd_warranty','$prd_accessories','$prd_new','$prd_promotion','$prd_status','$prd_featured','$prd_details')
		 ";
		 $query=mysqli_query($conn,$sql);
		
header('location:index.php?page_layout=product');
		
		 
		 }
	 

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


 
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li><a href="">Quản lý sản phẩm</a></li>
            <li class="active">Thêm sản phẩm</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm sản phẩm</h1>
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
                                    <input required name="prd_name" class="form-control" placeholder="">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input required name="prd_price" type="number" min="0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Bảo hành</label>
                                    <input required name="prd_warranty" type="text" class="form-control">
                                </div>    
                                <div class="form-group">
                                    <label>Phụ kiện</label>
                                    <input required name="prd_accessories" type="text" class="form-control">
                                </div>                  
                                <div class="form-group">
                                    <label>Khuyến mãi</label>
                                    <input required name="prd_promotion" type="text" class="form-control">
                                </div>  
                                <div class="form-group">
                                    <label>Tình trạng</label>
                                    <input required name="prd_new" type="text" class="form-control">
                                </div>  
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh sản phẩm</label>
                             		 
        	<div id="formUpload">
            <input type="file" name="img_file" multiple onchange="previewImg(event);" id="img_file" accept="image/*">
            <div class="box-preview-img"> 	</div>    
</div>  
   
                                    </div>
                                
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="cat_id" class="form-control">
                                    <?php while($row=mysqli_fetch_array($query)){?>
                                        <option value=<?php echo  $row['cat_id'] ?> ><?php echo $row['cat_name'] ?></option>
            				            <?php          }       ?>
      		                              </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="prd_status" class="form-control">
                                        <option value=1 selected>Còn hàng</option>
                                        <option value=0>Hết hàng</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Sản phẩm nổi bật</label>
                                    <div class="checkbox">
                                        <label>
                                            <input name="prd_featured" type="checkbox" value=1>Nổi bật
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea required name="prd_details" class="form-control" rows="3"></textarea>
                                    </div>
                                <button    name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                                <button type="reset" class="btn btn-default">Làm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
            
       
            
        </div><!-- /.row -->
     <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery.form.js"></script>
</div>	<!--/.ma


