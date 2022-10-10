<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/78a6f78f37.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>TODO App</title>
</head>
<body>
    <div class="mycontainer">
        <div class="row">
            <div class="col-lg-12 title">
                <h2>To-Do List</h2>
            </div>
            <div class="col-lg-12 myform">
                {{-- @form-searchtask --}}
                <form action="{{url('add-task')}}" method="POST">
                    @csrf
                    <div class="row mt-2 mb-2">
                        <div class="col-lg-4 mt-2 mb-2">
                            <input type="text" placeholder="Enter task here" name="task" class="form-control">
                        </div>
                        <div class="col-lg-4 mt-2 mb-2">
                            <select name="status" id="status" class="form-select">
                                <option value="" style="display: none">Choose status</option>
                                <option value="pending">pending</option>
                                <option value="done">done</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mt-2 mb-2">
                            <button class="btn btn-primary">
                                Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
                

                <div class="col-lg-12 mt-5">
                    <div class="dropdown mb-3">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/done">Show Done</a></li>
                            <li><a href="/pending"class="dropdown-item">Show Pending</a></li>
                            <li><a href="/" class="dropdown-item">Clear Filter</a></li>
                        </ul>
                    </div>
                    <table class="table table-light table-striped">
                        <thead>
                          <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Task</th>
                            <th scope="col">Status</th>
                            <th scope="col-4">Date Added</th>
                            <th scope="col">Updated at</th>
                            <th style="width: 16.66%" scope="col-4">action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($tasks as $key=>$task)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$task->detail}}</td>
                                <td>{{$task->status}}</td>
                                <td>{{$task->created_at}}</td>
                                <td>{{$task->updated_at}}</td>
                                <td>
                                    <form action="/task-delete/{{$task->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="/task-edit/{{$task->id}}"><img src="img/pen-to-square-solid.svg"></a> |
                                        <a href="javascript:void(0)" onclick="this.parentElement.submit();"><img src="img/trash-solid.svg"></a> |
                                        <a href="/task-view/{{$task->id}}"><img src="img/eye-solid.svg"></a>
                                    </form>
                                </td>
                            </tr>    
                          @endforeach
                        </tbody>
                      </table>
                </div>
                {{-- @popuptab --}}
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Some text in the Modal..</p>
                    </div>
                
                </div>

            </div>
        </div>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>