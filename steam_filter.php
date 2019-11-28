<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/23
 * Time: 16:48
 */

class strtoupper_filter extends php_user_filter {
    function filter ( $in , $out , & $consumed , $closing )
    {
        while ( $bucket = stream_bucket_make_writeable ( $in )) {
            $bucket -> data = strtoupper ( $bucket -> data );
            $consumed += $bucket -> datalen ;
            stream_bucket_append ( $out , $bucket );
        }
        return PSFS_PASS_ON ;
    }
}

print_r(stream_get_filters());
stream_filter_register("strtoupper", "strtoupper_filter") or die (" Failed to register filter");
$fp = fopen("foo-bar.txt", 'w');
stream_filter_append($fp, "strtoupper");
fwrite($fp, "Line one\n");
fwrite($fp, "Word two\n");
fwrite($fp, "Easy as one two three\n");
fclose($fp);
readfile("foo-bar.txt");