<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $info[0]['site_title']?></title>
         <meta name="keywords" content="<?php echo $info[0]['site_keywords']?>">
        <meta name="description" content="<?php echo $info[0]['site_description']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type='text/css' href="bootstrap/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type='text/css' href="css/index.css">
        <link rel="stylesheet" type='text/css' href="css/Dynamical_news.css">
         <link rel="stylesheet" type='text/css' href="css/Product.css">
        <link rel="stylesheet" type='text/css' href="css/Product_show.css">
            
                <link rel="stylesheet" type='text/css' href="css/guestbook.css"/>
 <link rel="stylesheet" type='text/css' href="css/contact.css"/>
        <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

 <div class="container bk">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <nav class="navbar navbar-default" role="navigation" style="border: none;">


        <div class="container-fluid"> 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#example-navbar-collapse">
                    <span class="sr-only">切换导航</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">菜鸟教程</a>

    <div class="navbar-collapse collapse" style="margin-left:185px;text-align: center;margin-top: 272px;"> 
        <ul class="nav navbar-nav" style="display:inline-block;float: none;">
            <!-- 
            <li class="active">
            
            <a href="#">Home</a></li>
            <li><a href="#">AboutUS</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">ContactUs</a></li>
            -->
            
            <?php 
            
            $info1=$admindb->ExecSQL("select * from category where pid=0",$conn);
            
          //  print_r($info1);
           // die;
     
           	?>
           	 <li><a href="index.php?id=<?php echo $info1[0]['id'];?>"><?php echo $info1[0]['name'];?></a></li>
           	 <li><a href="AboutUs.php?id=<?php echo $info1[1]['id'];?>"><?php echo $info1[1]['name'];?></a></li>
           	      	 <li><a href="dynamical.php?id=<?php echo $info1[2]['id'];?>"><?php echo $info1[2]['name'];?></a></li>
           	      	 	 <li><a href="product_display.php?id=<?php echo $info1[3]['id'];?>"><?php echo $info1[3]['name'];?></a></li>
           	      	 	  <li><a href="guestbook.php?id=<?php echo $info1[4]['id'];?>"><?php echo $info1[4]['name'];?></a></li>
           	      	 	   <li><a href="contact.php?id=<?php echo $info1[5]['id'];?>"><?php echo $info1[5]['name'];?></a></li>
 <?php
            ?>
          </ul> 
   </div>
</nav>
        </div>
        
</div>
        
</div>

