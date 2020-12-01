<?php


    // Try connect to the database
    $mysqli = mysqli_connect('scripting.com', 'root', '123456', 'integrated');
                   
    
    
    //If connection unsuccesful, print error and stop script execution

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo "<p>Connection to database is succesful.</p>";
        echo "<p> <strong>MySQL host info: </strong>" . $mysqli->host_info . " </p>";
        echo "<p><strong>MySQL host info: </strong>". $mysqli->server_info . " </p>";
      
    }



?>