<?php

    $servername = 'localhost';
    $username = "root";
    $password = "password";
    $dbname = "dbhotel";


    function getConnection( $servername, $username,$password,$dbname) {
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn && $conn->connect_error) {

        echo "Connection failed: " . $conn->connect_error;
        };

        return $conn;
    };

    function getStanzeSql() {
        return "
            SELECT stanze.room_number FROM stanze
        ";
    };

    function getDetails() {

        return "
        SELECT stanze.floor, stanze.beds FROM stanze  WHERE stanze.room_number = ?
        ";
    };

    function closeConn($conn, $stmt) {
        $stmt -> close();
        $conn -> close();
    }

?>