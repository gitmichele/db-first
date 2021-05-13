<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue 2 -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <title>PHP - MYSQL</title>
</head>
<body>

    <?php

        require_once "connection.php";

        echo 'room number <br>';

        $conn = getConnection($servername, $username, $password, $dbname);
        $sql = getStanzeSql();
        
        $stmt = $conn -> prepare($sql);
        $stmt -> execute();
        $stmt -> bind_result($room_number);

        while ($stmt -> fetch()) {

            echo  '<a href="/room.php?rn=' . $room_number . '"">' . $room_number . '</a><br>';
        };

        closeConn($conn, $stmt);
    ?>

</body>
</html>