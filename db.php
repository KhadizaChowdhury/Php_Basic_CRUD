<?php

    // Localhost, username, password, DB name;
    $connect = mysqli_connect("localhost","root","","php_project");

    // Check connection
    if ($connect){
      //echo "Database Connected";
    }
    else{
      echo "Failed to connect to Database";
    }

?>