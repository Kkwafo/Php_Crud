<?php include("./../includes/header.php");?>
<?php include("auth_session.php");?>

<h2>Hello, <?php echo $_SESSION['username']; ?> to your Dashboard, Here u will see the links to start to use the APP!!!</h2>
<div class="container dashnav">
   <ul class="nav ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="./../home.php?=">Go to Home Tasks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="./../work.php?=">Go to Work Tasks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="./../healt.php?=">Go to Healt Taks</a>
  </li>
</ul>
</div>