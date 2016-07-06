<?php

/**
 *
 * Work Items Loop
 **
 * @copyright 2016 johnswork.com
 *
 * Utilize a common loop based on the $temp and $count variables passed
 * to the loop function.
 * Outputs list of items based on passed variables for work type items
 *
 */

    class workLoop {

        public function loop( $temp, $count) {

            // Test if $temp == dev || des
            if ($temp == 'dev')
            {
                $template = 'development.php';
            } elseif ($temp == 'des')
            {
                $template = 'design.php';
            }

            //    Query for all pages using the $template.php template
            $args = array(
                'post_type' 	=> 'page',
                'post_status' 	=> 'publish',
                'meta_query' 	=> array(
                    array(
                        'key' 		=> '_wp_page_template',
                        'value' 	=> $template, // template file name
                    )
                )
            );


            echo '<ul class="work-blocks">';

                $devposts = new WP_Query( $args );
                $thisCount = 0;

                while( $thisCount <= $count ) : $devposts->the_post(); // Loop through $count times
                echo '<li class="development-work work-block">';

                    if ($temp == 'dev')
                    {
                        echo '<a href="' . get_field('client_website_link') . '" target="_blank">';
                    } else {
                        echo '<a href="' . get_the_permalink() . '" target="_blank">';
                    }

                    echo '<span class="view-info">View<i class="fa fa-plus-circle" aria-hidden="true"></i></span>';
                       echo the_post_thumbnail();
                        echo '<div class="text-block">';
                            echo '<span class="work-title md-text">';
                                    echo the_title();
                                    echo the_excerpt();
                            echo '</span>';
                        echo '</div>';
                    echo '</a>';
                echo '</li>';

                $thisCount++; // Increase Counter
            endwhile;

            echo '</ul>';

            wp_reset_query(); // Reset the Query

        }
    }