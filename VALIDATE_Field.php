<?php //regex of checkbox fields
function check3($field) {
if(!preg_match("/[0-9]/", $field) ||
	(7 < $field) || ($field < 0)) {
	return "Invalid input<br>";
}}

function check2($field) {
	if(!preg_match("/[0-9]/", $field) ||
	(3 < $field) || ($field < 0)) {
	return "Invalid input<br>";
}}

function check1($field) {
	if(!preg_match("/[0-9]/", $field) ||
	(1 < $field) || ($field < 0)) {
	return "Invalid input<br>";
}}

//Date Validation Checker
function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

?>

