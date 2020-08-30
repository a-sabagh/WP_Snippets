<?php
$format = "Y-m-d H:i:s";
$unixtimestamp = 1598786029;
$string_date = date($format,$unixtimestamp);
$date = new DateTime($string_date, new DateTimeZone("UTC"));
$date->setTimezone(new DateTimeZone("Asia/Tehran"));
$unixtime_with_offset = $date->getTimeStamp() + $date->getOffset();
$date_localize_format = date_i18n($format,$unixtime_with_offset);
