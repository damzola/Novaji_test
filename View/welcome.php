<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  welcome  <?php
    echo $_POST["name"]; 
    
    ?><br>
    Your Tel is: <?php echo $_POST['number'];?>

    Your email is: <?php echo $_POST['email'];?>
    
</body>
</html>