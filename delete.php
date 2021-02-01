<?php
include("./connectdb.php");
    include("./functions.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM users WHERE id = $id";

    mysqli_query($conn, $sql);
    header("Location: /index.php?content=read");
    
?>