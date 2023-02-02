<?php include("db.php");
if(isset($_POST["save_task"])){
    $task = $_POST["task"];
    $description = $_POST["description"];
    $query = "INSERT INTO todoList (title, description) VALUES ('$task' ,'$description')";
}
$result = mysqli_query($conn, $query);
if ($result == 1){ 
    $_SESSION["message"] = "Task save successfully";
    $_SESSION["message_type"] = "success";
    header("Location: index.php");
    }
    else {
        $_SESSION["message"] = "Error! Check if the Table was Created Press the Botton on the  TOP!"; 
        $_SESSION["message_type"] = "info";
        header("Location: index.php");
    };
exit;

    

?>