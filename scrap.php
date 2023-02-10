<?php

$url = 'https://www.ebay.com/itm/155366444929?_trkparms=%26rpp_cid%3D63890fa5c274b9043cb954ed%26rpp_icid%3D63890fa5c274b9043cb954ec&_trkparms=pageci%3A2e9b607c-a8cd-11ed-83a9-86b334675f18%7Cparentrq%3A386645eb1860a6e7cc14ccaefffe63e2%7Ciid%3A1';
$data = file_get_contents($url);

var_dump($data);