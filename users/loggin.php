<?php include("./../includes/header.php");?>
<?php include('./../db.php');
    
    session_start();
       if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); 
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $_SESSION["message"]= "Incorrect Username/password";
        $_SESSION["message_type"] = "warning";
        
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password';";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            
            header("Location: dashboard.php");
        } else {
            if(isset($_SESSION["message"])) {?>
                <div class="alert alert-<?=$_SESSION["message_type"];?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION["message"]?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    <?php unset($_SESSION["message"]);} 
        }};
    
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
    </form>
