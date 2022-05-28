<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo '<pre>';
    // var_dump($_REQUEST);
    // echo '</pre>';

if(!empty($_POST["Username"])){
    header('Location: index.php?error=Username');
}else{
    $bien_username=htmlspecialchars($_POST["Username"]);
    echo "<p>Hello".$bien_username."!</p>";
}
?>
</body>
</html>