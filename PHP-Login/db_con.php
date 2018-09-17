<?php
class DB_Connect {

    // constructor
    function __construct() {

    }

    // destructor
    function __destruct() {
        // $this->close();
    }

    // Create connection to the database
    public function connect() {
        require_once 'config.php';

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if (!$conn) {

            die("Connection failed: " . mysqli_connect_error());
        }



        return $conn;
    }

    // Close connection
    public function close() {
        mysqli_close();
    }

}

?>
