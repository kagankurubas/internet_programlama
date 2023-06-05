<?php
    session_start();
    echo $_SESSION["her_yerde"];
    $_SESSION["her_yerde"] =55;

?>
<br>
<a href="4_session.php">4. Global Sayfası</a>