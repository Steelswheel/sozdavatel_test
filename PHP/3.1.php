<?php

function calcContribution(int $sum = 0, int $term = 0, $pct = 0) {
	$cap = $sum + (($sum * $term * $pct)/(12*100));
	echo "Сумма по вкладу составит $cap";
	return $cap;
}

calcContribution(50000, 3, 10.5);

?>