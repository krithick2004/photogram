<?php
    include_once 'libs/load.php';
?>

<pre>
    <?php
       /* print("This is the server request:\n\n");
        print_r($_SERVER);
        print("This is the get request:\n\n");
        print_r($_GET);
        print("This is the post request:\n\n");
        print_r($_POST);
        print("This is the file request:\n\n");
        print_r($_FILES);
        print("This is the cookie request:\n\n");
        print_r($_COOKIE); */

        if (signup("krithick", "password124", "krithicka.s@gmail.com", "1234567890")) {
            echo "User created successfully";
        } else {
            echo "Error creating user";
            
        }

    ?>
</pre>





