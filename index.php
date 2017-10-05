<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "<br><br>replace - with / in date";
$date = date('Y/m/d', time());
echo "<br>$date";

echo "<br><br>comparing $date and $tar";
if(strcmp ($date, $tar) >0) {
	echo "<br>the future";
}

elseif(strcmp ($date, $tar) <0) {
	echo "<br>the past";
}

else {
	echo "<br>oops";
}

echo "<br><br>count words in date<br>";
echo str_word_count($date);

$string1= "<br><br>length of my string is";
echo "$string1<br>";
echo strlen($string1);

echo "<br><br>first character's  ascii<br>";
echo ord ($date);

echo "<br><br>return last 2 characters from $date<br>";
echo substr($date,-2);

echo "<br><br>position of / is at<br>";
$p= 0;
while ($p > -1) {
	$p= strpos($date, "/", $p+1);
	echo " " .$p. " ";
}

echo "<br><br>break date into array<br>";
print_r(explode('/', $date, 3));
$array= explode('/', $date);
echo "<br>";
echo " " .$array[0]. " " .$array[1]. " " .$array[2]. " ";

echo "<br><br>leap yr or not?<br>";
foreach ($year as $i) {
	switch(($i%4==0)&&($i%100!=0)||($i%400==0)){
		case 0: echo "$i false ";
		break;
		case 1: echo "$i true ";
		break;
	}
}
?>

