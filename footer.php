    
        </div>
        
        <div id="when_where_container" class="col d-none d-md-block">
            When & Where
        </div>
    </div>
    <div id="footer_container" class="row col-1 m-0 p-0">
        <div id="social_bar_container" class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-01.png"/>
                    <span class="d-none d-md-inline">SPONSORSHIP PDF</span>
                </div>
                <div class="col text-center">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-02.png"/>
                    <span class="d-none d-md-inline">MEETUP</span>
                </div>
                <div class="col text-center">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-03.png"/>
                    <span class="d-none d-md-inline">TWITTER</span>
                </div>
                <div class="col text-center">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-04.png"/>
                    <span class="d-none d-md-inline">FACEBOOK</span>
                </div>
                <div class="col text-center">
                    <img class="social_bar_icon" src="<?php bloginfo('template_url'); ?>/images/ICONS/web-icons-05.png"/>
                    <span class="d-none d-md-inline">PHOTOS ON FLICKR</span>
                </div>
                
                
            </div>
        </div>
    </div>
    
    <div id="sidebar" class="d-md-none">
        <?php wp_nav_menu(array('theme_location' => 'menu_part1')); ?>
        <?php wp_nav_menu(array('theme_location' => 'menu_part2')); ?>
    </div>
    
    <div id="venue_container" class="d-none flex-column col-md-9">
        <div id="venue_details_wrapper" class="d-flex">
            <div id="venue_date_wrapper">
                <div id="venue_date">FEB 10</div>
                <div id="venur_year">TWO THOUSAND AND SEVENTEEN</div>
            </div>
            <div id="venue_time_wrapper">
                <div id="venue_time">8:00</div>
                <div id="venue_tod">IN THE MORNING</div>
            </div>
            <div id="venue_address_wrapper">
                <div id="venue_address_line1">DAYANAND SAGAR UNIVERSITY</div>
                <div id="venue_address_line2">KUDLU GATE, BANGALORE</div>
            </div>
        </div>
        <div id="venue_map" class="d-flex col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25419.21550976037!2d77.63132719065717!3d12.88776716113802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14b1d3b5bc97%3A0x201eccba58e7911b!2sDayananda+Sagar+University!5e0!3m2!1sen!2sus!4v1512311750510" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="close_button"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
    </div>
    
    <div id="venue_container_small" class="d-none d-md-none flex-column col-md-9">
        <div id="venue_details_wrapper_row1" class="d-flex">
            <div id="venue_date_wrapper" class="justify-content-around">
                <div id="venue_date">FEB 10</div>
                <div id="venue_year">TWO THOUSAND AND SEVENTEEN</div>
            </div>
            <div id="venue_time_wrapper">
                <div id="venue_time">8:00</div>
                <div id="venue_tod">IN THE MORNING</div>
            </div>
        </div>
        <div id="venue_details_wrapper_row2" class="d-flex">
            <div id="venue_address_wrapper">
                <div id="venue_address_line1">DAYANAND SAGAR UNIVERSITY</div>
                <div id="venue_address_line2">KUDLU GATE, BANGALORE</div>
            </div>
        </div>
        <div id="venue_map" class="d-flex col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25419.21550976037!2d77.63132719065717!3d12.88776716113802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14b1d3b5bc97%3A0x201eccba58e7911b!2sDayananda+Sagar+University!5e0!3m2!1sen!2sus!4v1512311750510" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div id="close_button"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
    </div>
    
    <div id="search_slider_mobile" class="d-none">
        <?php get_search_form(true); ?>
        <div id="close_button"><i class="fa fa-times-circle-o" aria-hidden="true"></i></div>
    </div>
    
</div>

    <?php wp_footer(); ?>
</body>

</html>