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
