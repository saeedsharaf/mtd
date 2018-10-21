<?php

$aht = ($acd_time + $hold_time + $acw_time ) / $acd_calls ;
$hold = $hold_time / ( $acd_time + $hold_time + $acd_time) * 100;
$acw =  ($acw_time / ($hold_time + $acw_time + $acd_time ) ) * 100;
$outbound_aht = ($aux_out_time + $acw_out_time) / ($acw_out_time + $aux_out_calls) ;
