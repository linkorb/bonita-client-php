<?php

require_once "common.php";

$modelName = 'com.example.model.Test';

$res = $client->get('/API/bdm/businessData/' . $modelName . '?p=0&c=100&q=find');
echo "objects:\n" . $res . "\n";
