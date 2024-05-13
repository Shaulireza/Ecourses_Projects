<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject Details</title>
</head>
<body>
    <h1>Subject Details </h1>
    <h2>Photo: <img src="{{asset('images/'.$subject->photo)}}" alt="photo"></h2>
    <h2>Title:{{$subject->title}}</h2>
</body>
</html>