<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST['registerBtn'])) {
        // Registration code
        $f_name = $_POST['register_fname'];
        $l_name = $_POST['register_lname'];
        $email = $_POST['register_email'];
    

        // Establish Connection
        $db_host = "localhost"; // Change this to your database host
        $db_user = "root";      // Change this to your database username
        $db_pass = "";          // Change this to your database password
        $db_name = "forms";  // Change this to your database name

        // Create a connection to the database
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

        // Check the connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect!";
            exit();
        } else {
            // Insert user data into the database
            $sql = "INSERT INTO `users` (first_name, last_name, email) VALUES ('$f_name', '$l_name', '$email')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Registration Successful";
            } else {
                die(mysqli_error($conn));
            }
        }
    } 
}
?>

