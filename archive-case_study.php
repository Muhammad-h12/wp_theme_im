<?php
/**
 *
 * @author     Gaviasthemes Team     
 * @copyright  Copyright (C) 2016 Gaviasthemess. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

	get_header(apply_filters('enzio_get_header_layout', null )); ?>

	
<div id="wp-main-content" class="clearfix main-page title-layout-hero">
     
   <div class="custom-breadcrumb hero text-light text-center" style="background-image: url('http://localhost/im/wp-content/themes/enzio/images/bg-header.jpg')">
            <div class="container">
               <h2 class="heading-title">Case Studies</h2>         <ol class="breadcrumb"><li><a href="http://localhost/im">Home</a>  / </li> <li class="active">Case Studies</li></ol>      
            </div>   
   </div>
   <div class="container-full">
      <div class="content-page-wrap">
         <div class="main-page-content base-layout row has-no-sidebar">
          
            <div class="content-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="content-page-inner">   
                      <div class="clearfix post-2827 page type-page status-publish hentry grow-content-body" id="2827">

         
        
        <div class="vc_wpb_row_inner  vc_custom_1531905334683">
         <div class="vc_row wpb_row vc_row-fluid remove_padding row-container">
            <div class="container">
               <div class="row ">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                     <div class="widget gsc-heading  align-center style-default text-dark">
      
<div class="gsc-service-carousel my--2">
         <div class="gva-service-items services-1 clearfix">
         <div class="lg-block-grid-3 md-block-grid-3 sm-block-grid-2 xs-block-grid-2">


         <?php while ( have_posts() ) : the_post(); ?>




<div class="item">
   <div class="service-block service-item-v1">      
      <div class="service-images lightGallery">
            <div class="image-item">
                        <?php if (has_post_thumbnail() ): ?>
                           
                     <a href="<?php the_permalink();?>" class="" data-rel="">
                       
                        <!-- <img src=""  class="hidden" alt="Chemical Research Engineering" /> -->
                      <?php   the_post_thumbnail('medium'); ?>
                     </a>
                     <!-- <a href="http://localhost/im/service/chemical-research-engineering/">                       <img width="960" height="640" src="http://localhost/im/wp-content/uploads/2015/12/service-6.jpg" class="attachment-full size-full" alt="" loading="lazy" />                     </a> -->
                     <?php endif ;?>
             </div>
         </div> 
                        
      <div class="service-content">
         <div class="content-inner">
            <div class="title-inner"><h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></div> 
            <div class="desc"><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 10);
                    } ?> <a href="<?php the_permalink(); ?></div> 
            <div class="readmore"><a class="btn-inline" href="<?php the_permalink();?>">Read more</a></div>
         </div>    
      </div>
   </div>
</div>

<!-- end of item -->

<?php endwhile; // end of the loop. ?>   


                   </div>
      </div> 
                  </div>     
           
</div></div></div></div></div></div></div></div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>





<?php get_footer(); ?>
