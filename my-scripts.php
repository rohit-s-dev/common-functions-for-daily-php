<?php 

// get the time from timestamp
function extratctTimeFromTimstamp( $ts ) {
    $time=substr($ts, strpos($ts , " "));
    return $time;
}


?>