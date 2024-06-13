<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>API DATA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            .formbody{
                background-color: skyblue;
                width: 90%;
                margin: 100px auto 0;
                padding: 25px;
            }
            input{
                padding: 5px;
                margin: 10px;
                /* width: 70%; */
            }
            
        </style>

    </head>
    <body>
       <div class="formbody">
        <form action="api_me">
            <div>
            <label>Phone Number</label>
            <input type="number" name="number">
            </div>
            <div>
            <label>Message</label>
            <input type="text" name="msg">
            </div>
            <input type="submit">

        </form>

       </div>
    </body>
</html>