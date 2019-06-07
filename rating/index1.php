<?php
// Here the member id is harcoded.
// You can integrate your authentication code here to get the logged in member id
$member_id = 1;
require_once ("Rate.php");
$rate = new Rate();
$result = $rate->getAllPost();
?>


<link href="style.css" rel="stylesheet" type="text/css" />
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>function highlightStar(obj,id) {
	removeHighlight(id);		
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('highlight');
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
}

function removeHighlight(id) {
	$('.demo-table #tutorial-'+id+' li').removeClass('selected');
	$('.demo-table #tutorial-'+id+' li').removeClass('highlight');
}

function addRating(obj,id) {
	$('.demo-table #tutorial-'+id+' li').each(function(index) {
		$(this).addClass('selected');
		$('#tutorial-'+id+' #rating').val((index+1));
		if(index == $('.demo-table #tutorial-'+id+' li').index(obj)) {
			return false;	
		}
	});
	$.ajax({
	url: "add_rating.php",
	data:'id='+id+'&rating='+$('#tutorial-'+id+' #rating').val(),
	type: "POST",
    success: function(data) {
        $("#star-rating-count-"+id).html(data);    
        }
	});
}

function resetRating(id) {
	if($('#tutorial-'+id+' #rating').val() != 0) {
		$('.demo-table #tutorial-'+id+' li').each(function(index) {
			$(this).addClass('selected');
			if((index+1) == $('#tutorial-'+id+' #rating').val()) {
				return false;	
			}
		});
	}
} </script>


  <div  class="demo-table">
            
<?php
if (! empty($result)) {
    $i = 0;
  		$tutorial["id"]=$row['prd_id'];
        $ratingResult = $rate->getRatingByTutorialForMember($tutorial["id"], $member_id);
        $ratingVal = "";
        if (! empty($ratingResult[0]["rating"])) {
            $ratingVal = $ratingResult[0]["rating"];
        }
        ?>

               
                    
                    <div 
 id="tutorial-<?php echo $tutorial["id"]; ?>"
                        class="star-rating-box">
                        <input type="hidden" name="rating" id="rating"
                            value="<?php echo $ratingVal; ?>" />
                        <ul
                            onMouseOut="resetRating(<?php echo $tutorial["id"]; ?>);">
  <?php
        for ($i = 1; $i <= 5; $i ++) {
            $selected = "";
            if (! empty($ratingResult[0]["rating"]) && $i <= $ratingResult[0]["rating"]) {
                $selected = "selected";
            }
            ?>
  <li class='<?php echo $selected; ?>'
                                onmouseover="highlightStar(this,<?php echo $tutorial["id"]; ?>);"
                                onmouseout="removeHighlight(<?php echo $tutorial["id"]; ?>);"
                                onClick="addRating(this,<?php echo $tutorial["id"]; ?>);">&#9733;</li>  
  <?php }  ?>
</ul>
                      

                   
                </div>
           
<?php
    }

?>
</div>