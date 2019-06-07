<style>
#login1{
	color: #f72c2c !important;
	font-weight: bold;
	margin-right: 13px;
	}
#login1:hover {
	
	color:#FFF !important;}	
</style>
<?php session_start(); 
include_once("admin/facebook/config.php");
?>
<div id="cart" class="col-lg-4 col-md-4 col-sm-12">

<?php


if(isset($_SESSION['userData'])){
	
	echo '<img style="border-radius:100%" src="'.$_SESSION['userData']['picture'].' " /> <a style="
    margin: 10px;
"  href="admin/facebook/logout.php">Đăng xuất </a>';
	
}
else  
{echo '<a id="login1" href="admin/login.php"> Đăng nhập </a>';}
	 ?>
     
   

    <a class="mt-4 mr-2" href="index.php?page_layout=cart"> giỏ hàng</a><span class="mt-3"><?php if(!isset($_SESSION['cart'])){echo 0;} else {echo count($_SESSION['cart']); }?></span>
</div>