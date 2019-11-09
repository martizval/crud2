<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'db.php';
$sql = "select * from tasks";
$rows = $db->query($sql)

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
              crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
        accesskey=""crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>
        <title>CRUD APP</title>
    </head>
    <body>

        <div class="container">
            <center><h1>Todo list</h1></center> 

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table">
                        <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">
                            Add Task</button>
                        <button type="button" class="btn btn-default float-right">
                            Print</button>
                        <hr><br>
                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Task</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form method="post" action="add.php">
                                            <div class="form-group">
                                                <label>Task Name</label>
                                                <input type="text" required name="task" class="form-control">
                                            </div>
                                            <input type="submit" name="send" value="send" class="btn btn-success">
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Task</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php while ($row = $rows->fetch_assoc()): ?>
                                    
                                
                                <th><?php echo $row['id']?></th>
                                <td class="col-md-10"><?php echo $row['name']?></td>
                                <td><a href="" class="btn btn-success">
                                        Edit</a></td>
                                <td><a href="" class="btn btn-danger">
                                        Delete</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
