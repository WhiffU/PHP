<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method ="post" action="check.php">
        <label>Username: <input name = "Username" type="text" required minlength="7"></label>
        <?php 
            if(!empty($_GET)){
                if($_GET["error"]== "Username"){
                    echo "<p style='color:red;'> Please enter your Username!</p>";
                }
            }
        ?>
        <br>
        <label>Passowrd: <input name="password" type="password" required minlength="7"></label>
        <?php 
            if(!empty($_GET)){
                if($_GET["error"]== "password"){
                    echo "<p style='color:red;'> Please enter your password!</p>";
                }
            }
        ?>
        <button>Submit</button>
    </form>
</body>
</html>