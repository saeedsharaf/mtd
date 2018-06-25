<?php
$x = '6/1/2018';
$date = date_create($x);

echo date_format($date,'y/m/d');
