<?php get_header(); ?>

<!-- banner section start -->
<?php
$hero = get_field('hero');
if (have_rows('hero')): //parent group field
   while (have_rows('hero')):
      the_row();
      ?>
      <div class="banner_section">
         <div class="container-fluid padding_0">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="padding_left_0">
                              <h1 class="retailer_text">
                                 <?php echo $hero['hero_title'] ?>
                              </h1>
                              <p class="search_text">
                                 <?php echo $hero['hero_content'] ?>
                              </p>
                              <div class="btn_main">
                                 <?php
                                 $read_link = get_sub_field('read_more');
                                 if ($read_link):
                                    $link_url = $read_link['url'];
                                    $link_title = $read_link['title'];
                                    $link_target = $read_link['target'] ? $read_link['target'] : '_self';
                                    ?>

                                    <div class="more_bt"><a href="<?php echo esc_url($link_url); ?>"
                                          target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    </div>

                                 <?php endif; ?>

                                 <?php
                                 $quote_link = get_sub_field('get_a_quote');
                                 if ($read_link):
                                    $link_url = $quote_link['url'];
                                    $link_title = $quote_link['title'];
                                    $link_target = $quote_link['target'] ? $quote_link['target'] : '_self';
                                    ?>

                                    <div class="contact_bt"><a href="<?php echo esc_url($link_url); ?>"
                                          target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    </div>

                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="<?php echo esc_url($hero['hero_right_img']) ?>" class="image_1"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php endwhile; ?>
<?php endif; ?>
</div>
<!-- banner section end -->
<!-- header section end -->

<!-- headvisorre section -->
<?php $what_do = get_field('what_we_do');
if (have_rows('what_we_do')):
   while (have_rows('what_we_do')):
      the_row();
      ?>
      <div class="advisor_section">
         <div class="container">
            <h1 class="what_text">
               <?php echo $what_do['section_title'] ?>
            </h1>
         </div>
         <?php
         $advisor_repeater = get_field('what_we_do_box');
         if (have_rows('what_we_do_box')):
            ?>
            <div class="advisor_section_2 layout_padding">
               <div class="container">
                  <div class="box_section">
                     <div class="row">
                        <?php
                        while (have_rows('what_we_do_box')):
                           the_row();
                           $image = get_sub_field('image');
                           $title = get_sub_field('title');
                           $content = get_sub_field('content');
                           ?>

                           <div class="col-lg-4 col-sm-12">
                              <div class="box_main">
                                 <div class="image_3"></div>
                                 <h4 class="consultative_text">
                                    <?php echo $title; ?>
                                 </h4>
                                 <p class="readable_text">
                                    <?php echo $content; ?>
                                 </p>
                              </div>
                           </div>
                        <?php endwhile; ?>
                     </div>
                  </div>
               </div>
            </div>
         <?php endif; ?>
      </div>
   <?php endwhile; ?>
<?php endif; ?>
<!-- about section start -->
<?php
$about_us = get_field('about_us');
if (have_rows('about_us')): //parent group field
   while (have_rows('about_us')):
      the_row();
      ?>
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div><img src="<?php echo esc_url($about_us['about_image']) ?>" class="image_8"></div>
               </div>
               <div class="col-sm-6">
                  <h1 class="about_taital">
                     <?php echo $about_us['section_title'] ?>
                  </h1>
                  <p class="lorem_text">
                     <?php echo $about_us['section_content'] ?>
                  </p>
                  <?php
                  $link = get_sub_field('link');
                  if ($link):
                     $link_url = $link['url'];
                     $link_title = $link['title'];
                     $link_target = $link['target'] ? $link['target'] : '_self';
                     ?>
                     <div class="more_bt">
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   <?php endwhile; ?>
<?php endif; ?>
<!-- about section end -->

