<?php

require_once "common.php";

$res = $client->get('/API/bpm/process?p=0&c=100');
echo "list processes:\n" . $res . "\n";
