<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/78a6f78f37.js" crossorigin="anonymous"></script>
    <title>Edit-data</title>
</head>
<style>
    a img{
        width: 15px;
        color: white;
    }
</style>
<body>
    <div class="container mt-5">
        <a href="/" class="btn btn-primary">Back Home <img src="/img/arrow-left-solid.svg" alt=""></a>
        <div class="row">
            <div class="col-12">
                <div class="col-4">
                    <label for="status" class="form-label">Status</label>
                    <div class="form-control">
                        {{$task->detail}}
                    </div>
                </div>
                <div class="col-4">
                    <label for="detail" class="form-label">detail</label>
                    <div class="form-control">
                        {{$task->status}}
                    </div>
                </div>
            </div>
            <div class="col-2 mt-2">
                <a href="/task-edit/{{$task->id}}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</body>
</html>