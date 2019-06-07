<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>

$('body').on({
    mousemove: function(e){
        // Tỉnh tổng số các ngôi sao
        var currentMousePosition = e.pageX - $(this).offset().left;
        var width = $(this).width();
        var rounded = Math.round((currentMousePosition/width)*10);

        var starNumber = rounded/2;

        // Xóa và thêm Class
        $(this).removeClass();
        $(this).addClass('stars s-' + starNumber);

        // Lưu trữ bình chọn hiện tại
        $(this).attr('data-rating', starNumber);
    },
    mouseleave:function(){
        $(this).removeClass();
        $(this).addClass('stars s-' + $(this).attr('data-default'));
    },
    click: function(){
        //Ẩn bộ chọn mức độ hiện tại
        $(this).replaceWith($('<div>', {
            'class': 'loading'
        }));

        // Gửi yêu cầu
        $.ajax('rating.php',{
            rating: $(this).attr('data-rating')
        }, function(d){
            // Xử lý kết quả
            if(d.result == 'error'){
                alert(d.msg);
            } else {
                $(this).removeClass();
                $(this).addClass('stars s-' + d.rating);
                $(this).attr('data-default', d.rating);
                $temp = $(this);
                $('.loading').replaceWith($temp);
            }
        }, 'json');
    }
}, '.stars');
</script>
<body>

<div class='stars s-0.5' data-default='0.5'>
    0.5 Stars
</div>
</body>
</html>