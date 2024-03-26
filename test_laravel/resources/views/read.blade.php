<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/add.css")}}">
    <title>Document</title>
</head>
<body>
    <div class = "container">
        <h1>Read Form</h1>
        <br>
        <div>
            <label for="">Name : {{$c_data -> c_name}}</label>
            <br>
            <br>
            <label for="">Phone : {{$c_data -> c_phone}}</label>
            <br>
            <br>
            <a href="/customers"><button class ="back-btn" type = "button">Back</button></a>
        </div>
    </div>
</body>
</html>