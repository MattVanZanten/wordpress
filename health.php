<?php
$t = array(0,0,0);
if ( phpversion() >= '5.6') {
  $t[0] = 1;
}
$du = substr(exec('df / | cut -d \' \' -f 14'), 0, -1);
if ($du < 95) {
  $t[1] = 1;
}
if ( exec('aws s3 ls s3://trinimbus-wp') ) {
  $t[2] = 1;
}
if( $t[0] == 1 && $t[1] == 1 && $t[2] == 1 ) {
  echo "healthy";
}
?>

