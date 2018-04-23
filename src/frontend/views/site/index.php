<?php
use elephantsGroup\jdf\Jdf;
use elephantsGroup\jDate;

	echo ('Hello World');
	echo ('<br />');
	echo ('Use Jdf package as follows : Jdf::jdate(\'H:i:s\') that results: ');
	echo (Jdf::jdate('H:i:s'));
	echo ('<br />');
	echo ('Use JDate package as follows : Yii::$app->jdate->date(\'Y-m-d\') that results: ');
	echo (Yii::$app->jdate->date('Y-m-d'));
	echo ('<br />');
	echo ('Use Jalali Date Picker as follows : jDate\DatePicker::widget([\'name\' => \'datepicker\']) that results: ');
	echo (jDate\DatePicker::widget(['name' => 'datepicker']));
?>