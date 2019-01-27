<?php 
    // lets write code here

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="box box-green">
                <div class="box-header ">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">To Do List</h3>
                    <div class="box-body">
                        <ul class="todo-list">
                            <li>
                                <a href="" class="text-success"><i class="fa fa-check"></i></a>
                                <span class="text">Design a nice theme</span>
                                <div class="tools">
                                    <a href="" class="text-danger"><i class="fa fa-trash-o"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="box-footer clearfix no-border">
                        <button class="btn btn-default pull-right toggleHidden"><i class="fa fa-plus"></i> Add item</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 offset-md-3 toggle hide">
            <div class="box box-green">
                <div class="box-header ">
                    <i class="ion ion-clipboard"></i>
                    <h3 class="box-title">Add Task</h3>
                    <div class="box-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="email" class="form-control" name="" placeholder="What needs to be done?">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>

</html>