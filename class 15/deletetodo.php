<?php session_start(); 

    include_once("include/database.php");

    $message="";
    $id=0;
    
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        mysqli_query($mysql,"DELETE FROM todo WHERE id='$id' ");

        $message="Deleted Succesfully";
    }
    
    

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include_once('include/header.php'); ?>

    <div class="container">
    <div class="row justify-content-center">
            <div class="col-5">
                <h1 class="text-danger text-center"><?php echo $message; ?></h1>
            </div>
        </div>
    </div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>