<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style.css">
<!--[if lt IE 9]>
<script src="<?= base_url();?>assets/js/html5shiv.min.js"></script>
<script src="<?= base_url();?>assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Friday, December 05, 2045</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="<?= base_url();?>images/logo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="<?= base_url();?>images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <?php foreach ($cat as $value):?>
                      
          <li><a href="<?php echo base_url();?>Project/showCat/<?= $value->cat_id;?>"><?php echo $value->cat_name;?></a></li>
         <?php endforeach;?>
        </ul>
      </div>
    </nav>
  </section>

  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <?php foreach ($lastNew as  $value):?>
            <li><a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><img src="<?php echo $value->image?>" alt=""><?php echo $value->title?></a></li>
            <?php endforeach ;?>
          </ul>

          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sliderSection">
  
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php foreach ($lastNew as  $value):?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" > <img src="<?php echo $value->image;?>" alt="test"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><?php echo $value->title?></a></h2>
              <p><?php echo substr($value->description, 0,100)?>اكمل القراءه </p>
            </div>
          </div>
         
          <?php endforeach ;?>
        </div>
      </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="latest_post">
           <h2><span>Latest post</span></h2>
            <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
                <li>
                   <?php foreach ($lastNewLim as $value):?>
                  <div class="media"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" class="media-left"> <img alt="" src="<?= $value->image?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" class="catg_title"> <?php echo $value->title?> </a></div>
                  </div>
              </li>
                 <?php endforeach;?>
              </ul>
              <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
          </div>
         </div>
    </div>
  </section>