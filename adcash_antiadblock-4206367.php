﻿<?php

/**
 * Insert publisher data here
 *
 * @var string|integer $zoneId
 * @var string $zoneType
 */
$zoneId = "4206367";
$zoneType = "suv4";

/**
 * Do not modify anything below this line
 */
$serviceDomain = "linkonclick.com";
$query = http_build_query(array(
    'zone_id' => $zoneId,
    'zone_type' => $zoneType,
));

$targetUrl = "http://{$serviceDomain}/ad/s2sadblock.php?{$query}";

$ch = curl_init($targetUrl);
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CONNECTTIMEOUT_MS => 100,
    CURLOPT_TIMEOUT_MS => 200,
));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
