<?php

function load_template($name){
    // print (__DIR__);
    include $_SERVER['DOCUMENT_ROOT'] ."/apps/_templates/$name.php";

}

function validate_credentials($email, $password){
    if ($email == "krithicka.s@gmail.com" && $password == "password123"){
        return true;
    } else {
        return false;
    }
}

function signup($username, $password, $email, $phone){
    $servername = "mysql.selfmade.ninja";
    $user = "dartvader";
    $pass = "Kriasu@7683";
    $dbname = "dartvader_photogram_db";

    // Create connection
    $conn = mysqli_connect($servername, $user, $pass, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    else{
    echo "Connected successfully";
    }
    $sql = "INSERT INTO `photogram_login_DB` (`username`, `password`, `email`, `phone`, `blocked`, `avtive`)
        VALUES ('$username', '$password', '$email', '$phone', '0', '1');";
        $result = False;
        if ($conn->query($sql) === TRUE) {
            $result = True;
        } else {
            $result = False;
            
        }

        $conn->close();
        echo "Error: " . $sql . "<br>" . $conn->error;
        return $result;
    }

?>