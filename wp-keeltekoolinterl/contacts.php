<?php /* Template Name: Contact Page */ get_header(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript">
    (function($) {
    /*
    *  render_map
    *
    *  This function will render a Google Map onto the selected jQuery element
    *
    *  @type    function
    *  @date    8/11/2013
    *  @since   4.3.0
    *
    *  @param   $el (jQuery element)
    *  @return  n/a
    */
    function render_map( $el ) {

        // var
        var $markers = $el.find('.marker');

        // vars
        var args = {
            zoom        : 16,
            center      : new google.maps.LatLng(0, 0),
            mapTypeId   : google.maps.MapTypeId.ROADMAP
        };

        // create map               
        var map = new google.maps.Map( $el[0], args);

        // add a markers reference
        map.markers = [];

        // add markers
        $markers.each(function(){

            add_marker( $(this), map );

        });

        // center map
        center_map( map );
    }
    function add_marker( $marker, map ) {

        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

        // create marker
        var marker = new google.maps.Marker({
            position    : latlng,
            map         : map
        });

        // add to array
        map.markers.push( marker );

        // if marker contains HTML, add it to an infoWindow
        if( $marker.html() )
        {
            // create info window
            var infowindow = new google.maps.InfoWindow({
                content     : $marker.html()
            });

            // show info window when marker is clicked
            google.maps.event.addListener(marker, 'click', function() {

                infowindow.open( map, marker );

            });
        }

    }
    function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

            var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
            // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 16 );
        }
        else
        {
            // fit to bounds
            map.fitBounds( bounds );
        }

    }
    $(document).ready(function(){

        $('.acf-map').each(function(){

            render_map( $(this) );

        });

    });

    })(jQuery);
    </script>
    <section id="hero" class="gmap_addon">
        <?php 
        $location = get_field('gmapser');
        if( !empty($location) ):
        ?>
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <?php endif; ?>
        <div class="wrap">
            <div class="contact-widget">
                <div class="contact-bar">
                    <?php echo do_shortcode('[contact-form-7 id="44" title="Contact Us"]'); ?>
                </div>
            </div><!-- contact-widget -->
            <div class="contact-main-block">
                <ul class="clearfix">
                    <li class="contact-block-1">
                        <?php the_field('adress_block_left'); ?>
                    </li>
                    <li class="contact-block-2">
                        <?php the_field('adress_block_right'); ?>
                    </li>
                </ul>
            </div><!-- contact-main-block -->
        </div><!-- wrap -->
    </section>

</header><!-- begin #soorita-test -->

<section id="middleArea" class="bg-gray padding-30 no-white">
    <div class="wrap">
    <?php if( have_rows('personal') ): ?>
        <ul id="team" class="block-grid four-up clearfix">
            
            <?php while( have_rows('personal') ): the_row(); 
                // vars
                $personal_photo = get_sub_field('personal_photo');
                $personal_name = get_sub_field('personal_name');
                $personal_profile = get_sub_field('personal_profile');
                $personal_phone = get_sub_field('personal_phone');
                $personal_email = get_sub_field('personal_email');
            ?>

            <li>
                <div class="thumb">
                    <img width="138" height="138" src="<?php echo $personal_photo; ?>" class="attachment-contacts wp-post-image" alt="<?php echo $personal_name; ?>">
                </div>
                <h3><?php echo $personal_name; ?></h3>
                <p><?php echo $personal_profile; ?><br>
                <?php echo $personal_phone; ?><br>
                Электронная почта:&nbsp;<a href="mailto:<?php echo $personal_email; ?>"><?php echo $personal_email; ?></a></p>
            </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>