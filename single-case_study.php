<?php
/**
 * $Desc
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
          <h2 class="heading-title"></h2>         <ol class="breadcrumb"><li><a href="http://localhost/im">Home</a>  / </li> <li class="active">Case Studies</li></ol>      </div>   
   </div>
       <div class="container-full">
    <div class="content-page-wrap">
             <div class="main-page-content base-layout row has-no-sidebar">
          
            <div class="content-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="content-page-inner">   
                      <div class="clearfix post-2827 page type-page status-publish hentry grow-content-body" id="2827">

         
        
        <div class="vc_wpb_row_inner  vc_custom_1531905334683"><div class="vc_row wpb_row vc_row-fluid remove_padding row-container"><div class="container"><div class="row "><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="widget gsc-heading   style-default text-dark">
      
<div class="gsc-service-carousel ">
         <div class="gva-service-items services-1 clearfix">
         <div class="lg-block-grid-3 md-block-grid-3 sm-block-grid-2 xs-block-grid-2">


         <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; // end of the loop. ?>
           
</div></div></div></div></div></div></div></div>



    <?php do_action( 'enzio_after_page_content' ); ?>


<?php get_footer(); ?>
