<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'CrossR0@ds123') {
  echo $challenge;
}


$input = json_decode(file_get_contents('php://input'), true);


foreach ($array as list($a, $b, $c)) {
    echo "A: $a; B: $b; C: $c\n";
}