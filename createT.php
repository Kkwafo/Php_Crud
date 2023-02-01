<?php 
include("db.php");
include("includes/header.php");

//Crear tabla
 
if(isset($_GET[('createT')])){
    $query= "CREATE table if not exists todoList (
        id Int auto_increment unique primary key,
        title varchar(255),
        description text,
        create_at  timestamp
        );";
    $result = mysqli_query($conn, $query);
    if (result)
  {
  echo "Table was created";
  }
else
  {
  echo "Error creating table " . mysqli_error($result);
  };

}
header("Location: index.php");
echo $result;

?>