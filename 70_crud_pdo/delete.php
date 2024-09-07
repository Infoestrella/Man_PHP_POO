<?php

include("connection.php");
$agentcode = $_GET["agentcode"];
$base->query("DELETE FROM agentes WHERE codagente = '$agentcode'");
header("Location:index.php");

?>