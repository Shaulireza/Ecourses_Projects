<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Revised Course Form</h1>
    <hr>
    {!! Form::open(['url' => route('course.update',$course->id), 'files' => true, 'method'=>'PATCH']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', $course->name, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('syllabus', 'Syllabus') !!}
                    {!! Form::text('syllabus', $course->syllabus, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('duration', 'Duration') !!}
                    {!! Form::text('duration', $course->duration, ['class' => 'form-control']) !!}
                </div>
            </div>
            <br><br><br>
            <div class="card-footer">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
   
</body>

</html>
