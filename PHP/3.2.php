<?php

function getDateNormal(int $day = 1, int $month = 1) {
	if ($day <= 0 && $day > 31) {
		echo "Введите корректную дату";
		return;
	} elseif ($month <= 0 && $month > 12) {
		echo "Введите корректный месяц";
		return;
	} else {
		switch ($month) {
			case 1:
				$date = "$day января";
				echo $date;
				break;
			case 2:
				$date = "$day февраля";
				echo $date;
				break;
			case 3:
				$date = "$day марта";
				echo $date;
				break;
			case 4:
				$date = "$day апреля";
				echo $date;
				break;
			case 5:
				$date = "$day мая";
				echo $date;
				break;
			case 6:
				$date = "$day июня";
				echo $date;
				break;
			case 7:
				$date = "$day июля";
				echo $date;
				break;
			case 8:
				$date = "$day августа";
				echo $date;
				break;
			case 9:
				$date = "$day сентября";
				echo $date;
				break;
			case 10:
				$date = "$day октября";
				echo $date;
				break;
			case 11:
				$date = "$day ноября";
				echo $date;
				break;
			case 12:
				$date = "$day декабря";
				echo $date;
				break;
		}
	}

	return $date;
}

getDateNormal(9, 5);

?>