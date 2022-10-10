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
        <form action="{{url('task-edit',$task->id)}}" class="mt-2" method="POST">
            {{csrf_field()}}
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="col-4">
                        <label for="task" class="form-label">Task</label>
                        <input type="text" name="detail" class="form-control" value="{{$task->detail}}">
                    </div>
                    <div class="col-4">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="" style="display: none">Choose</option>
                            <option value="pending"{{$task->status=='pending'?'selected':''}}>Pending</option>
                            <option value="done"{{ $task->status=='done'?'selected':'' }}>Done</option>
                        </select>
                    </div>
                </div>

                <div class="col-2 mt-2">
                    <button class="btn btn-primary">
                    Update!
                </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>