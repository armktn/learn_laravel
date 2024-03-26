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
    <div class="container">
        <h1>Update Form</h1>
        <br>
        <form action="/customers/{{$c_data -> c_id}}" method = "POST" > 
            @csrf
            @method("PUT")
            <label for="">Name : </label>
            <input type="text" name = "name" value = {{$c_data -> c_name}}>
            <br>
            <br>
            <label for="">Phone : </label>
            <input type="text" name = "phone" value = {{$c_data -> c_phone}}>
            <br>
            <br>
            <button class ="submit-btn" type = "submit">submit</button>
        </form>
    </div>
</body>
</html>