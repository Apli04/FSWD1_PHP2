<?php
    // Triangle Upside Left
    $size = 6;
    for($i = 0; $i < $size; $i++) {
        // print stars
        for($j = 0; $j <= $i; $j++) {
            echo " s ";
        }
        echo "<br>";
    }

    // Triangle Downside Right
    $size = 9;
    for($i = 0; $i < $size; $i++) {
        // print spaces
        for($j = 1; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print stars
        for($k = 0; $k <= $i; $k++) {
            echo "#";
        }
        echo "<br>";
    }

    // Triangle Downside Left
    $size = 10;
    for($i = 0; $i < $size; $i++) {
        // print stars
        for($j = 0; $j < $size - $i; $j++) {
            echo " @ ";
        }
        echo "<br>";
    }

    // Triangle Downside Right
    $size = 7;
    for ($i=0; $i < 7; $i++) {
	//Row
	//echo "i $i ";
	for($j=0; $j<$i; $j++) {
		//Blank
		//echo " j $j";
		echo "&nbsp;&nbsp; ";
	}
	for($j=0; $j<7-$i;$j++){
		//Star
		//echo " j$j i$j ".$j;
		echo " * ";
	}
	echo " <br> ";
}

?>