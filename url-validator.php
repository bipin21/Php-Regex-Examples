<?php
$re = '/^(?:(http|ftp)(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:\/?#[\]@!\$&\'\(\)\*\+,;=.]+/im';
$str = 'google.com
test.com?query=test
test.
http://regex101.com/
https://www.facebook.com/
127.0.0.1';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);

?>