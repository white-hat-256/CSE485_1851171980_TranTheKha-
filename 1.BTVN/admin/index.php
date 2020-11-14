<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags --
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
  <body>    
        <main class="container" style="background-color:blanchedalmond ; border:5px solid #cecece;">
        <div class="row">
             <table class="table table-bordered " >
            <h1 class="text-center">Danh Sách Môn Học</h1>
             <br>    
              <!-- <label >Tên Môn </label>
                <input type="text" name="id" value="">  <button type="button" >Tìm</button> -->
              
                <thead class="thead thead-dark">
                    <tr >
                        <th>mã</th>
                        <th>Tên Môn</th>
                        <th>Mô Tả</th>    
                       <th>Edit</th>  
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                   <?php
                        require('config.php');
                        include('function.php');
                        //truy vấn
                        $subject = getAllsubject();
                        foreach($subject as $row){
                    ?>    
                            <tr>
                            <td><?php echo $row[0];?></td>
                            <td><?php echo $row[1];?></td>  
                            <td><?php echo $row[2];?></td>                                                      
                            <td><a href="edit.php?id=<?php echo $row[0];?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?id=<?php echo $row[0];?>"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                    <?php
                        }
                    ?>           
                </tbody>              
            </table>
            <form action="add.php" method="POST" class="fSorm-inline my-2 my-lg-0">                 
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> thêm môn </button>
              </form>
        </div>
        </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>







