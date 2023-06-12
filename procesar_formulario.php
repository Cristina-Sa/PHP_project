<?php
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];

    // Conexión con POO
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CursoSQL";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check conexión
    if ($conn->connect_error) {
        die("connection failed: ". $conn->connection_error);
    }

    $sql = "INSERT INTO USUARIO (nombre, apellido, email) 
    VALUES ('$nombre', '$apellido', '$email')";

    if ($conn->query($sql) == TRUE) {
        echo "New record created successfully <br>\n <br>\n";
        echo '<hr/>';
        echo "<b>Nombre: </b> ". $nombre ."<br>\n
        <b>Apellidos: </b>" .$apellido ."<br>\n
        <b>Email: </b> " .$email .")";
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }
?>