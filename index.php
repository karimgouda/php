<?php
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
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
        .coll{
            padding-top: 10%;
        }
        .coll h1{
            font-style: italic;
            font-family: "Andale Mono";
        }
        .line{
            width: 10%;
            height: 3px;
            background-color: blue;
            margin: auto;
        }
        label{
            font-family: "Arial Black";
        }
    </style>
</head>
<body>


    <div class="w-75 m-auto  coll">
        <h1 class="text-center">LOGIN</h1>
        <div class="line"> </div>
        <form action="handelIndex.php" method="post">
            <label for="email"  >EMAIL:</label>
            <input type="email" placeholder="Enter Your email" name="email" required class="form-control mb-3" id="email">
            <label for="password">PASSWORD:</label>
            <input type="password" placeholder="Enter Your Password" name="password" required class="form-control mb-3" id="password">
            <button type="submit" class="btn btn-outline-success">SUBMIT</button>
        </form>
    </div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
