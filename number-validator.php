$re = '/^\d[\d,.]+/m';
$str = '101111111.000
11111,222
11,22
10.10.10.10
10,10,10,10
.1
10000
122222';

preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

// Print the entire match result
var_dump($matches);
