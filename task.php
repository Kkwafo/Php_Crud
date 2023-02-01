<?php include("db.php");?>


<?php include("includes/header.php");?>



<div class= "container top"> 
    <div class = "row" >
       <div class= "col md-4">
            <div class="card card-body">
                <form action="" method="POST"> 
                    <div class="form-group"> 

                    <div class="input-group mb-2">
                    <input type="text"
                            name="name"
                            class="form-control"
                            placeholder="Write area name"
                            value="<?php $task;
                            //quiero que el value se guarde en una variable para luego cuando cree la tabla me modifique la plantilla de inicio.
                            ?>" 
                             >
                    
                        <div class="input-group-append">
                            
                        </div>
                        </div>
                        <input type="text"
                            name="task"
                            class="form-control"
                            placeholder="Edit your task"
                            value="<?php echo $task;?>" 
                             >
                        <textarea name="description"class="form-control mt-3 p-2"placeholder="Edit the content"row=2><?php echo $description;?></textarea>  
                    </div>
                    <button class="btn btn-success mt-4" name=update > Create </button>
                </form>
            </div>  
         </div>
    </div>
</div>

<?php include("includes/footer.php")?>