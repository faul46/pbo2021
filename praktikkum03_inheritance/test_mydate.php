<?php

require_once 'initialize.php';

use application\backend\MyDate;


$the_date = new MyDate();
$the_date->setDay(15);
$the_date->setMonth(12);

echo $the_date->getDay();
echo $the_date->getMonth();