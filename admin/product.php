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

if(isset($_GET['page'])){
	$page=$_GET['page'];
	
	
	}
	else {
		
		$page=1;
		}
		
		$trang = $page * 5 - 5;
		
		//previous
		$list_page='';
		$page_prv = $page - 1 ;
		if ($page_prv <=0){
			$page_prv=1;
			
			}
			$list_page.='<li class="page-item"><a class="page-link" href="index.php?page_layout=product&page='.$page_prv.'">&laquo;</a></li>
';
		//mid  
		
		for($i=1; $i<=6; $i++){
			
			if ($i==$page){
				$active='active';
				
				}
			 else  
			 $active ='';
			
			$list_page.=' <li class="page-item '.$active.'"><a class="page-link" href="index.php?page_layout=product&page='.$i.'"">'.$i.'</a></li>';}
			
 		
	   //next 
	   $next = $page +1 ;
	  
		if ($next > 6){
			$next=6;
			}  
			$list_page.=' <li class="page-item"><a class="page-link" href="index.php?page_layout=product&page='.$next.'">&raquo;</a></li>';
	  
		
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
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?page_layout=add_product" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
        </a>
      
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
                            <th>Xem bình luận</th>
                        </tr>
                        </thead>
                        <tbody>
                      <!-- --><?php	
					  $sql=" SELECT * FROM `category`INNER JOIN product ON category.`cat_id`= product.`cat_id` ORDER BY `prd_id` DESC LIMIT $trang,5 ";
					  $query=mysqli_query($conn, $sql);
					  while($row = mysqli_fetch_array($query)){
					  
						 ?>
					  
					  			
                                <tr><a href="index.php?page_layout=comment">
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
                                        <a onclick="return confirmAction() " href="del_product.php?id=<?php echo $row['prd_id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td> 
                                    <td><a href="index.php?page_layout=comment&prd_id=<?php echo $row['prd_id']?>">xem bình luận</a></td> 
                                </tr>
                              
								<?php } ?>
                               
                             </tbody>
                    </table>
                    <div id="noi_dung">dasdadasddsd</div>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                         <?php 
						  
						 echo $list_page;
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

