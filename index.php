<?php get_header(); ?>

        <!-- Modal -->
        <section class="modal" data-modal="modal">
    <div class="modal-window">
        <div class="modal-window_control">
            <h6 class="modal-window_control__heading">Contactează prin una dintre metode</h6>
            <button class="modal-window_control__closed">
                <svg  class="closed_item"  viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="0.843224" y1="11.6464" x2="11.4498" y2="1.03985" />
                    <line x1="1.55033" y1="0.646447" x2="12.1569" y2="11.253" />
                </svg>
            </button>
           
        </div>
        <div class="modal-window_social">
                       
            <?php if( have_rows('modal_contacts') ): ?>
                <?php while( have_rows('modal_contacts')): the_row(); 
                    $name = get_sub_field( 'modal_contacts_name' );
                    $url = get_sub_field( 'modal_contacts_url' );?>
                        <a href="<?php  echo $url; ?>" class="modal-window_social__link"><?php  echo $name; ?></a>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
        <!-- End Modal -->
        <!-- Hero -->
        <section class="hero-section">
    <div class="container hero-container grid">
        <div class="heading hero-heading">
            <h1 class="hero-heading_h1"><?php  echo get_field('hero_h1');?></h1>
            <p class="hero-heading_descr">
                <?php  echo get_field('hero_h1_descr');?>
            </p>
        </div>
        <div class="hero-social">
            <div class="hero-social_links">
                <?php if( have_rows('hero_social_links') ): ?>
                    <?php while( have_rows('hero_social_links')): the_row(); 
                        $name = get_sub_field( 'hero_social_link_name' );
                        $url = get_sub_field( 'hero_social_link_url' );?>
                            <a href="<?php  echo $url; ?>" class="hero-social_link link"><?php  echo $name; ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


            
        </div>
    </div>
</section>
<div class="hero-slider">
    <div class="container">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <!-- Slides -->
            <!-- Render Slides -->
            <?php
                    $images = get_field('hero_slider');

                    foreach( $images as $image ){ ?>
                        <div class="swiper-slide">
                            <div class="swiper-zoom-container">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="">
                            </div>
                        </div>
                    
                    <?php };    ?>
                    <!-- END Render Slides -->
            
            </div>
            
            </div>
        </div>
    </div>
</div>
        <!-- End Hero -->
        <!-- about -->
        <section class="about-section">
    <div class="container about-container grid">
        <div class="heading about-heading">
            <h2 class="about-heading_h2"><?php  echo get_field('about_heading');?></h2>
        </div>
        <div class="about-content">
            <p class="about-content_text">
                <?php  echo get_field('about_content');?>
            </p>
            <div class="about-content_numbers">

                <?php if( have_rows('about_number') ): ?>
                    <?php while( have_rows('about_number')): the_row(); 
                        $name = get_sub_field( 'about_number_number' );
                        $descr = get_sub_field( 'about_number_descr' );?>
                            <div class="about-number">
                                <span class="number"><?php  echo $name; ?></span>
                                <span class="number-descr"><?php  echo $descr; ?></span>
                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            
            </div>
        </div>
    </div>
</section>
        <!-- End about -->
        <!-- services -->
        <section class="section services-section">
    <div class="container services-container grid">
        <div class="heading services-heading">
            <h2 class="services-heading_h2"><?php  echo get_field('services_heading');?></h2>
        </div>
        <div class="services-content">
            

                <?php if( have_rows('services') ): ?>
                            <?php while( have_rows('services')): the_row(); 
                                $name = get_sub_field( 'service_name' );
                                $descr = get_sub_field( 'services_descr' );
                                $photo = get_sub_field( 'service_photo' );
                                $button = get_sub_field( 'service_button_name' );
                                ?>
                                <div class="services-content_card" style="background-image: url('<?php  echo $photo; ?>')">
                                    <div class="overlay"></div>
                                    <div class="card-heading">
                                        <h3 class="card-heading_h3"><?php  echo $name; ?></h3>
                                        <p class="card-heading_descr">
                                            <?php  echo $descr; ?>
                                        </p>
                                    </div>
                                    <div class="card-button">
                                        <button href="" class="button btn-white" data-path="modal"><?php  echo $button; ?></button>
                                    </div>
                                </div>
                    <?php endwhile; ?>
                <?php endif; ?>
        


            
        </div>
    </div>
