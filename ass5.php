
<?php
function isZip($zip){return preg_match('/^([0-9\\d]{5})(-[0-9\\d]{4})?$/',$zip);}
	$test1 = '66209';
	$test2 = '66209-9409';
function isEmail($email){return preg_match('/^\w+@[a-zA-Z_\.]+?\.[a-zA-Z]{2,3}$/',$email);}
	$test3 = 'schorgl@kc.rr.com';
	$test4 = 'baller@gmail.com';
function isPhone($phone){return preg_match('/^(\(?\d{3}\)?\-?\.?\d{3}\-?\.?\d{4})$/',$phone);}
	$test5 = '9139049099';
	$test6 = '785-905-9222';
	$test7 = '(913)583-3832';
function isDate($date){return preg_match('/^\d{1,2}\/?\-?\ ?\d{1,2}\/?\-?\ ?\d{4}$/',$date);}
	$test8 = '01-20-1994';
	$test9 = '10/20/2015';
echo '<p>zipcode test for '.$test1;
if (isZip($test1)) { echo ' is true</p>'; } else { echo ' is false</p>'; }
echo '<p>zipcode test for '.$test2;
if (isZip($test2)) { echo ' is true</p>';} else { echo ' is false</p>'; }
echo '<p>email test for '.$test3;
if (isEmail($test3)) { echo ' is true</p>'; } else { echo ' is false</p>'; }
echo '<p>email test for '.$test4;
if (isEmail($test4)) { echo ' is true</p>'; } else { echo ' is false</p>'; }
echo '<p>phone number test for '.$test5;
if (isPhone($test5)) {echo ' is true</p>';} else {echo ' is false</p>'; }
echo '<p>phone number test for '.$test6;
if (isPhone($test6)) {echo ' is true</p>';} else {echo ' is false</p>'; }
echo '<p>phone number test for '.$test7;
if (isPhone($test7)) {echo ' is true</p>';} else {echo ' is false</p>'; }
echo '<p>date test for '.$test8;
if (isDate($test8)) {echo ' is true</p>';} else {echo ' is false</p>'; }
echo '<p>date test for '.$test9;
if (isDate($test9)) {echo ' is true</p>';} else {echo ' is false</p>'; }
?>