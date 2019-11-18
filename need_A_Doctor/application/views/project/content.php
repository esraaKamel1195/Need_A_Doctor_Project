
<?php
$this->load->view('project/header2');
?>
 <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <?php foreach ($FTechno as  $value):?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" > <img src="<?php echo $value->image;?>" alt="test"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><?php echo $value->title?></a></h2>
              <p><?php echo substr($value->description, 0,100)?>...</p>
            </div>
          </div>
         
          <?php endforeach ;?>
          <?php foreach ($FSport as  $value):?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" > <img src="<?php echo $value->image;?>" alt="test"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><?php echo $value->title?></a></h2>
              <p><?php echo substr($value->description, 0,100)?>...</p>
            </div>
          </div>
         
          <?php endforeach ;?>
          <?php foreach ($FPolic as  $value):?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" > <img src="<?php echo $value->image;?>" alt="test"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><?php echo $value->title?></a></h2>
              <p><?php echo substr($value->description, 0,100)?>...</p>
            </div>
          </div>
         
          <?php endforeach ;?>
          <?php foreach ($FFash as  $value):?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" > <img src="<?php echo $value->image;?>" alt="test"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><?php echo $value->title?></a></h2>
              <p><?php echo substr($value->description, 0,100)?>...</p>
            </div>
          </div>
         
          <?php endforeach ;?>
           <?php foreach ($FUrgem as  $value):?>
          <div class="single_iteam"> <a href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" > <img src="<?php echo $value->image;?>" alt="test"></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo base_url();?>Project/shownew/<?php echo $value->new_id;?>" ><?php echo $value->title?></a></h2>
              <p><?php echo substr($value->description, 0,100)?>...</p>
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

<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Sport</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <?php foreach ($FSport as  $value):?> 
                  <figure class="bsbig_fig"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="featured_img"> <img alt="" src="<?php echo $value->image;?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>"><?php echo $value->title?></a> </figcaption>
                    <p><?php echo substr($value->description,0,2000)?></p>
                  </figure>
                 <?php endforeach ?> 
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <?php foreach ($newsport as  $value):?> 
                  <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="media-left"> <img alt="" src="<?= $value->image;?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="catg_title"> <?php echo $value->title?></a> </div>
                  </div>
                </li>
                <?php endforeach ?> 
              </ul>
            </div>
          </div>
          

          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>policy</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                      <?php foreach ($FPolic as  $value):?> 
                    <figure class="bsbig_fig"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="featured_img"> <img alt="" src="<?php echo $value->image;?>"> <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>"><?php echo $value->title?></a> </figcaption>
                      <p></p>
                    </figure>
                      <?php endforeach ?> 
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <?php foreach ($newPolic as  $value):?> 
                    <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="media-left"> <img alt="" src="<?php echo $value->image;?>"> </a>
                      <div class="media-body"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="catg_title"> <?php echo $value->title;?></a> </div>
                    </div>
                  </li>
                   <?php endforeach ?> 
                 
                  
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technology</span></h2>
                <ul class="business_catgnav">
                   
                  <li>
                     <?php foreach ($FTechno as  $value):?>  
                    <figure class="bsbig_fig wow fadeInDown"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="featured_img"> <img alt="t" src="<?php echo $value->image?>"> <span class="overlay"></span> </a>
               
                      <figcaption> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>"><?php echo $value->title?></a> </figcaption>
                      <p><?php echo substr(substr($value->description, 0,100), 0,100)?></p>
                    </figure>
                    <?php endforeach ?>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>

                   <?php foreach ($newTecno as  $value):?>
                    <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="media-left"> <img alt="" src="<?php echo $value->image?> "> </a>
                      <div class="media-body"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="catg_title"> <?php echo $value->title?></a> </div>
                    </div>
                  <?php endforeach ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="<?php echo base_url();?>images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="<?php echo base_url();?>images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="<?php echo base_url();?>images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="<?php echo base_url();?>images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="<?php echo base_url();?>images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url();?>images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="<?php echo base_url();?>images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>fashion</span></h2>   
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                    <?php foreach ($FFash as  $value):?>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>"> <img src="<?php echo $value->image ;?>" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>"><?php echo $value->title?></a> </figcaption>
                    <p><?php echo substr($value->description,0,200);?>...</p>
                  <?php endforeach ;?>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <?php foreach ($newFashion as  $value):?>
                  <div class="media wow fadeInDown"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="media-left"> <img alt="" src="<?php echo $value->image;?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url();?>Project/shownew/<?= $value->new_id;?>" class="catg_title"><?= $value->title;?></a> </div>
                  </div>
                   <?php endforeach ;?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="<?php echo base_url();?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="<?php echo base_url();?>images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <?php
$this->load->view('project/footer');
?>