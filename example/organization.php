<?php

require_once "common.php";

$res = $client->getOrganizationGroups();
echo "groups:\n" .  $res . "\n";

$res = $client->get('/API/identity/user?p=0&c=100');
echo "users:\n" .  $res . "\n";

$res = $client->get('/API/customuserinfo/user?c=10&p=0&f=userId=' . $userId);
echo "customuserinfo:\n" . $res . "\n";
