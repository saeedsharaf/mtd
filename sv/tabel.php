<?php

?>

<td class="light"><a href="more.php" style="color:blue;"> <?php echo $_SESSION['username']  ;?> </a>  </th>
				<td class="light"> <?php echo $totalsurvey ;?></th>
				<td class="light"> <?php echo $pro ;?> </th>
				<td class="light"> <?php echo $de ;?> </th>
				<td class="light"> <?php echo $pass ;?>  </th>
				<td class="light" style="<?php echo $nps_color ; ?> " > <?php echo round($nps) ;?>%  </th>
				<td class="light" style="<?php echo $p_color ; ?> "> <?php echo round($pro_pr) ;?>% </th>
				<td class="light" style="<?php echo $de_color ; ?> "> <?php echo round($de_pr) ;?>%  </th></th>
				<td class="light" style="<?php echo $pa_color ; ?> "> <?php echo round($pass_pr) ;?>%  </th></th></th>
				<td class="light" style="<?php echo $cs_tt ; ?> "> <?php echo round($per_csttb) ; ?> % </th>
				<td class="light" style="<?php echo $cs_bb ; ?> "> <?php echo round($per_csbb) ; ?> % </th>
				<td class="light" style="<?php echo $ag_tt ; ?> "> <?php echo round($per_agttb) ; ?> %  </th>
				<td class="light" style="<?php echo $ag_bb ; ?> "> <?php echo round($per_agbb) ; ?> % </th>
				<td class="light" style="<?php echo $fcr_color ; ?> "> <?php echo round($fcr_percentage); ?>% </th>
				<td class="light" style="<?php echo $ir_color ; ?> "> <?php echo round($ir_percentage); ?>%  </th>
				<td class="light"> <?php echo $fcr1 ;?></th>
				<td class="light"> <?php echo $ir1 ; ?> </th>
				
			
			</tr>	
			</table>
			<?php