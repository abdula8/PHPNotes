<?php
/*
  date(Format, timestamp[optional])
  D: get the week day name
  F: name of the month
*/
date_default_timezone_set('Africa/Cairo');

$next_month = time() + (7 * 24 * 60 * 60);
echo '<br>';
echo date('Y-m-d h:i:s', $next_month);
echo '<br>';
echo date_default_timezone_get();
echo '<br>';
// echo date_default_timezone_set('Africa/Cairo');
echo '<br>';
// echo date_default_timezone_get();
echo '<br>';
echo date('h', $next_month);
echo '<br>';
$time = strtotime('now', time()-3600);
$time = strtotime('+19 day', time()-3600);
$time = strtotime('+3 year -2 month -2 day -12 hours', time());
$time = strtotime('last Friday', time());
echo date('Y/m/d D H:i:s', $time);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
