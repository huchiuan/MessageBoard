


<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE & ~E_DEPRECATED);

require 'app_config.php';
   mysql_connect("$dadabase_host","$username","$password")

    or die ("<p>Error ttttt : " . mysql_error(). "</p>");

    echo "<p>Connect to my sql! </p>";

       mysql_select_db("$database_name")

        or die ("<p> 8888888888888888888888 :" . mysql_error (). "</p>");
        echo "<p>connest to mu data avasdasdsad . </p>";
    ?>

    <?php

    $result = mysql_query("SHOW TABLES;");

     if (!$result){
         die( " <p> Error in listing tables : " . mysql_error () . "</p>");

     }

     echo "<p> tables in database : </p>";
     echo "<ul>";
     while ($row  = mysql_fetch_row($result )) {
         echo " <li> Table : {$row[0]}</li>";
     }
     echo "</ul>";
     ?>

