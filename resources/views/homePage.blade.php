<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <style>
        body {
            background-image: linear-gradient(white,floralwhite, #f1e6da, #fce8d1);
        }
        #header{
            font-family: "Times New Roman";
            font-size: 50px;
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #000000

        }
        #main{
            height: 350px;
            font-family: "Times New Roman";
            margin: 10px;
            display: flex;
            justify-content: center;
        }
        #footer {
            margin: 10px;
            font-family: "Times New Roman";
            height: 100px;
            text-align: center;
        }

        #main div{
            margin-top: 50px;
            height: 180px;
            width: 400px;
            background-color: rgba(210, 193, 175, 0.65);
            text-align: center;
            border-radius: 10px;
            font-size: 30px;
            padding-top: 90px;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
<div id="header" >
    <p>Home Page</p>
</div>
<hr>
<div id="main">
    <div>
        <a href="profile"> Profile </a><br>
        <a href="profile"> Biography </a>
    </div>
</div>
<hr>
<div id="footer">
<p>&copy Copy Rights <?php
    echo date("Y");
    ?></p>
</div>
</body>
</html>

