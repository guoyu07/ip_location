<?php

require '../src/IpLocation.php';

$ip = '106.2.157.20';

$ipObj = new IpLocation();
$ipMsg = $ipObj->getlocation($ip);

var_export($ipMsg);

/**
 * like
 *
 * array ( 'ip' => '106.2.157.20', 'beginip' => '106.2.128.0', 'endip' => '106.2.159.255', 'country' => '辽宁省沈阳市', 'area' => '辽宁神州云信息技术有限公司')
 */

$endIP = $ipMsg['endip'];
$startIp = $ipMsg['beginip'];

$area = $ipMsg['area'];
$country = $ipMsg['country'];
