<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
<form action="/student/updateStudent/{{$data->id}}" method="post">
    @csrf
    @method('Put')
    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update STUDENT</h1>

        <div class="form-group formDivStyle">
            <label for="name" class="form-label">Name:</label>
            <input class="form-control" name="name" type="text" value="{{$data->name}}">
        </div>
        <div class="form-group formDivStyle">
            <label for="city" class="form-label">City:</label>
            <input class="form-control" name="city" type="text" value="{{$data->city}}">
        </div>
        <div class="form-group formDivStyle">
            <label for="mobile" class="form-label">Age:</label>
            <input class="form-control" name="age" type="number" value="{{$data->age}}">
        </div>
        <div class="form-group formDivStyle">
            <label for="contact" class="form-label">Contact:</label>
            <input class="form-control" name="contact" type="number" value="{{$data->contact}}">
        </div>
        <input type="submit" class="btn btn-success" value="Update Student">
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>