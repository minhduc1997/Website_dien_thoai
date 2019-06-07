<style>

#product{
	padding:0 15px;
	margin-top:20px;}
#product-head, #product-body, #comment, #comments-list{
	background:#FFF;
	border-radius:3px;
	padding:10px 0;}
#product-img{
	text-align:center;}	
#product-img img{
	width:250px;}
#product-details h1, #product-body h3, #comment h3{
	font-size:18px;
	font-weight:bold;}	
#product-details ul li{
	list-style:none;
	height:30px;
	line-height:30px;}
#product-details ul li span{
	font-weight:bold;}		
#price-number{
	font-size:20px;
	font-weight:bold;
	color:#eb1f27;}	
#price, #status{
	border-top:1px dashed #333333;
	margin-top:10px;}
#status{
	font-weight:bold;
	color:#5cb85c;}		
#product-body, #comment, #comments-list{
	margin-top:10px;}	
#product-body h3{
	margin-bottom:20px;}		
#add-cart a:hover{
	color:#EB1F27;
	background:#FFF;}	
#add-cart a{
	display:inline-table;
	border-radius:3px;
	border:1px solid #EB1F27;
	background:#EB1F27;
	padding:15px 20px;
	color:#FFF;
	text-decoration:none;}
#comment button{
	background:#EB1F27;
	border:none;}
#comment button:hover{
	background:#C60A11;
	border:none;}
.comment-item ul li{
	list-style:none;}	
.comment-item ul li:last-child{
	padding:15px 0 5px 0;
	border-bottom:1px dashed #333;}
.comment-item:last-child ul li:last-child{
	border:none;}
#pagination ul{
	float:right;
	margin-top:20px;}
#pagination ul li a.page-link{
	color:#333333;}			
#pagination ul li a.page-link:hover{
	background:#EB1F27;
	color:#FFF;}
#pagination ul li.active a{
	background:#EB1F27;
	border-color:#dee2e6;
	color:#FFF;}



</style>
<?php
if(!defined("T")){
	header("location:login.php");
	}
	
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = '`vietpro_mobile_shop`';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($conn){
    // thiết lập tiếng việt
    mysqli_query($conn, "SET NAMES 'utf8'");
}
else{
    die("Kết nối thất bại!").mysqli_connect_error();
}


if(!isset($_GET['prd_id'])){
	
	?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Quản lý bình luận</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách bình luận</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
       
      
    </div>
    
    <?php
	echo  '<div ><h3>Xin chọn sản phẩm để quản lý bình luận</h3><a href="index.php?page_layout=product">click vào đây</a></div>';
	
	
	 die();
	
	}
$prd_id=$_GET['prd_id'];

?>

<SCRIPT LANGUAGE="JavaScript">
      function confirmAction() {
        return confirm("Bạn muốn xóa sản phẩm này ?")
      }
 
</SCRIPT>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Quản lý bình luận</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách bình luận</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
       
      
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table 
                        data-toolbar="#toolbar"
                        data-toggle="table">

                        <thead>
                        <tr>
                            <th id="md" data-field="id" data-sortable="true">ID</th>
                            <th data-field="name"  data-sortable="true">Tên sản phẩm</th>
                            <th data-field="price" data-sortable="true">Giá</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Trạng thái</th>
                            <th>Danh mục</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                      <!-- --><?php	
					  $sql=" SELECT * FROM `category`INNER JOIN product ON category.`cat_id`= product.`cat_id` WHERE prd_id=$prd_id";
					  $query=mysqli_query($conn, $sql);
					  $row = mysqli_fetch_array($query)
					  
						 ?>
					  
					  			
                                <tr>
                                    <td  style=""> <?php echo $row['prd_id'] ?></td>
                                    
                                    <td id= "<?php echo $row['prd_id'] ?>"style=""><?php echo $row['prd_name'] ?></td>
                                    <td style=""><?php echo number_format($row['prd_price'], 0, ',', '. '); ?> VNĐ</td>
                                    <td style="text-align: center"><img width="130" height="180" src="img/images/<?php echo $row['prd_image'];?>" /></td>
                                    <td><span <?php
									if($row['prd_status']==1) 
										echo "class='label label-success'"; 
									else 
										 echo "class='label label-danger'";
									 ?>> <?php 
									if($row['prd_status']==1) 
										echo "Còn hàng"; 
									else 
										 echo "Hết hàng";
									 
									 ?></span></td>
                                    <td id=""><?php echo $row['cat_name'] ?></td>
                                    <td class="form-group">
                                        <a href="index.php?page_layout=edit_product&prd_id=<?php echo $row['prd_id']?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a onclick="return confirmAction() " href="del_product.php?id=<?php echo $row['prd_id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>
                                    </td> 
                                </tr>
                              
								<?php  ?>
                               
                             </tbody>
                    </table>
                    
          <div id="comments-list" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php
			
			  $sqla = "SELECT * FROM comment
			WHERE prd_id = $prd_id
			ORDER BY comm_id ASC
			";
			
			
	$querya = mysqli_query($conn, $sqla);
	$numa=mysqli_num_rows($querya);
	if($numa==0){
		echo  "Sản  phẩm không có bình luận nào ";
		}
	
            while($rowa = mysqli_fetch_array($querya)){
			?>
            <div class="comment-item">
                <ul>
                    <li><b><?php echo $rowa['comm_name'];?></b></li>
                    <li><?php echo $rowa['comm_date'];?></li>
                    <li>
                        <p><?php echo $rowa['comm_details'];?></p>
                        <p><?php echo $rowa['comm_id'];?></p>
                        
                    </li>
                    <li id="xóa"><a href="del_comment.php?comm_id=<?php echo $rowa['comm_id'] ?>&prd_id=<?php echo $prd_id ?>">xóa</a></li>
                    
                </ul>
                
            </div>
            <?php
			}
			?>
        </div>
    </div>
                    <div id="noi_dung"></div>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                         <?php 
						  
						// echo $list_page;
						 ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div><!--/.row-->	
</div>	<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
</script>	

