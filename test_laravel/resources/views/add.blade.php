<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
    <title>Document</title>
</head>
<body>
    <div>
        <h1 id="label-form">Add form</h1>
        <from action="/customer" method="POST">
            @csrf
            <label for="">Name : </label>
            <br>
            <input type="text" name="name">
            <br><br>
            <label for="">Phone : </label>
            <br>
            <input type="text" name="phone">
            <br><br>
            <button type="reset" class="btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>