 <?php

// session store
session_start();

// errorhandling
error_reporting(E_ALL);
ini_set('display_errors', 1);

// $config=require("./config.php");
$dp = require("./model/DB.php");

// $databaseConnection = new DatabaseConnection($config);
// $conn = $databaseConnection->dbConnection();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if($name!="" && $email!=""){

        $sql = "SELECT * from Register_form where Name='$name' and Email_Id='$email'";




        // Execute query
        $result = mysqli_query($conn, $sql);
    
        if ($result->num_rows >0) {
            header("Location:./index.php");
            echo "Data Inserted";
        } else {
            echo "data not store";
            }
    }

}