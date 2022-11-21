<?php 
require_once 'header.php';
?>



<div class="row ">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bk2">
    
    <h5 class="title1">NewsDynamical</h5>
    <p class="article1">
    <?php 
    $info3=$admindb->ExecSQL("select * from article where posid='settop' order by id desc limit 0,1",$conn);
    //print_r($info3);
    //die;
    ?>
    
    <?php 
    echo mb_substr($info3[0]['title'],0,13,'utf-8');
    ?>
    <br>
    <?php echo mb_substr($info3[0]['content'],0,100,'utf-8');?>
    ...[<a href="Dynamical_news.php?id=<?php echo $info3[0]['id']?>">详细</a>]<br>
    
    <?php 
    
      $info4=$admindb->ExecSQL("select * from article where posid='setindex' order by id desc limit 0,5",$conn);
    //  print_r($info4);
   // die;
    ?>
    <?php 
    for($i=0;$i<count($info4);$i++){
    ?>
    <ul id="smalltitle">
    <li>
    <a href="Dynamical_news.php?id=<?php echo $info4[$i]['id'];?>">
    
    <?php echo mb_substr($info4[$i]['title'],0,22,'utf-8')?>
    </a>
    </li>
    </ul>
    <?php 
    }
    ?>
       
   </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bk3"><h5 class="title1">AboutUS</h5><img src="image/img2.png" style="width:93%;margin: 0 auto;"/><p class="article1" style="padding-right: 30px;padding-top: 8px;">
<?php 
$info2=$admindb->ExecSQL("select * from single where id=14",$conn);
//print_r($info2);
//die;

?>

<?php echo $info2[0]['content'];?>
.</p></div>
<?php 
$info5=$admindb->ExecSQL("select * from produce where posid='setindex' order by id desc limit 0,8",$conn);
//print_r($info5);
//die;
?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bk4"><h5 class="title1">New Product<span style="float: right;">more</span></h5><a href="product_show.php?id=<?php echo $info5[6]['id']?>"><img src="./admin/<?php echo $info5[6]['pic']?>" style="display: block;" width="200" height="100"/></a><img src="image/img4.png" id="im" style="float: left;"/><p class="article1">

<?php echo $info5[7]['content'];?>
</p></div>
</div>


<?php 
require_once 'footer.php';

?>
