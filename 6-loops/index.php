<?php
    $fruits = Array("apple", "banana", "mango", "orange");

    $i = 0;
    
    echo "<b>using while loop:  </b> <br>";
    while($i < count($fruits)){
        echo "$fruits[$i]" . " ";
        $i++;
    }
    echo "<br>";

    echo "<b>using for loop : </b> <br>";
    for ($i=0; $i < 4; $i++) { 
        echo "$fruits[$i]" . " ";
    }

    echo "<br>";

    echo "<b>using for each loop</b> <br>";

    foreach ($fruits as $fruit) {
        echo "$fruit <br>";
    }

?>