
<?php
/*
$arr = ["Windows Phone","Android","IOS","Windows Mobile"];
$a = $_SERVER['HTTP_USER_AGENT'];
            if(preg_match("~".implode("|",$arr)."~",$a)){
                    echo 'C телефона';
                }else {
                    echo 'С компа';
                }
                
$screenWidth='<script type="text/javascript">document.write(a);</script>';
echo$screenWidth."<hr>";
$screenHeight='<script type="text/javascript">document.write(b);</script>';
echo$screenHeight;*/
?>





<html>
<div class = 'mobcontrols' style = 'display:none;'>
<div class = 'left'>
    
</div>
<div class = 'right'>
    
</div>

</div>
<br>
<br><br><br>
<script>
var a = document.getElementsByTagName('html')[0].style.width = screen.width;
var b = document.getElementsByTagName('html')[0].style.height = screen.height; 
function rightTouchStart(){
    rightPressed = true;
    floImgStand.src = rightMoveArtImg1;
}

function rightTouchEnd(){
    rightPressed = false;
    floImgStand.src = sitMoveArtImg;
}

function leftTouchStart(){
    leftPressed = true;
    floImgStand.src = leftMoveArtImg1;
}

function leftTouchEnd(){
    leftPressed = false;
    floImgStand.src = sitMoveArtImg;

}
    document.getElementById('panel').style.display='none';
    document.getElementsByClassName('right')[0].addEventListener('touchstart',rightTouchStart);
    document.getElementsByClassName('right')[0].addEventListener('touchend',rightTouchEnd);
    document.getElementsByClassName('left')[0].addEventListener('touchstart',leftTouchStart);
    document.getElementsByClassName('left')[0].addEventListener('touchend',leftTouchEnd);
    
alert(document.getElementsByTagName('html')[0].style.width);
alert(document.getElementsByTagName('html')[0].style.height);
alert(document.getElementById('myCanvas').width);
alert(document.getElementById('myCanvas').height);
</script>
</html>