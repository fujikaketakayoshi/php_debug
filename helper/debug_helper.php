<?php
/*
 * application/helpers/debug_helper.php
 */

if ( ! function_exists('var_log')) {
    function var_log($var) {
        error_log(var_export($var, true) . "\n", 3, APPPATH . '/logs/debug.log');
    }
}