</section>
<section class="section otherService">
    <div class="container otherService-container grid">
        <div class="heading otherService-heading">
            <h2 class="otherService-heading_h2"><?php  echo get_field('other_heading');?></h2>
        </div>
        <div class="otherServices-content">

            <?php if( have_rows('other_services') ): ?>
                            <?php while( have_rows('other_services')): the_row(); 
                                $name = get_sub_field( 'other_services_name' );
                                $descr = get_sub_field( 'other_services_descr' );
                                ?>
                                <div class="otherServices-content_item">
                                    <h6 class="otherServices-content_item__h6"><?php  echo $name; ?></h6>
                                    <p class="otherServices-content_item__descr"><?php  echo $descr; ?></p>
                                </div>


                    <?php endwhile; ?>
                <?php endif; ?>



        </div>
    </div>
</section>
        <!-- End services -->
        <!-- Road -->
        <section class="section route">
    <div class="container route-container">
        <div class="route-heading">
            <h2 class="route-heading_h2"><?php  echo get_field('route_heading');?></h2>
            <h6 class="route-heading_time">Durata: <?php  echo get_field('traveling_time');?></h6>
        </div>
        <div class="route-map">
            <?php  echo get_field('map');?>
        </div>
    </div>
</section>
<section class="section traveled">
    <div class="container traveled-container">
        <h2 class="traveled-heading"><?php  echo get_field('traveled_heading');?></h2>
        <div class="traveled-content">


        <?php if( have_rows('traveled_country') ): ?>
                            <?php while( have_rows('traveled_country')): the_row(); 
                                $name = get_sub_field( 'traveled_country_name' );
                                $photo = get_sub_field( 'country_photo' );
                                ?>
                                <div class="traveled-content_item" style="background-image: url(<?php  echo $photo; ?>);">
                                    <div class="overlay"></div>
                                    <h3 class="traveled-content_item__h3"><?php  echo $name; ?></h3>
                                    <div class="traveled-content_item__city">


                                    <?php if( have_rows('traveled_country_city_name') ): ?>
                                        <?php while( have_rows('traveled_country_city_name')): the_row(); 
                                            $cityname = get_sub_field( 'city_name' );?>

                                        <p class="traveled-content_item__city__item"><?php  echo $cityname; ?></p> 
                                            
                                        <?php endwhile; ?>
                                    <?php endif; ?>  

                                    </div>
                                </div>


                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</section> 
        <!-- End Road -->
        <!-- FAQ -->
        <section class="section faq">
    <div class="container faq-container grid">
        <div class="heading faq-heading">
            <h2 class="faq-heading_h2"><?php  echo get_field('faq_heading');?></h2>
        </div>
        <div class="faq-content">

            
        <?php if( have_rows('faq_content') ): ?>
                            <?php while( have_rows('faq_content')): the_row(); 
                                $questions = get_sub_field( 'faq_questions' );
                                $answer = get_sub_field( 'faq_answer' );
                                ?>
                                

                                <details class="faq-content_dropdown">
                                    <summary class="faq-content_dropdown__control">
                                        <h6 class="faq-content_dropdown__control__h6"><?php  echo $questions; ?></h6>
                                    </summary>
                                    <div class="faq-content_dropdown__text">
                                            <?php  echo $answer; ?>
                                    </div>

                                </details>


                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
    </div>
</section>
        <!-- End FAQ -->

<?php get_footer(); ?>
