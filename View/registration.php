<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .formbody{
                background-color: gray;
                max-width: 80%;
                margin: 100px auto 0;
                padding: 25px;
                border-radius: 5px;
            }
            input{
                width: 100%;
                padding: 5px;
                border-radius: 7px;
                font-size: 18px;
            }
            span{
                color: red;
            }

        </style>
    </head>
    <body>
        

    <h2>PHP Form Validation Test</h2>
<!-- <p><span class="error">* required field</span></p> -->
<div class="formbody">
    <h1>Registration Form</h1>
    <form method="post" action="welcome.php">  
  Name: <input type="text" name="name" required>
  <br><br>
  Tel: <input type="number" name="number" required max:11 min:7>
  
  <br><br>
  E-mail: <input type="text" name="email" required>
 
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  
</form>
</div>

    </body>
</html>