<!-- portfolio section start -->
<?php
$portfolio = get_field('portfolio');
if (have_rows('portfolio')):
   ?>
   <div class="portfolio_section layout_padding">

      <?php
      while (have_rows('portfolio')):
         the_row();
         ?>
         <div class="container">
            <h1 class="what_text">Our Work Portfolio</h1>
         </div>


         <?php
         $portfolio_image = get_field('portfolio_image');
         if (have_rows('portfolio_image')):
            ?>
            <div class="container-fluid">
               <div class="images_section">
                  <div class="row">
                     <?php
                     while (have_rows('portfolio_image')):
                        the_row();
                        $img = get_sub_field('image');

                        ?>
                        <div class="col-sm-4 padding_0">
                           <div class="container_1">
                              <img src="<?php echo $img ?>" alt="Avatar" class="image" style="width:100%">
                              <div class="middle">
                                 <div class="text"><img
                                       src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/search-icon.png"></div>
                              </div>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  </div>

               </div>
            </div>

         <?php endif ?>
      </div>
   <?php endwhile; ?>
<?php endif; ?>
<!-- portfolio section end -->
<!-- Providing section start -->
<?php
$business = get_field('business_service');
//if( have_rows('business') ):
//while ( have_rows('business') ): the_row();
?>
<div class="portfolio_section_2 layout_padding">
   <div class="container">
      <h1 class="best_taital">
         <?php echo $business['title'] ?>
      </h1>
      <p class="best_text">
         <?php echo $business['content'] ?>
      </p>

      <?php
      $link = $business['link'];
      if ($link):
         $link_url = $link['url'];
         $link_title = $link['title'];
         $link_target = $link['target'] ? $link['target'] : '_self';
         ?>
         <div class="get_bt">
            <a href="<?php echo esc_url($link_url) ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo $link_title ?></a>
         </div>
      <?php endif; ?>
   </div>
</div>
<?php //endwhile; ?>
<?php //endif; ?>
<!--providing section end -->
<!-- consulting section start -->
<?php
$consulting = get_field('consulting');
if (have_rows('consulting')):
   while (have_rows('consulting')):
      the_row();
      ?>
      <div class="consulting_section layout_padding">
         <div class="container">
            <h1 class="what_text">
               <?php echo $consulting['title'] ?>
            </h1>
            <div class="consulting_section_2">
               <div class="row">
                  <div class="col-sm-6">
                     <p class="lorem_text_1">L
                        <?php echo $consulting['left_content'] ?>
                     </p>
                     <?php
                     $link = get_sub_field('link');
                     if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="more_bt">
                           <a href="<?php echo esc_url($link_url) ?>" target="<?php //echo esc_atr($link_target)?>"><?php echo $link_title ?></a>
                        </div>
                     <?php endif; ?>
                  </div>
                  <div class="col-sm-6">
                     <div class="image_8"><img src="<?php echo esc_url($consulting['right_img']) ?>"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php endwhile; ?>
<?php endif; ?>
<!-- consulting section end -->
<!-- client section start -->
<?php
$client_feedback = get_field('client_feedback');
if (have_rows('client_feedback')):
   while (have_rows('client_feedback')):
      the_row();
      ?>
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="what_text">
               <?php echo $client_feedback['title'] ?>
            </h1>

            <?php
            $client_detail = get_field('client_detail');
            if (have_rows('client_detail')):
               ?>
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <?php
                     while (have_rows('client_detail')):
                        the_row();
                        $content = get_sub_field('message');
                        $image = get_sub_field('image');
                        $client_name = get_sub_field('client_name')
                           ?>
                        <div class="carousel-item active">
                           <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur
                              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           </p>
                           <div class="image_16"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/img-16.png">
                           </div>
                           <div class="adipiscing_text">Adipiscing<br>Magna</div>
                        </div>
                     <?php endwhile; ?>
                  </div>
               </div>
            <?php endif; ?>
         </div>
      </div>
   <?php endwhile; ?>
<?php endif; ?>
<!-- client section end -->
<!-- contact section start -->
<div class="Contact_section layout_padding">
   <div class="container">
      <h1 class="categories_text">Rqueste a call back</h1>
      <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority have
         suffered a</p>
      <div class="email_box">
         <div class="input_main">
            <div class="container">
               <form action="/action_page.php">
                  <!-- <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Phone Numbar">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email Address" name="Email Address">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div> -->
                  <?php echo apply_shortcodes('[contact-form-7 id="89" title="Untitled"]'); ?>
               </form>
            </div>
            <div class="send_bt"><a href="#">SEND</a></div>
         </div>
      </div>
   </div>
</div>
<!-- contact section end -->

<?php get_footer(); ?>