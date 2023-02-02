<?php include("db.php");

if(isset($_GET[("id")])){
//ver que el FROM sea una variable que se modifique asi genero esto como controlador
    $id = $_GET[('id')];
    $query = "DELETE FROM todoList WHERE id = '$id'";
}
    $result = mysqli_query($conn, $query);
    if(!result){
        die("Query Failed");
    }
    $_SESSION["message"] = "Task Delete successfully";
    $_SESSION["message_type"]= "danger";

    header("Location: index.php");

   // echo(isset($_GET["id"]));
    //var_dump(isset($id));
    //var_dump($id);

?>
