<?php session_start(); 

    include_once("include/database.php");

    $result=mysqli_query($mysql,"SELECT * FROM todo");
    //$row=mysqli_fetch_assoc($result);

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
                <strong><h2>All ToDo</h2></strong>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-5 d-flex justift-content-between mr-2">
                <h3>Add ToDo</h3>
                <a href="addtodo.php" class="btn btn-success  ml-2">Add</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Remarks</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)):?>
                <tr>
                    <th scope="row"><?php echo $row["id"]; ?></th>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["remarks"]; ?></td>
                    <td>
                        <a href="updatetodo.php?id=<?php echo $row["id"];  ?>" class="btn btn-success">Update</a>
                        <a href="deletetodo.php?id=<?php echo $row["id"];  ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        </div>
           
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>