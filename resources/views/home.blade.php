<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container1 h2{
            float: left;
        }
        .container1 button{
            float:right;
        }
        .container{
            margin-top:60px;
        }
        #mainTitle{
            text-align: center;
            background-color: black;
            letter-spacing: 5px;
            color:white;
            font-weight: 500;
            padding: 15px;
        }
    </style>
</head>
<body>
    
    <h1 id="mainTitle">Laravel CRUD APP</h1>
    
    <div class="container">
    <div class="container1">
        <h2>Student's list:</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add student
        </button>
    </div>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>City</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td> {{$item->id}} </td>
                <td> {{$item->name}} </td>
                <td> {{$item->city}} </td>
                <td> {{$item->age}}</td>
                <td> {{$item->contact}}</td>
                <td class="text-center button-container">
                    <a 
                        href="/student/update/{{$item->id}}" 
                        class="btn btn-warning"
                    >
                        Edit
                    </a>
                    <a href="/student/deleteStudent/{{$item->id}}" class="btn btn-danger ">Delete</a>
                 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{$data->links()}}
    </div>
</div>  



    <!-- CREATE STUDENT Modal -->
    <form action={{route('addNewStudent')}} method="post">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD NEW STUDENT</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="form-group formDivStyle">
                        <label for="name" class="form-label">Enter Student name:</label>
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group formDivStyle">
                        <label for="city" class="form-label">Enter city:</label>
                        <input class="form-control" name="city" type="text">
                    </div>
                    <div class="form-group formDivStyle">
                        <label for="mobile" class="form-label">Enter age:</label>
                        <input class="form-control" name="age" type="number">
                    </div>
                    <div class="form-group formDivStyle">
                        <label for="contact" class="form-label">Enter contact:</label>
                        <input class="form-control" name="contact" type="number">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" value="Add Student">
            </div>
            </div>
        </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>