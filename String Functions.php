<?php
//echo "hello";
echo addcslashes("section j is 3rd yr students" , "rd");
echo "<br>";
echo addslashes("hel;m;lo'world");
echo "<br>";
echo bin2hex("hii");
echo "<br>";
echo hex2bin("6865692e");
echo "<br>";
echo chunk_split("this is the class of sec j","4","__");
echo "<br>";
echo chop("this  class  ^  is good  ","o d"); //remove extra space  .2. Remove the char from the right side
echo "<br>";
echo rtrim("Gla University   .","y. ");//same as chop
//echo convert_cyr_string()
echo"<br>";
echo ltrim("  gla universityt","gl ");
echo "<br>";
print_r(explode(" ","this is the class of sec j"));
echo "<br>";
$ar=["a", "b", "c"];
echo implode("_",$ar);
echo"<br>";
print_r(str_split("this is the gla","2")) ;
echo "<br>";

echo join(":",$ar);
echo "<br>";
echo crypt("heyasllo","e");
echo "<br>";
echo md5("hello");
echo "<br>";
echo sha1("hello");
echo "<br>";
//echo sha1_file("hi");
echo "<br>";
echo str_replace("ell","0","Hello Gla University");
echo "<br>";
echo strrev("Gla University");
echo "<br>";
echo strpos("hello","l");
echo "<br>";
echo stripos("hello","l");
echo "<br>";
echo strrpos("helloo","o");//return the last position
echo "<br>";
echo strripos("hello" , "l");
echo "<br>";
echo strcmp("hello","Hello");
echo "<br>";


echo strcasecmp("Hello","hErllo");  //-6


echo "<br>";
echo strnatcmp("Hii","hii"); // same strcmp
echo "<br>";
echo strnatcasecmp("helLo","hello");
echo "<br>";
echo crc32("hello");
echo "<br>";
$str="hello <b> gla</b>";

echo htmlentities($str);
echo"<br>";


echo htmlspecialchars("gla University");

echo "<br>";

echo strtolower("KVNDJFSVBNnl");
echo "<br>";
echo strtoupper("dfbsfws");
echo "<br>";
echo metaphone("university"); // o/p the pronouns
echo "<br>";
echo number_format("192223424","3",":","-");
echo "<br>";
echo chr(65);
echo"<br>";
echo ord("a");
echo"<br>";
echo str_repeat("ok ",3);
echo"<br>";
echo str_ireplace("help","g","help me ");
echo "<br>";
echo str_shuffle("Gla Unive#$@@$^%#rsity");
echo "<br>";
echo str_word_count("gla universityt");
echo "<br>";
echo strchr("hello","l");
echo "<br>";
echo strstr("hello" , "e");
echo "<br>";

echo round("234123.7");

?>