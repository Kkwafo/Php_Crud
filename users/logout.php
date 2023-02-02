<?php include("./../includes/header.php");?>
<?php include("auth_session.php");?>

<?php
    session_start();
    
    if(session_destroy()) {
        
        header("Location: loggin.php");
    }
?>