<?php session_start(); 

    include_once("include/database.php");

    $message="";
    $id=0;
    $title="";
    $remarks="";
    
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $result=mysqli_query($mysql,"SELECT * FROM todo WHERE id='$id'");
        $row=mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)> 0)
        {
            $title=$row["title"];
            $remarks=$row["remarks"];
        }

        if(isset($_POST['title']))
        {
            $title=$_POST['title'];
            $remarks=$_POST['remarks'];

            if($title=="")
            {
            $message="title not be empty";
            }
            else{
                mysqli_query($mysql,"UPDATE todo SET title='$title', remarks='$remarks' WHERE id='$id' ");

                $message="Updated Succesfully";
            
            }
        }
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
                <strong><h2>Add ToDo</h2></strong>
            </div>
        </div>

        <div col-8>
        <form action="" method="POST">
                <p class="text-danger text-center"><?php echo $message; ?></p>
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="<?php echo $title; ?>" placeholder="Enter Title">
                <label for="exampleInputPassword1">Remarks</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="remarks" value="<?php echo $remarks; ?>" placeholder="Remarks">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>