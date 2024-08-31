<?php

setcookie("selectedLanguage", $_GET["language"], time()+86400);
header("Location:opencookie.php");

?>