<?php
$email=$_POST['email'];
$password=$_POST['password'];

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opration = $_POST['opration'];

if($opration == '+'){
    $sum=$num1 + $num2;
}elseif ($opration == '-'){
    $op = $num1-$num2;
}elseif ($opration == '*'){
    $mul = $num1 * $num2;
}elseif ($opration == '/'){
    $may = $num1 / $num2;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" href="logo.png">
    <style>
        body{
            background-color: black;
            color: white;
        }
        input{
            background-color: black !important;
            color: white !important;
        }
        .line{
            width: 25%;
            height: 3px;
            background-color: #0a58ca;
            margin: auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                    <a class="nav-link" aria-current="page" href="#">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="#">CONTACT</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li>
                    <span class="">
                        <?php echo $email?>
                    </span>
                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="my-5">
    <h2 class="text-center">
        WELCOM: <span>  <?php echo strstr($email,'@',true)?> </span>
    </h2>
</div>



<div class="w-50 m-auto">
    <h2 class="text-center">calculator</h2>
    <div class="line"></div>

    <h4><?php echo $sum?></h4>
    <h4><?php echo $op?></h4>
    <h4><?php echo $mul?></h4>
    <h4><?php echo $may?></h4>


    <form action="" method="post">
        <label for="num1"> ONE NUMBER</label>
        <input type="number" required name="num1" class="form-control mb-3" id="num1">
        <label for="num2">TOW NUMBER</label>
        <input type="number" required name="num2" class="form-control mb-3" id="num2">
        <select class="form-control w-25 mb-3" name="opration">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>

        </select>
        <button class="btn btn-success">ENTER</button>

    </form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


