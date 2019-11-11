<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'db.php';
$id = $_GET['id'];
$sql = "select * from tasks where id='$id'";
$rows = $db->query($sql);
$row = $rows->fetch_assoc();
if (isset($_POST['send'])) {

    $task = $_POST['task'];

    $sql1 = "UPDATE tasks set name='$task' WHERE id= '$id'";
    $db->query($sql1);
    header('location: index.php');
}
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
            <center><h1>Update Todo list</h1></center> 

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-10 col-md-offset-1">
                    <table class="table">
                        
                        <hr><br>
                        <!-- The Modal -->

                                        <form method="post">
                                            <div class="form-group">
                                                <label>Task Name</label>
                                                <input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
                                            </div>
                                            <input type="submit" name="send" value="send" class="btn btn-success">
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                        </div>
                    </table>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
