<?php

require_once "common.php";


$res = $client->get('/bonita/API/bpm/humanTask?p=0&c=100');
echo "List all human tasks:\n" . $res . "\n";

$res = $client->get('/bonita/API/bpm/humanTask?p=0&c=100&f=assigned_id=' . $userId);
echo "List human tasks for me:\n" . $res . "\n";


$taskId = 1;
$res = $client->get('/API/bpm/userTask/' . $taskId . '/context');
echo "task context:\n" . $res . "\n";
