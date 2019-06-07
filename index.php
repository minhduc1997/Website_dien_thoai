<?php
define('TEMPLATE', true);
ob_start();
include_once('config/connect.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Home</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/category.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" href="css/success.css">
<link rel="stylesheet" href="css/popup.css">
 <link rel = "styleheet" type = "text/css" href = "tooltipster/dist/css/tooltipster.bundle.min.css"/>
<link rel="stylesheet" href="css/back_to_top.css">

<link href="style.css" rel="stylesheet" type="text/css" />
 <script type = "text/javascript" src = "http://code.jquery.com/jquery-1.10.0.min.js"></script>
 <script type = "text/javascript" src = "tooltipster/dist/js/tooltipster.bundle.min.js"></script>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>


        
</head>
<body>

<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
       <div id="fb-root"></div>
        	<!--	Logo	-->
            <?php include_once('modules/logo/logo.php');?>
            <!--	End Logo	-->
            <!--	Search	-->
            <?php include_once('modules/search/search_box.php');?>
            <!--	End Search	-->
            <!--	Cart	-->
            <?php include_once('modules/cart/cart_notify.php');?>
            <!--	End Cart	-->
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<!--	Menu	-->
                <?php include_once('modules/category/menu.php');?>
                <!--	End Menu	-->
            </div>
        </div>
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	<!--	Slider	-->
               
                <?php include_once('modules/slide/slide.php');?>
                <!--	End Slider	-->
				<?php
                if(isset($_GET['page_layout'])){
					switch($_GET['page_layout']){
						case 'category': include_once('modules/category/category.php'); break;
						case 'search': include_once('modules/search/search.php'); break;
						case 'product': include_once('modules/products/product.php'); break;
						case 'cart': include_once('modules/cart/cart.php'); break;
						case 'success': include_once('modules/cart/success.php'); break;
						case 'compare': include_once('modules/products/compare.php'); break;

						
					}
				}
				else{
					include_once('modules/products/featured.php');
					include_once('modules/products/latest.php');
				}
				?>
                
                
               
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<!--	Banner	-->
                <?php include_once('modules/banners/banner.php');?>
                <?php include_once('who_online/counter.php');?>
               

                <!--	End Banner	-->
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->

<div id="footer-top">
	<div class="container">
    	<div class="row">
        	<!--	Logo Footer	-->
            <?php include_once('modules/logo/logo_footer.php');?>
            <!--	End Logo Footer	-->
            <!--	Address	-->
            <?php include_once('modules/address/address.php');?>
            <!--	End Address	-->
            <!--	Service	-->
            <?php include_once('modules/services/service.php');?>
            <!--	End Service	-->
            <!--	Hotline	-->
            <?php include_once('modules/hotline/hotline.php');?>
            <!--	End Hotline	-->
        </div>
    </div>
</div>

<!--	Footer	-->
<div id="footer-bottom">
	<div class="container">
    	<div class="row">
        	<!--	Footer	-->
            <?php include_once('modules/footer/footer.php');?>
           

            <!--	End Footer	-->
        </div>
    </div>
</div>
<!--	End Footer	-->
<div id="fl813691" style="height: 152px;"> 
<div id="eb951855"> 
<div id="cob263512"> 
<div id="coh963846"> 
<ul id="coc67178"> 
<li id="pf204652hide"><a class="min" href="javascript:pf204652clickhide();" title="Ẩn đi">Ẩn</a></li> 
<li id="pf204652show" style="display: none;"><a class="max" href="javascript:pf204652clickshow();" title="Hiện lại">Xem </a></li> 
</ul> 
Phát triển doanh nghiệp</div> 
<div id="co453569"> 
<!-- code ads --> 
<a target="_blank" href="http://localhost/VMS/PHP02/" > <img style="margin:3px 1px 1px 3px;" border="0" width="264" src="https://i.doanhnhansaigon.vn/2009/12/24/khoinghiepbaihoc-2-1508128427.jpg" height="115" title="Minh Đức Company - Phát triển doanh  nghiệp"/></a> 
<!-- code ads --> 

</div> 
</div></div></div> 












</body>
</html>
