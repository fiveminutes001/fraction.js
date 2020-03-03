<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost/add_fractions/fraction.js/add_fractions.php");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($ch);
    curl_close($ch);
    echo "<pre>$output</pre>";

?>