<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../style/style.css">
        <style>
            .formbody{
                background-color: gray;
                width: 50%;
                margin: 100px auto 0;
                padding: 25px;
            }
            textarea{
                width: 100%;
                padding: 3px;
                border: 2px solid black;
                border-radius: 7px;
            }
            label{
                font-size: 23px;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            button{
                width: 100px;
                font-size: 18px;
                color: green;
                border-radius: 5px;
                padding: 5px;
            }
            button:hover{
                color: lightgreen;
                /* background-color: lightgrey; */
                cursor: pointer;
            }
            h1{
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 55px;
                text-align: center;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
      
        <h1>welcome</h1>
        <div class="formbody">
        <form method="POST" action="encryptdata.php">
            <div>
                <label>Message</label>
            <textarea name="text" id="msg" rows="3" placeholder="Enter text"></textarea>
            </div>
            <button type="submit" name="encrypt">Encrypt</button>
            <button type="submit" name="decrypt">Decrypt</button>
            

        </form>
        
        </div>
        
      
    </body>
</html>