<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Pagination Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
    crossorigin="anonymous"></script>
    <style>
        body{background-color:black;color:yellow;}
        h1{text-align:center;}
        .navbar{float: right;}
        a{color:red;}
        a:hover{color:green;text-decoration:none;}
    </style>
</head>
<body>
    <h1>Laravel Payrolls Demo</h1>
    <div class="navbar">
        <a href="{{URL('/')}}">Home</a>
    </div>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">#</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Working</th>
                    <th scope="col">Break</th>
                    <th scope="col">Overtime</th>
                    <th scope="col">Date_P</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payrolls as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <th scope="row">{{$data->empid}}</th>
                    <th scope="row">{{$data->working}}</th>
                    <th scope="row">{{$data->break}}</th>
                    <th scope="row">{{$data->ot}}</th>
                    <th scope="row">{{$data->date_p}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $payrolls->links() !!}
        </div>
    </div>
</body>
</html>