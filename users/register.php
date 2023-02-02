

<?php include("./../includes/header.php");?>
     
   <?php include('./../db.php');
   
    if (isset($_POST['register'])) {
        
        $username =$_POST["username"];
        $password =$_POST["password"];
        $email =$_POST["email"];


        $query    = "INSERT into users(username, password, email) VALUES ('$username', '$password', '$email')";
        $result   = mysqli_query($conn, $query);
        echo $query;
        if (!$result) {

            echo "<div class='form'>
            <h3>You got some errors.</h3><br/>
            <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
            </div>";
        } else {
            echo header("Location: dashboard.php");
        }}
    
?>


<div class= container>
<h1> SING UP!</h1>
    <form class="row g-3" method="POST">
    <div class="col-md-6">
    <label for="inputName4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName4" name='username'>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name='email'>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" >Password</label>
    <input type="password" class="form-control" name='password' id="inputPassword4">
  </div>
  <div class="col-12">
  <div class="col-12">  
    <input type="submit" class="btn btn-primary" name= 'register' value="Register"></input>
  </div>
</form>
<div>
