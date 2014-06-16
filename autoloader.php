<?php
spl_autoload_register( 'autoloader' );
function autoloader( $class )
{
    $class = strtolower( str_replace( '_', '-', $class ) );
    if ( file_exists( plugin_dir_path( __FILE__ ) . 'classes/class-' . $class . '.php' ) ) {
        include( plugin_dir_path( __FILE__ ) . 'classes/class-' . $class . '.php' );
    }
}

require NF_PLUGIN_DIR . '/vendors/h2o/h2o.php';

do_action( 'nf_init' );