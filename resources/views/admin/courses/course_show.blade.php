<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Details</title>
</head>
<body>
    <h1>Course Details </h1>
    <h2> Course Title:{{$course->name}}</h2>
    <h2>Syllabus:{{$course->syllabus}}</h2>
    <h2>Duration:{{$course->duration}}</h2>
</body>
</html>