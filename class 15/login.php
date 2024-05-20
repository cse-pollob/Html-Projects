<?php
    session_start();
    include_once('include/database.php'); 
?>
<?php
    $message='';
    if(isset($_POST['email']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $encyptedPass=md5($pass);

        if($email=="" || $pass=="")
        {
           
        }
        else{
            
            $result=mysqli_query($mysql,"SELECT * FROM register WHERE email='$email' AND pass='$encyptedPass'");
            $row=mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)> 0)
            {
                $message= "Login Success";
                //$_SESSION['is_logged']
                $_SESSION['is_logged_in']=true;
                $_SESSION['email']=$email;
                header("Location: http://localhost/Ray/Class 15/index.php");
            }
            else{
                $message="User not exits";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <?php include_once('include/header.php'); ?>

    <div class="row justify-content-center">
        <div class="col-6">
            <p class="text-danger text-center"><?php echo $message; ?></p>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>