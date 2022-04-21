<!-- footer -->
<footer class="section footer">
    <div class="container footer-container grid">
        <div class="heading">
            <span class="footer-logo">lemontur <span class="logo-descr">s.r.l.</span></span>
        </div>
        <div class="footer-content">
            <div class="footer-content_number">
                <p class="footer-content_number__descr">Pentru orice detalii tefefonați la numărul</p>
                <a href="" class="footer-content_number__number footer_link">+ (373) 68349062</a>
            </div>
            <div class="footer-content_social">
                <p class="footer-content_social__descr">Sau contactaține pe una dintre platforme</p>
                <div class="footer-content_social__items">

                    <?php if( have_rows('hero_social_links') ): ?>
                        <?php while( have_rows('hero_social_links')): the_row(); 
                            $name = get_sub_field( 'hero_social_link_name' );
                            $url = get_sub_field( 'hero_social_link_url' );?>
                                <a href="<?php  echo $url; ?>" class="footer-content_social__items__item footer_link"><?php  echo $name; ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="developer">
                <p>Developed by <a href="">Evgheny</a></p>
            </div>
        </div>
    </div>
</footer>
        <!-- End footer -->
        
    </div>
    

</body>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</html>