<?php require_once 'header.php';?>




<div class="row">


<?php 

//$info=$admindb->ExecSQL("select * from config",$conn);
//print_r($info);
//die;
  $info6=$admindb->ExecSQL("select * from client",$conn);
//print_r($info6);
//die;
?>

    <div class="col-lg-3 visible-lg col-md-3 visible-md col-sm-3 visible-sm col-xs-12 hidden  sider">
    
<ul class="siderbars">
   <li class="user"><span><?php echo $info6[0]['title']?><a href="#"><img src="image/clients.png"></a></span></li> 
   <li class="timer"><dl style="display:inline-block; padding-left:45px;"><dt>24TimerServer</dt><dd><?php echo $info[0]['company_phone']?></dd></dl></li> 
   <li class="facebook" style="height:63px;"><dl style="display:inline-block; padding-left:45px;;padding-top:12px;"><dt>FACEBOOK</dt><dd><?php echo $info[0]['company_weixin']?></dd></dl></li>
   <li class="email" style="height:66px;"><dl style="display:inline-block; padding-left:47px;;padding-top:17px;"><dt>Email</dt><dd><?php echo $info[0]['company_email']?></dd></dl></li>
</ul>

    </div>



<div class="col-lg-9 visible-lg col-md-9 visible-md col-sm-9 visible-sm col-xs-12 visible-xs bh">

<?php 
$id=$_GET['id'];
  $info7=$admindb->ExecSQL("select * from single where id='$id'",$conn);
//print_r($info7);
//die;
?>


<h5 class="title6">Home-><?php echo $info7[0]['title']?></h5>
<p class="underline"></p>
<h6 class="title7">What is Lorem Ipsum?</h6>
<p class="article2">
<?php echo $info7[0]['content']?>.
</p>

</div>



</div>


<?php 
require_once 'footer.php';

?>
