<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teachers Profile</title>
</head>
<body>
    <h1>Teachers Profile </h1>
    <h2>Photo: <img src="{{asset('images/'.$teacher->photo)}}" alt="photo"></h2>
    <h2>Name:{{$teacher->name}}</h2>
    <h2>Designation:{{$teacher->designation}}</h2>
</body>
</html>