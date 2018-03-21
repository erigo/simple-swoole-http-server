<?php

if (!function_exists('trace')) {
    function trace($msg = '')
    {
        echo '[' . date('Y-m-d H:i:s') . '][trace]' . $msg . "\n";
    }
}