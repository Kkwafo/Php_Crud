<?php include("db.php");
//si $_GET id esta definido realiza la query, si el resultado es true me devuelve las variables haciendo fetch desde la base de datos//
if(isset($_GET[('id')])){

    $id = $_GET[('id')];
    $query = "SELECT * FROM todoList WHERE id = $id";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){    
    $row = mysqli_fetch_array($result);
    $task = $row['title'];
    $description = $row['description']; 
    }
}
?>
<?php
//
if(isset($_POST[('update')])){
    $id = $_GET[('id')];
    $task = $_POST['task'];
    $description = $_POST['description'];
    $query ="UPDATE todoList SET title = '$task' ,  description = '$description' WHERE id = $id" ;

    $result = mysqli_query($conn, $query);
 
    header("Location: index.php");
    $_SESSION["message"]= "Your task was edited whit success";
    $_SESSION["message_type"] = "warning";
    slepp(1);
    unset($_SESSION["message"]);

}

?>


<?php include("includes/header.php");?>

<div class= "container"> 
    <div class = "row" >
       <div class= "col md-4">
            <div class="card card-body">
                <form action="edit.php?id= <?php echo $_GET['id'] ?>" method="POST"> 
                    <div class="form-group"> 
                        <input type="text"
                            name="task"
                            class="form-control"
                            placeholder="Edit your task"
                            value="<?php echo $task;?>" 
                             >
                        <textarea name="description"class="form-control mt-3 p-2"placeholder="Edit the content"row=2><?php echo $description;?></textarea>  
                    </div>
                    <button class="btn btn-success mt-4" name=update > Update </button>
                </form>
            </div>  
         </div>
    </div>
</div>
     

<?php include("includes/footer.php");?>