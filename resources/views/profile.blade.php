<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <style>
        body {
            background-image: linear-gradient(white,floralwhite, #f1e6da, #fce8d1);
        }
        #header{
            font-family: "Times New Roman";
            font-size: 50px;
            text-align: center;

        }
        #main{
            height: 500px;
            font-family: "Times New Roman";
            display: flex;

        }
        #footer{
            margin:10px;
            font-family: "Times New Roman";
            height: 100px;
            text-align: center;
        }
        #info{
            width: auto;
            background-color: rgba(210, 193, 175, 0.19);
            float: right;
            padding-left: 200px;
        }
        #left{
            width: 310px;
            background-color: rgba(210, 193, 175, 0.18);
            float: left;
        }
        #image{
            padding-top: 30px;
            padding-left: 100px;
        }
        #contents{
            padding-top: 10px;
            padding-left: 50px;
        }
    </style>
</head>
<body>
<div id="header" >
    <p>profile Page</p>

</div>
<hr>
<div id="main">
    <div  id="left">
        <div id="image">
            <img src="{{ asset('images/me.jpeg') }}" width="160" height="200">
        </div>
        <div id="contents">
            <ul type="none">
                <li><img src="{{ asset('images/resources/3916882.png') }}" width="15" height="15">
                Iraq _ Sulaymani </li><br>
                <li>
                    <img src="{{ asset('images/resources/3917156.png') }}" width="15" height="15">
                +964 7717 *** ***</li><br>
                <li>
                    <img src="{{ asset('images/resources/3916631.png') }}" width="15" height="15">
                    nada.alseidy@gmail.com
                </li>
                <br>
                <li>
                    <img src="{{ asset('images/resources/6422199.png') }}" width="15" height="15">
                    Nada Alseidy
                </li>
            </ul>
        </div>

    </div>


    <div id="info">
        <h3>Nada Qasim Khaled</h3>
        <h3>Information Technology</h3>
        <h3>Education:</h3>
        <p>Sulaimani Polytechnic University / Technical College of Information System</p>
        <h3>Biography: </h3>
        <p>Hello, I'm Nada!
            Studying IT in Sulaymaniyah Polytechnic Uni.

            I am a 3rd stage student in the IT department currently living in Sulaymaniyah but originally from Baghdad, I'm interested in game development
            and web programming.</p>
        <p> I've worked on multiple projects in web development some of them are:
        </p>
        <ul>
            <li>Library Management System</li>
            <li>Makeup and beauty products market website</li>
            <li>Games and electronics selling website</li>
            <li>Hotel management system</li>

        </ul>
    </div>

    </div>

<hr>
<div id="footer">
    <p>&copy Copy Rights
        <?php
        echo date("Y");
        ?>
    </p>

</div>
</body>
</html>
