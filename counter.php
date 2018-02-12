*CREATED A FILE NAMED COUNTER.PHP
steps to follow when creating counter.php :
touch counter.php
 git add counter.php
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
clone the respositor,git remote add origin git@github.com:masporo/visit-counter.git
 git pish -u origin master
http://justintadlock.com/web-design/counter (the source)
