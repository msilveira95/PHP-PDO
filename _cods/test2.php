<?php
    session_start();
    echo "Sessão {$_SESSION['login']}";
    if(!isset($_SESSION['login'])){
        header("Location: test.php");
    }
?>
<button type="button" onclick="window.open('logoff.php', '_self')">Logoff</button>