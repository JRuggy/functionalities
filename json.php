<?php

$x = 1;

while ($x <= 5) {
    // echo "The number is: $x <br>";
    $x++;

    $data = array(
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York',
        'X Value' => $x
    );

    $jsonString = json_encode($data, JSON_PRETTY_PRINT);

    echo $jsonString;
}
