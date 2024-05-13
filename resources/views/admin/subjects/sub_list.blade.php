<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h1>Subject List</h1>
    <hr>
    <a href="{{ route('subject.create') }}" class="btn btn-primary btn-md">Add New Subject</a> <br> <br>
    <table border="1" class="table table-bordered">
        <thead>
            <tr>
                <th>SL</th>
                <th>Photo</th>
                <th>Subject Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{asset('images/'. $s->photo) }}" alt="photo" height="70"
                        width="70"></td>
                    <td>{{ $s->title }}</td>
                    <td class="d-flex gap-3">
                       <div>
                        <a class="btn btn-primary btn-sm" href="{{ route('subject.edit', $s->id) }}"><i class="fa fa-edit" ></i> </a>
                       </div>
                        <div>
                            <a class="btn btn-secondary btn-sm"  href="{{ route('subject.show', $s->id) }}"><i class="fa fa-eye" ></i></a>
                        </div>
                        
                        <div>
                            <form action="{{ route('subject.destroy', $s->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    onclick="return confirm('Are You Confirm to Delete')"><i class="fa fa-trash-o"  style="color:red"></i></button>
                            </form>
                        </div>
                       
                    </td>
                </tr>
            @empty
                <tr>
                    <td>No Data Found!! </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    </div>
    
</body>

</html>


