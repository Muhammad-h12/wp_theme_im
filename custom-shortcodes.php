<?php 

function subscribe_link(){
    return 'Follow us on <a rel="nofollow" href="https://twitter.com/Hostinger?s=20">Twitter</a>';
    }
add_shortcode('subscribe', 'subscribe_link');


// Sessions Shortcode : This shortcode will display all the coming programs

function displaySessions(){

$args = array(  
    'post_type' => 'session',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    // 'orderby' => 'title', 
    'order' => 'Asc',
    
);

$loop = new WP_Query( $args ); 
$sessionVenue;        
?>

    <section class="carousel" id="carousel">
         <div class="carousel__wrapper">
            <div>
               <div class="carousel__content">
                  <div class="carousel__container">
                <?php  while ( $loop->have_posts() ) : $loop->the_post(); 
                   ?>
                     <div class="carousel__slide">
                        <div class="card">
                           <div class="card__inner">
                            <h2><?php  print  the_title();?></h2>
                            <?php if ( $feature_img ) { ?>
                            <img src="print $featured_img['url']" width=”print $featured_img['width']" height="print $featured_img['height']" /> 
                        <?php    }  
                            the_excerpt(); 
                        ?>
                        <a href="<?php the_permalink(); ?>">CLick here </a>
                        <h3><?php the_field('session_venue');?></h3><?php 
                        $sessionDate = new DateTime(the_field('session_start_date'));
                        echo $sessionDate->format('D,M');
                        echo "<br>" . $sessionDate->format('H,i'); 
                        ?>
                          </div>
                        </div>
                     </div>
                   <?php endwhile; 
                   wp_reset_postdata(); 
                   ?>
                     <!-- <div class="carousel__slide">
                        <div class="card">
                           <div class="card__inner"></div>
                        </div>
                     </div>

                     <div class="carousel__slide">
                        <div class="card">
                           <div class="card__inner"></div>
                        </div>
                     </div>

                     <div class="carousel__slide">
                        <div class="card">
                           <div class="card__inner"></div>
                        </div>
                     </div>

                     <div class="carousel__slide">
                        <div class="card">
                           <div class="card__inner"></div>
                        </div>
                     </div> -->
                </div>
                    <div id="prev-slide" class="arrow arrow--left">
                        <i class="bx bx-chevron-left"></i>
                    </div>
                    <div id="next-slide" class="arrow arrow--right">
                        <i class="bx bx-chevron-right"></i>
                    </div>
               </div>
            </div>
         </div>
      </section>

      <?php

}
// end of function displaySessions


function displayPrograms(){
  
  $args = array(  
    'post_type' => 'custom_programs',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    // 'orderby' => 'title', 
    'order' => 'Asc',
    
);

$loop = new WP_Query( $args ); 
// $sessionVenue;  

?>

      <div class="init-carousel-owl owl-carousel" data-items="4" data-items_lg="4" data-items_md="3" data-items_sm="2" data-items_xs="2" data-loop="0" data-speed="1000" data-auto_play="1" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="1" data-pagination="0" data-mouse_drag="1" data-touch_drag="1" >


<?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
  
 <div class="item">
      <div class="team-block team-v2">
       <div class="team-imag">
       
        <a href="http://localhost/im/?gva_team=laurie-laforest-copy-copy"><img  src="<?php the_field('program_image') ?>" class="attachment-enzio_medium size-enzio_medium wp-post-image" alt="" loading="lazy" /></a>
        
                    <!-- <div class="socials-team">
                      <a class="gva-social" href="#">
<i class="fa fa-facebook"></i></a>
                
                  <a class="gva-social" href="#">
                   <i class="fa fa-twitter"></i>
                </a>
                
               <a class="gva-social" href="#">
                   <i class="fa fa-linkedin-square"></i>
                </a>
                
                     </div> -->
          </div>
    <div class="team-content">
    <div class="team-name"><a href="<?php the_post_thumbnail(); ?>"><br><?php the_title();?></a></div>
    
       <div class="team-job"><?php the_content(); ?></div>
          <div class="team-body"></div>
             <div class="team-skills clearfix">
          <div class="vc_progress_bar wpb_content_element vc_progress-bar-color-bar_blue">
                                              <div class="vc_general vc_single_bar clearfix">
                  <p class="vc_label"><strong>Venue : <?php echo the_field('program_venue'); ?></strong></p>
                  <p class="vc_label"></p>
                  <span class="vc_bar" data-percentage-value="68" data-value="68"></span>
                </div>
                
                  <div class="vc_general vc_single_bar clearfix">
                  <small class="vc_label"><strong>Program Date : <?php echo the_field('program_starting_date'); ?></strong><span class="vc_label_units"></span></small>
                  <span class="vc_bar" data-percentage-value="90" data-value="90"></span>
                </div>
                
                                              <div class="vc_general vc_single_bar clearfix">
                  <small class="vc_label"><strong>Program Time  : <?php echo the_field('program_time'); ?></strong><span class="vc_label_units"></span></small>
                  <span class="vc_bar" data-percentage-value="98" data-value="98"></span>
                </div>
                
                        </div>  
       </div>
   
 </div>
</div>        </div>
        
<?php endwhile; 
                   wp_reset_postdata(); 
                   ?>
       
    </div>
</div></div></div></div></div></div></div></div>   
  
<?php }; 



// display case Studies

function displayCaseStudies(){?>


<div class="widget gva-blogs-grid blog-grid-style section-blog style-2 ">
  
  <div class="widget-content">
        <div class="init-carousel-owl owl-carousel" data-items="3" data-items_lg="3" data-items_md="3" data-items_sm="2" data-items_xs="2" data-loop="0" data-speed="1000" data-auto_play="0" data-auto_play_speed="1000" data-auto_play_timeout="3000" data-auto_play_hover="1" data-navigation="1" data-rewind_nav="1" data-pagination="0" data-mouse_drag="1" data-touch_drag="1" >
             
              
              
              <article class="post">
                                    <div class="entry-thumb">
                <a href="http://localhost/im/how-to-find-cheap-travel-accommodation/">
                  <img width="750" height="500" src="http://localhost/im/wp-content/uploads/2016/01/post-4-750x500.jpg" class="attachment-enzio_medium size-enzio_medium wp-post-image" alt="" loading="lazy" />                </a>
              </div>
                                <div class="entry-content">
            <div class="content-inner">
              <div class="content-top entry-meta">
                                  <span class="cat-links"><a href="http://localhost/im/category/movies/" rel="category tag">Movies</a>, <a href="http://localhost/im/category/music/" rel="category tag">Music</a></span>&nbsp;&nbsp;|&nbsp;&nbsp;
                  <span class="entry-date"><a href="http://localhost/im/how-to-find-cheap-travel-accommodation/" rel="bookmark"><time class="entry-date" datetime="2016-01-03T15:27:38+00:00">January 3, 2016</time></a></span>                              </div>  
                              <h5 class="entry-title">
                  <a href="http://localhost/im/how-to-find-cheap-travel-accommodation/">How To Find Cheap Travel</a>
                </h5>
                            
                              <div class="entry-body">
                  It is a well-known fact that when any discussion on lead generation takes place, quality conquers                </div>
                          </div>  
          </div>
        </article>
          </div>
       
  </div>
</div>
</div></div></div></div></div></div></div>
<?php 
}

add_shortcode('c_sessions_sc','displaySessions');
add_shortcode('c_programs_sc','displayPrograms');
add_shortcode('c_casestudies_sc','displayCaseStudies');

















