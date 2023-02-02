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