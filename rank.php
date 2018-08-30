<?php
$marks = array(92, 84, 84, 84, 83, 65, 41, 38, 38, 37);
rsort($marks);
$narr = array_count_values($marks);
$y=1;
foreach($narr as $k=>$v)
{
$i=1;
while($i<=$v)
{
echo "$k : $y<br>";
$i++;
}
$y++;
}