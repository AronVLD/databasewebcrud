<?php
    include("./connectdb.php");
    include("./functions.php");

    $id = sanitize( $_POST["id"]);
    $naam = sanitize($_POST["naam"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $gender = sanitize($_POST["gender"]);
    $koekjes = sanitize($_POST["koekjes"]);

    $sql= "UPDATE `users`
            SET `naam` = '$naam',
                `email` = '$email',
                `password` = '$password',
                `gender` = '$gender',
                `koekjes` = '$koekjes'
            
            WHERE `id` = $id;";

    mysqli_query($conn, $sql);
    header("Location: ./index.php?content=read");
?>