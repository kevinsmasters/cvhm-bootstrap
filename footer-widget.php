<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) || is_active_sidebar( 'footer-5' ) ) {?>
        <div id="footer-widget" class="row m-0">
            <div class="container-fluid">
                <div class="row"><?php // TODO: CHANGE THIS TO FLEX ?>
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="widget-col"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="widget-col"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="widget-col at-180"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div class="widget-col at-140"><?php dynamic_sidebar( 'footer-4' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-5' )) : ?>
                        <div class="widget-col at-170"><?php dynamic_sidebar( 'footer-5' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php }
