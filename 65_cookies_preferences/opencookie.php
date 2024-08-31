<?php

if(!$_COOKIE["selectedLanguage"]){
    header("Location:index.php");
}elseif($_COOKIE["selectedLanguage"]=="es"){
    header("Location:content_spa.php");
}elseif($_COOKIE["selectedLanguage"]=="en"){
    header("Location:content_eng.php");
}

?>