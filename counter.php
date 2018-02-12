*Created a file named counter.php
steps to follow when creating counter.php :
touch counter.php
add counter.php
gedit counter.php (Attach counter.php coding)
<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo "$count" ;
echo " hits" ;
echo "\n" ;

// opens countlog.txt to change new hit number
$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);
?>
git commit -m "find all files"
clone the repository
and use git pish -u origin master
