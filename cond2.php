<?php
$name = "Muhammad Firdaus Bin Jamari";
$course = "Bachelor in Human Resourse (Management)";
$cgpa = 3.39;
if($cgpa == 4.0){
	$grade = "Terbaik Toqq!!";
}else if($cgpa >= 3.33 && $cgpa <= 3.99){
	$grade = "Ok laaaaa...";
}else if($cgpa >= 2.67 && $cgpa <= 3.32){
	$grade = "Credit";
}else if($cgpa >= 2.00 && $cgpa <= 2.66){
	$grade = "Cukup Makan Je";
}else if($cgpa <= 1.99){
	$grade = "Boleh Blah Dari Kolej! Apa Yang Ko Blaja Ha? Habis Duet Mak Pak Hang Jek!!";
}else{
	$grade = null;
}
if($grade==null){
	echo "Please Enter the correct CGPA";
}else{
	echo "Welcome ".$name.". You have enroll ".$course.". Based on your
	CGPA (".$cgpa."), your grade is ". $grade;
}
?>