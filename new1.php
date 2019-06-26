<?php
class ParsingMessageYD{
	
	public static function getValuesFromMessage($message){
		$result = array();
		//Сумма
		preg_match("/[0-9]+,[0-9]+/u", $message, $result['money']);
		//Код
		preg_match("/[0-9]{4}/u", $message, $result['code']);
		//Номер счета
		preg_match("/[0-9]{11,20}/u", $message, $result['number']);
		return $result;
	}
}


$message = 'Пароль: 9527
	Спишется 14326220,61р.
	Перевод на счет 410019757137109342142';
$values = ParsingMessageYD::getValuesFromMessage($message);
print_r($values);


