<?php   
    
    include("./connectdb.php");
    include("./functions.php");

    $naam = sanitize($_POST["naam"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);
    $gender = sanitize($_POST["gender"]);
    $koekjes = sanitize($_POST["koekjes"]);

    $sql = "INSERT INTO `users` (`id`, `naam`, `email`, `password`, `gender`, `koekjes`) 
    VALUES (NULL, '$naam', '$email', '$password', '$gender', '$koekjes');";

    
    $result = mysqli_query($conn, $sql);
    if ($result){
        $text = "het opslaan is gelukt";
    } else {
        $text = "het opslaan is niet gelukt";
    }


    header("Location: ./index.php?content=read");

?>
