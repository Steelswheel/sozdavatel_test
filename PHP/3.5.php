<?php

function getAngle(int $hour = 0, int $min = 0) {
	if ($hour >= 12) {
		$hour -= 12;
	}

	if ($min > 59) {
		echo "Введите значение до 59 минут";
		return;
	};

	$hourAngle = $hour*30;
	$minAngle = $min*6;

	if ($min > 30) {
		$angle = ($hourAngle - $minAngle) + 360;
	} else {
		$angle = ($hourAngle - $minAngle);
	}

	if ($angle < 0) {
		    $angle = -($angle);
	}

	echo "Угол между часовой и минутной стрелкой равен $angle градусов";
	return $angle;
}

getAngle(00, 60);

?>
