<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Slider</title>
</head>
<body>
    <h1>Show Slider </h1>
    <h2>Photo: <img src="{{asset('images/'.$slider->photo)}}" alt="photo"></h2>
    <h2>Heading:{{$slider->heading}}</h2>
</body>
</html>