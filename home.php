<?php include("db.php");?>
<?php include("includes/header.php");?>
<h1> Home </h1>
<div class= "container p-4 in"> 
    <div class = "row" >
       <div class= "col md-4 contup" >
        <?php if(isset($_SESSION["message"])) {?>
            <div class="alert alert-<?=$_SESSION["message_type"];?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION["message"]?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
                <?php unset($_SESSION["message"]);} ?>

            <div class="card card-body">
                <form action="save_task.php" method="POST"> 
                    <div class="form-group"> 

                        <input type="text"
                            name="task"
                            class="form-control"
                            placeholder="Write your task name."
                            autofocus >
                        <textarea name="description" class="form-control mt-3 p-2" placeholder="Write about you task." row=2 autofocus></textarea>
                        <input type= "submit" class= "btn btn-outline-secondary btn-block add" name="save_task" value="ADD Your Task">
                    </div>
                </form>
            </div>  
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Task </th>
                        <th> Description </th>
                        <th> Created At </th>
                        <th> Action </th> 
                    </tr>                       
                </thead>
                <tbody>
                    <?php $query= "SELECT * FROM todoList";
                    $result_task = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result_task)) { ?>
                    <tr>
                        <td> <?php echo $row["title"] ?> </td>
                        <td> <?php echo $row["description"] ?> </td>    
                        <td> <?php echo $row["create_at"] ?> </td>                        
                        <td> <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning but"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg> </a> 
                        <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger but" onclick="return confirm('Are you sure?')"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                        </svg>   </a> 
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
    </div>
</div>


<?php include("includes/footer.php")?>