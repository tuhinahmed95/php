

    <?php
        session_start();
        unset($_SESSION['syntax']);
        session_destroy();
        header("loction:login.php");

    ?>
    
           
