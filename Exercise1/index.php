<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Addition Of Two Numbers Instructions</h1>
    <br>
    <div class="container">
    <form method="post">
        <input type="text" class="form-control mb-3 " name="number1" value="">
        <input type="text" class="form-control mb-3" name="number2" value="">
        <input type="submit" name="submit" class="btn btn-primary" value="submit"><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        // if (!empty($_POST['number'])){}
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $somme = $number1+$number2;
    echo "la somme de $number1 et $number2 est :".$somme; 
    }
     ?>
     </div>
</body>
</html>