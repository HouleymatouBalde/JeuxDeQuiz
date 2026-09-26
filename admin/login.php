<?php 
// POUR REDIRIGER VERS DASHBOARD
if($_POST){
        die("test");
        header('location:dashboard.php');
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux de quiz</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body class="login-page">
    <div  class="container-fluid">
    
        <div class="row d-flex justify-content-center">
            <div class="card shadow-lg mt-3 border p-3 col-5">
                <form action="">
                    <div class="row">
                        <label for=""> <h4 class="text-center">MEMBER LOGIN</h4> </label>
                    </div>
                    <div class="form-group mb-3">
                        <input placeholder="email" class="form-control" type="email" name="email ">
                    </div>
                    <div class="form-group mb-3">
                        <input placeholder="🔒............" class="form-control" type="password" name="password" id="">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-outline-primary w-100" >LOGIN</button>
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" name="checkbox">
                        <label for="">Remember me</label>
                         <a class="lien" href="">Forgot password?</a>
                    </div>

                </form>

            </div>

        </div>


    </div>
                <h4 class="text-center">Copyright 0 2018 Your Brand Name. lnc</h4>

            




</body>



















</html>