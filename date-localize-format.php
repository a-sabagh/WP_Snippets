<?php
$format = "Y-m-d H:i:s";
$unixtimestamp = 1598786029;
$string_date = date($format,$unixtimestamp);
$date_time = new DateTime($string_date, new DateTimeZone("UTC"));
$date_time->setTimezone(new DateTimeZone("Asia/Tehran"));
$current_time_string = $date_time->format($format);
$date_localize_format = date_i18n($format,strtotime($current_time_string));
