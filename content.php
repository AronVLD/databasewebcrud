<?php
if(isset($_GET["content"])){
include("./" . $_GET["content"] . "");
} else {
include("./form.php");
}
?>