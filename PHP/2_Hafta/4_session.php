<?php
    session_start();
    echo $_SESSION["her_yerde"];
?>
<br>
<a href="3_session.php">3. Global Sayfası</a>
<?php
        $_SESSION["her_yerde"] =33;

?>