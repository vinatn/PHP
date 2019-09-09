<?php
$str = "Is your name O'Really?";
$str2 = addslashes($str);
$str3 = stripcslashes($str2);

echo "<b>String asli</b> : $str";
echo "<br><b>addcslashes()</b> : $str2";
echo "<br><b>stripcslashes()</b> : $str3";
?>